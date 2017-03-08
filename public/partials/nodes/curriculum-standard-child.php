
<div class="NodeBlock NodeBlock--child" data-level="<?php echo $level ?>">
    <input type="checkbox" name="name" value="">

    <div class="NodeBlock-arrow active <?php echo !isset($block['children']) ? ' hidden' : '' ?>"></div>

    <div class="NodeBlock-content">
        <div><a href="view-node?business=<?php echo $business['id'] ?>&structure=<?php echo $structure['id'] ?>"><span><?php echo $block['name'] ?></span></a></div>
        <div style="color: #999; font-size: 13px; margin: 8px 0 5px 0">Status: Approved</div>

        <div class="More">
            Tags: tag1, tag2, tag3, etc...
        </div>
    </div>
</div>
