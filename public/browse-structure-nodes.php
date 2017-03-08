
<?php
    include_once('_includes/db.class.php');
    include_once('_includes/inflect.class.php');
    $db = new DB('_data/db.json');

    $args = $_SERVER['QUERY_STRING'];

    if( isset($_GET['business']) ):
        $business_id    = $_GET['business'];
        $structure_id   = $_GET['structure'];
        $curriculum_id  = $_GET['curriculum'];

        $business       = $db->table('lines-of-business')->where('id', $business_id);
        $structure      = $db->table('structures', $business['structures'])->where('id', $structure_id);
        $filters        = $db->table('filters', $structure['filters'])->get();
        $curriculum     = ($structure_id == 'gse' || $structure_id == 'educational-objectives') ? '' : $db->table("curriculum", $structure['curriculum'])->get($curriculum_id);
    endif;

    $node_filters = $db->table("node_filters", $structure['node_filters'])->get();
?>

<?php include '_header.php'; ?>

    <header class="Page-header">
        <a href="/">Home</a> &gt; <a href="/?business=<?php echo $business['id'] ?>"><?php echo $business['name'] ?></a> &gt; <a href="/browse-structures.php?business=<?php echo $business['id'] ?>&structure=<?php echo $structure['id'] ?>"><?php echo $structure['name'] ?></a>
        <?php if ( $structure_id == 'gse' ): ?>
            <h2>Global Scale of English (GSE) Standard</h2>
        <?php elseif ( $structure_id == 'educational-objectives' ): ?>
            <h2>Educational Objectives</h2>
        <?php elseif ( $structure_id == 'external-framework' ): ?>
            <h2><?php echo $curriculum['name'] ?></h2>
        <?php elseif ( $structure_id == 'curriculum-standard' ): ?>
            <h2><?php echo $curriculum['authority-name'] . ' ' . $curriculum['subject-name'] . ' ' . $curriculum['grade-range'] . ' ' . $curriculum['year'] ?></h2>
        <?php elseif( $structure_id == 'product' ): ?>
            <h2><?php echo $curriculum['product-name'] ?></h2>
        <?php elseif( $structure_id == 'intermediaries' ): ?>
            <h2><?php echo $curriculum['name'] ?></h2>
        <?php endif; ?>
    </header>

    <div class="CurriculumStatusBlock" data-component="Dropdown">
        <div class="CurriculumStatusBlock-header">StructureType metadata</div>
        <div class="CurriculumStatusBlock-container">
            <table>
                <tr>
                    <td>Metadata</td>
                    <td>value</td>
                    <td>Metadata</td>
                    <td>value</td>
                </tr>
                <tr>
                    <td>Metadata</td>
                    <td>value</td>
                    <td>Metadata</td>
                    <td>value</td>
                </tr>
                <tr>
                    <td>Metadata</td>
                    <td>value</td>
                    <td>Metadata</td>
                    <td>value</td>
                </tr>
                <tr>
                    <td>Metadata</td>
                    <td>value</td>
                    <td>Metadata</td>
                    <td>value</td>
                </tr>
            </table>
            <div>[<a href="#">Edit</a>]</div>
        </div>
    </div>

    <div class="SearchBox">
        <form action="<?php echo $_SERVER['PHP_SELF'] . '?' . $args ?>" method="get">
            <input type="hidden" name="business" value="<?php echo $business['id'] ?>">
            <input type="hidden" name="structure" value="<?php echo $structure['id'] ?>">
            <input type="hidden" name="curriculum" value="<?php echo $curriculum_id ?>">

            <?php if ( $structure_id != 'gse' && $structure_id != 'educational-objectives' ): ?>
                <input type="hidden" name="curriculum" value="<?php echo $curriculum['id'] ?>">
            <?php endif; ?>

            <?php if (isset($node_filters[0]["functional"])): ?>
                <?php $first = true; ?>
                <?php foreach ($node_filters[0] as $name => $filters): ?>
                    <div class="grid" data-filtergroup="<?php echo $name ?>" <?php if(!$first) { echo 'style="display:none"'; } ?>>
                        <div class="grid__item one-half">
                            <div class="Filter">
                                <div class="Filter-label">Filter by Set</div>
                                <select class="Filter-selectGroup" data-defaultval="<?php echo $name ?>" name="">
                                    <option value="functional">Functional</option>
                                    <option value="grammar">Grammar</option>
                                    <option value="vocabulary">Vocabulary</option>
                                </select>
                            </div>
                        </div>
                        <?php foreach ($filters as $filter): ?>
                            <div class="grid__item one-half">
                                <div class="Filter <?php echo 'Filter--'.strtolower($filter['id']) ?>">
                                    <div class="Filter-label"><?php echo (($filter['id'] != 'search-in') ? 'Filter by ' : '') . $filter['name'] ?></div>

                                    <?php if( $filter['id'] == 'page-range' ): ?>

                                        <input type="number" name="from" value="" min="0" placeholder="From..." style="display: inline-block; width: auto;">
                                        to
                                        <input type="number" name="to" value="" min="0" placeholder="To..." style="display: inline-block; width: auto;">

                                    <?php elseif( $filter['id'] == 'slider' ): ?>

                                        <div>
                                            <img src="/assets/img/gse-slider.png" alt="" style="width:100%" />
                                        </div>

                                    <?php elseif( isset($filter['type']) ): ?>
                                        <?php if ( $filter['type'] == 'add-filter' ): ?>
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
                                        <?php endif; ?>
                                    <?php else: ?>

                                        <select class="chosen-select" name="<?php echo strtolower($filter['id']) ?>[]" multiple>
                                            <?php sort($filter['options']); ?>
                                            <?php foreach ($filter['options'] as $option): ?>
                                                <?php
                                                    $selected = '';
                                                    if( isset($_GET[$filter['id']]) && in_array($option, $_GET[$filter['id']]) ):
                                                        $selected = ' selected';
                                                    endif;

                                                    if( !isset($_GET[$filter['id']]) && strpos($option, ':preselected') !== false ):
                                                        $selected = ' selected';
                                                    endif;

                                                    $option = str_replace(':preselected', '', $option);
                                                ?>
                                                <option value="<?php echo $option ?>"<?php echo $selected ?>><?php echo $option ?></option>
                                            <?php endforeach; ?>
                                        </select>

                                    <?php endif; ?>
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
                    <?php $first = false; ?>
                <?php endforeach; ?>

            <?php else: ?>
            <div class="grid">
                <?php foreach ($node_filters as $filter): ?>

                    <div class="grid__item one-half">
                        <div class="Filter <?php echo 'Filter--'.strtolower($filter['id']) ?>">
                            <div class="Filter-label"><?php echo (($filter['id'] != 'search-in') ? 'Filter by ' : '') . $filter['name'] ?></div>

                            <?php if( $filter['id'] == 'page-range' ): ?>

                                <input type="number" name="from" value="" min="0" placeholder="From..." style="display: inline-block; width: auto;">
                                to
                                <input type="number" name="to" value="" min="0" placeholder="To..." style="display: inline-block; width: auto;">

                            <?php elseif( $filter['id'] == 'slider' ): ?>

                                <div>
                                    <img src="/assets/img/gse-slider.png" alt="" style="width:100%" />
                                </div>

                            <?php else: ?>

                                <select class="chosen-select" name="<?php echo strtolower($filter['id']) ?>[]" multiple>
                                    <?php sort($filter['options']); ?>
                                    <?php foreach ($filter['options'] as $option): ?>

                                        <option value="<?php echo $option ?>"<?php echo ( isset($_GET[$filter['id']]) && in_array($option, $_GET[$filter['id']]) ) ? ' selected' : '' ?>><?php echo $option ?></option>

                                    <?php endforeach; ?>
                                </select>

                            <?php endif; ?>
                        </div>
                    </div>

                <?php endforeach; ?>

                <?php if ( $structure['id'] == 'curriculum-standard' || $structure['id'] == 'intermediaries' ): ?>
                    <div class="grid__item">
                        <div class="Filter-label">Enter Search Terms</div>

                        <div class="grid__item one-quarter">
                            <select name="search-only" style="display: block; width: 100%; margin-top: 8px;">
                                <option value="0">All fields</option>
                                <option value="1">Codes only</option>
                                <option value="2">Names only</option>
                            </select>
                        </div>
                        <div class="grid__item three-quarters">
                            <div class="Filter">
                                <input type="text" name="search_terms" value="">
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="grid__item one-half">
                        <div class="Filter">
                            <div class="Filter-label">Enter Search Terms</div>
                            <input type="text" name="search_terms" value="">
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <div class="SearchBox-footer">
                <input type="submit" name="search" value="Search" class="Button Button--main">
            </div>

        </form>
    </div>

    <?php $results = 5; ?>

    <div class="Results">

        <div class="fake"></div>
        <div class="Results-header">
            <div class="matches"><?php echo $results; ?> matches</div>

            <div>
                <a href="#" rel="internal" class="BackToTop">↑ Back to top</a>

                <?php if ($structure['id'] == 'gse'): ?>
                <div>
                    <span style="font-size: 14px">Sort By:</span>
                    <select class="" name="">
                        <option value="0">GSE Level (low-high)</option>
                        <option value="1">GSE Level (high-low)</option>
                        <option value="2">GSE Learning Objective (A-Z)</option>
                        <option value="3">GSE Learning Objective (Z-A)</option>
                        <option value="4">Skill (A-Z)</option>
                        <option value="5">Skill (Z-A)</option>
                        <option value="6">Status (A-Z)</option>
                        <option value="7">Status (Z-A)</option>
                    </select>
                </div>
                <?php else: ?>
                <select class="" name="">
                    <option value="0">Show: all levels</option>
                    <option value="1">Show: level 1</option>
                    <option value="2">Show: level 1-2</option>
                    <option value="2">Show: level 1-3</option>
                    <option value="2">Show: level 1-4</option>
                    <option value="2">Show: level 1-5</option>
                    <option value="2">Show: level 1-6</option>
                    <option value="2">Show: level 1-7</option>
                    <option value="2">Show: level 1-8</option>
                    <option value="2">Show: level 1-9</option>
                    <option value="2">Show: level 1-10</option>
                </select>
                <?php endif; ?>

                <div style="font-size: 14px;">
                    <a href="#" class="SelectAll">Select All</a> | <a href="#" class="SelectNone">Select None</a>
                </div>

                <button type="button" name="button" class="Button Button--search" data-component="ShowMore" data-structure="<?php echo $structure['id'] ?>">Show more</button>

                <button type="button" name="button" class="Button Button--search" data-component="BulkEdit">Edit Selection</button>

                <button type="button" name="button" class="Button Button--search">Export selection</button>
            </div>
        </div>

        <div class="NodeBlocks">

            <?php
                $nodes = $db->table('nodes', $structure['nodes'])->get();
            ?>

            <?php foreach ($nodes as $node): ?>
                <?php include('partials/nodes/'.$structure_id.'.php') ?>

                <?php if( isset($node['children']) ): ?>
                    <div class="NodeBlock-group">
                    <?php foreach ($node['children'] as $child): ?>
                        <?php $level = 2; ?>
                        <?php $block = $child; ?>
                        <?php include('partials/nodes/'.$structure_id.'-child.php') ?>

                        <?php if( isset($child['children']) ): ?>
                            <div class="NodeBlock-group">
                            <?php foreach ($child['children'] as $child2): ?>
                                <?php $level = 3; ?>
                                <?php $block = $child2; ?>
                                <?php include('partials/nodes/'.$structure_id.'-child.php') ?>

                                <?php if( isset($child2['children']) ): ?>
                                    <div class="NodeBlock-group">
                                    <?php foreach ($child2['children'] as $child3): ?>
                                        <?php $level = 4; ?>
                                        <?php $block = $child3; ?>
                                        <?php include('partials/nodes/'.$structure_id.'-child.php') ?>

                                        <?php if( isset($child3['children']) ): ?>
                                            <div class="NodeBlock-group">
                                            <?php foreach ($child3['children'] as $child4): ?>
                                                <?php $level = 5; ?>
                                                <?php $block = $child4; ?>
                                                <?php include('partials/nodes/'.$structure_id.'-child.php') ?>
                                            <?php endforeach ?>
                                            </div>
                                        <?php endif; ?>

                                    <?php endforeach ?>
                                    </div>
                                <?php endif; ?>

                            <?php endforeach ?>
                            </div>
                        <?php endif; ?>

                    <?php endforeach; ?>
                    </div>

                <?php endif; ?>

            <?php endforeach; ?>
        </div>

    </div>

    <div class="LoadMore">
        <span>Load more results</span>
    </div>


<?php include('_footer.php') ?>
