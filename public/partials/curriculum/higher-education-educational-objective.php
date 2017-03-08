
<div class="Block Block--product">
    <div class="Block-container">
        <div class="Block-content">
            <a class="Block-title" href="browse-structure-nodes?business=<?php echo $business['id'] ?>&structure=<?php echo $structure['id'] ?>&curriculum=<?php echo $block['id'] ?>"><?php echo $block['name'] ?></a>
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
        </div>
    </div>
</div>
