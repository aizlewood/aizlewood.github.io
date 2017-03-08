
<?php
    include_once('_includes/db.class.php');
    include_once('_includes/inflect.class.php');
    $db = new DB('_data/db.json');

    $args = $_SERVER['QUERY_STRING'];

    $business_id    = '';
    $structure_id   = '';

    if( isset($_GET['business']) ):
        $business_id    = $_GET['business'];
        $structure_id   = $_GET['structure'];

        $business   = $db->table('lines-of-business')->where('id', $business_id);
        $structure  = $db->table('structures', $business['structures'])->where('id', $structure_id);
        $filters    = $db->table('filters', $structure['filters'])->get();
    endif;

    $filtersSelected = count($_GET) - 2;

    $special_structures = array('intermediaries', 'gse', 'educational-objective');

    $reportType = isset($_GET['reporttype']) ? $_GET['reporttype'] : '';
    $reports = [];
    $reports['alignment']           = 'Alignment';
    $reports['alignment-summary']   = 'Alignment summary';
    $reports['coverage-metrics']    = 'Coverage metrics';
    $reports['generic']             = 'Generic';
?>

<?php include '_header.php'; ?>

    <?php if ( isset($_GET['align'] )): ?>

    <header class="Page-header">
        <a href="/">&lt; Exit alignment</a>
        <h2>Alignment Set-up</h2>
    </header>

    <div style="margin-bottom: 10px;">
        You selected StructureNameX. Select the structure you want to align it to:
    </div>

<?php elseif( isset($_GET['report']) ): ?>

    <header class="Page-header">
        <a href="report-setup?">&lt; Back</a>
        <h2>Report Set-up</h2>
    </header>

    <div style="margin-bottom: 20px;">
        You are creating <?php echo ($reports[$reportType][0] == 'A') ? 'an ' . $reports[$reportType] : 'a ' . $reports[$reportType] ?> report with <?php echo $structure['name'] ?> as source A<br>
        Select the structure you want to use as source B:
    </div>

    <?php else: ?>

    <header class="Page-header">
        <a href="/">Home</a> &gt; <a href="/?business=<?php echo $business['id'] ?>"><?php echo $business['name'] ?></a>
        <h2><?php echo $structure['name'] ?></h2>
    </header>

    <?php endif; ?>

    <div class="Page-body" data-business="<?php echo $business_id ?>" data-structure="<?php echo $structure_id ?>">

        <?php if( !in_array($structure['id'], $special_structures) ): ?>

        <div class="SearchBox">
            <form action="<?php echo $_SERVER['PHP_SELF'] . '?' . $args ?>" method="get">
                <input type="hidden" name="business" value="<?php echo $business['id'] ?>">
                <input type="hidden" name="structure" value="<?php echo $structure['id'] ?>">
                <?php if ( isset($_GET['align'] )): ?>
                    <input type="hidden" name="align" value="true">
                <?php endif; ?>

                <div class="grid">
                    <?php foreach ($filters as $filter): ?>
                        <div class="grid__item one-half">
                            <div class="Filter <?php echo 'Filter--'.strtolower($filter['id']) ?>">
                                <div class="Filter-label">Filter by <?php echo $filter['name'] ?></div>
                                <select class="chosen-select" name="<?php echo strtolower($filter['id']) ?>[]" data-filter="<?php echo strtolower($filter['id']) ?>" multiple>
                                    <?php sort($filter['options']); ?>
                                    <?php foreach ($filter['options'] as $option): ?>
                                    <option value="<?php echo $option ?>"<?php echo ( isset($_GET[$filter['id']]) && in_array($option, $_GET[$filter['id']]) ) ? ' selected' : '' ?>><?php echo $option ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <div class="grid__item one-half">
                        <div class="Filter">
                            <div class="Filter-label">Enter Search Terms</div>
                            <input type="text" name="search_terms" value="">
                        </div>
                    </div>
                </div>

                <div class="SearchBox-footer">
                    <input type="submit" name="search" value="Search" class="Button Button--main">
                </div>

            </form>
        </div>

        <?php endif; ?>

        <div class="Results">

            <?php
                // the number of results should be inversely proportional(ish) to the number of filters applied to give an impression of working search results.
                $results = 20 - ( $filtersSelected * 2 );
            ?>

            <?php if ( !in_array($structure['id'], $special_structures) ): ?>

            <div class="fake"></div>
            <div class="Results-header">
                <div class="matches"><?php echo $results ?> matches</div>

                <div>
                    <a href="#" rel="internal" class="BackToTop">↑ Back to top</a>

                    <select name="sortby">
                        <option value="asc">Sort by: Name ascending</option>
                        <option value="desc">Sort by: Name descending</option>
                    </select>
                </div>
            </div>

            <?php endif; ?>

            <div class="Results-content">
                <?php
                    $blocks = $db->table("curriculum", $structure['curriculum'])->get();
                ?>

                <?php if ( in_array($structure['id'], $special_structures) ): ?>

                    <?php foreach ($blocks as $block): ?>
                        <?php include('partials/curriculum/'.$business['id'].'-'.$structure['id'].'.php') ?>
                    <?php endforeach; ?>

                <?php else: ?>

                    <?php for ($i=0; $i < 2; $i++): ?>
                        <?php foreach ($blocks as $block): ?>
                            <?php include('partials/curriculum/'.$business['id'].'-'.$structure['id'].'.php') ?>
                        <?php endforeach; ?>
                    <?php endfor ?>

                <?php endif; ?>

            </div>

        </div>

        <?php if ( !in_array($structure['id'], $special_structures) ): ?>
            <div class="LoadMore">
                <span>Load more results</span>
            </div>
        <?php endif; ?>

    </div>


<?php include('_footer.php') ?>
