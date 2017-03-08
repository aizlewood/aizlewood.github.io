
<?php if ( $business_id == 'higher-education'): ?>

    <div class="NodeBlock NodeBlock--child" data-level="<?php echo $level ?>">
        <input type="checkbox" name="name" value="">

        <div class="NodeBlock-arrow active <?php echo !isset($block['children']) ? ' hidden' : '' ?>"></div>

        <div class="NodeBlock-content">
            <div><a href="view-node?business=<?php echo $business['id'] ?>&structure=<?php echo $structure['id'] ?>"><span><?php echo $block['name'] ?></span></a></div>
        </div>
    </div>

<?php elseif ( $business_id == 'english'): ?>

    <div class="NodeBlock NodeBlock--child" data-level="<?php echo $level ?>">
        <input type="checkbox" name="name" value="">

        <div class="NodeBlock-arrow active <?php echo !isset($block['children']) ? ' hidden' : '' ?>"></div>

        <div class="NodeBlock-content">
            <span class="NodeBlock-meta"><?php echo $block['skill'] ?></span>
            <div><a href="view-node?business=<?php echo $business['id'] ?>&structure=<?php echo $structure['id'] ?>"><?php echo $block['heading'] ?></a></div>
            <div style="color: #999; font-size: 13px; margin: 8px 0 5px 0">Page Range: <?php echo $block['start-page'] ?> - <?php echo $block['end-page'] ?></div>
        </div>
    </div>

<?php else: ?>

    <div class="NodeBlock NodeBlock--child" data-level="<?php echo $level ?>">
        <input type="checkbox" name="name" value="">

        <div class="NodeBlock-arrow active <?php echo !isset($block['children']) ? ' hidden' : '' ?>"></div>

        <div class="NodeBlock-content">
            <div><a href="view-node?business=<?php echo $business['id'] ?>&structure=<?php echo $structure['id'] ?>"><span><?php echo $block['level-title'] ?>: <?php echo $block['content-title'] ?></span></a></div>
            <div style="font-size: 13px; color: #999; margin-top: 4px;">Page range (P.20 - 30)</div>
        </div>
    </div>

<?php endif; ?>
