
<div class="NodeBlock" data-level="1">
    <input type="checkbox" name="name" value="">

    <div class="NodeBlock-arrow active <?php echo !isset($node['children']) ? ' hidden' : '' ?>"></div>

    <div class="NodeBlock-content">
        <a class="Node-title" href="view-node?business=<?php echo $business['id'] ?>&structure=<?php echo $structure['id'] ?>"><?php echo $node['statement-code'] ?>: <?php echo $node['statement'] ?></a>
        <div style="color: #999; font-size: 14px; padding-top: 5px;"><?php echo $node['category'] ?> | <?php echo $node['tag'] ?></div>
    </div>
</div>
