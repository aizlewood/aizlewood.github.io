
<div class="NodeBlock NodeBlock--child" data-level="<?php echo $level ?>">
    <input type="checkbox" name="name" value="">

    <div class="NodeBlock-arrow active <?php echo !isset($block['children']) ? ' hidden' : '' ?>"></div>

    <div class="NodeBlock-content">
        <span class="NodeBlock-meta">Grade <?php echo $block['status'] ?> | Skill <?php echo $block['skill'] ?></span>
        <div><a href="view-node?business=<?php echo $business['id'] ?>&structure=<?php echo $structure['id'] ?>"><?php echo $block['id'] ?>: <?php echo $block['heading'] ?></a></div>
        <div style="color: #999; font-size: 13px; margin: 8px 0 5px 0">Level: <?php echo $block['cefr'] ?> | <?php echo $block['other-level'] ?></div>
    </div>
</div>
