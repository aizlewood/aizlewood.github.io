
<div class="Block Block--curriculum-standard">
    <div class="Block-container">
        <div class="Block-content">
            <span class="Block-metaAttr"><?php echo $block['status'] ?> | Updated: 01-01-1999</span>
            <a class="Block-title" href="browse-structure-nodes?business=<?php echo $business['id'] ?>&structure=<?php echo $structure['id'] ?>&curriculum=<?php echo $block['id'] ?>">
                <?php echo $block['authority-name'] .' | '. $block['name'] . ' ' . $block['year-of-publication'] ?>
            </a>
            <div class="Block-footer">
                <span><?php echo $block['country'] ?> | <?php echo $block['sector'] ?> | <?php echo $block['type'] ?> | Grade Range: <?php echo $block['start-grade'].'-'.$block['end-grade'] ?></span>
            </div>
        </div>

        <?php if ( isset($_GET['align']) ): ?>
        <div class="">
            <a href="/alignment">Select for Alignment &gt;</a>
        </div>
        <?php elseif( isset($_GET['report']) ): ?>
        <div class="">
            <a href="/report" class="Button Button--small">Select as Source {A/B/C} &gt;</a>
        </div>
        <?php else: ?>
        <div class="Drawer-toggle">Actions</div>
        <?php endif; ?>
    </div>

    <div class="Drawer" data-component="Actions">
        <div class="Drawer-container">
            <div class="Drawer-list">
                <div><a href="#" class="Button Button--small">Browse</a></div>
                <div><a href="/report-setup?<?php echo $args ?>" class="Button Button--small">Create Report</a></div>
                <div><a href="#" class="Button Button--small">Export</a></div>
                <div><a href="/alignment-setup?<?php echo $args ?>" class="Button Button--small">Align</a></div>
                <div><a href="#" class="Button Button--small">Delete</a></div>
            </div>

            <div class="Drawer-status">Status: <?php echo $block['status'] ?></div>
        </div>
    </div>
</div>
