
<?php
    include_once('_includes/db.class.php');
    include_once('_includes/inflect.class.php');
    $db = new DB('_data/db.json');

    $args = $_SERVER['QUERY_STRING'];

    $filters = $db->table('report_filters')->get();
?>

<?php include '_header.php'; ?>

    <header class="Page-header">
        <a href="/">Home</a></a>
        <h2>Reports</h2>
    </header>

    <div class="Page-body">

        <div class="SearchBox">
            <form action="<?php echo $_SERVER['PHP_SELF'] . '?' . $args ?>" method="get">

                <div class="grid">
                    <?php foreach ($filters as $filter): ?>

                        <div class="grid__item one-half">
                            <div class="Filter <?php echo 'Filter--'.strtolower($filter['id']) ?>">
                                <div class="Filter-label"><?php echo (($filter['id'] != 'search-in') ? 'Filter by ' : 'Enter ') . $filter['name'] ?></div>

                                <?php if( $filter['id'] == 'page-range' ): ?>

                                    <input type="number" name="from" value="" min="0" placeholder="From..." style="display: inline-block; width: auto;">
                                    to
                                    <input type="number" name="to" value="" min="0" placeholder="To..." style="display: inline-block; width: auto;">

                                <?php elseif( $filter['id'] == 'date' ): ?>

                                    <input type="date" name="from" value="" placeholder="From..." style="display: inline-block; width: auto;">
                                    to
                                    <input type="date" name="to" value="" placeholder="To..." style="display: inline-block; width: auto;">

                                <?php elseif( $filter['id'] == 'slider' ): ?>

                                    <div>
                                        <img src="/assets/img/gse-slider.png" alt="" style="width:100%" />
                                    </div>

                                <?php elseif( $filter['id'] == 'type' ): ?>

                                    <div class="grid">

                                        <div class="grid__item one-quarter">
                                            <a href="#" class="Button Button--main" data-modal="Add Filter: <?php echo $filter['name'] ?>">+ Add</a>
                                        </div>
                                        <div class="grid__item three-quarters">
                                            <div class="Filter">
                                                <input type="text" name="" value="">
                                            </div>
                                        </div>
                                    </div>

                                <?php elseif( $filter['id'] == 'search-in' ): ?>

                                    <input type="text" name="search_terms" value="">

                                <?php else: ?>

                                    <select class="chosen-select" name="<?php echo strtolower($filter['id']) ?>[]" data-filter="<?php echo strtolower($filter['id']) ?>" multiple>
                                        <?php sort($filter['options']); ?>
                                        <?php foreach ($filter['options'] as $option): ?>
                                        <option value="<?php echo $option ?>"<?php echo ( isset($_GET[$filter['id']]) && in_array($option, $_GET[$filter['id']]) ) ? ' selected' : '' ?>><?php echo $option ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                <?php endif ?>

                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>

                <div class="SearchBox-footer">
                    <input type="submit" name="search" value="Search" class="Button Button--main">
                </div>

            </form>
        </div>

        <div class="Results">

            <div class="fake"></div>
            <div class="Results-header">
                <div class="matches">20 matches</div>

                <div>
                    <a href="#" rel="internal" class="BackToTop">↑ Back to top</a>

                    <select name="sortby">
                        <option value="asc">Sort by: Name ascending</option>
                        <option value="desc">Sort by: Name descending</option>
                    </select>
                </div>
            </div>

            <div class="Results-content">

                <?php for ($i=0; $i < 20; $i++): ?>
                    <?php include('partials/report.php') ?>
                <?php endfor ?>

            </div>

        </div>

        <div class="LoadMore">
            <span>Load more results</span>
        </div>

    </div>


<?php include('_footer.php') ?>
