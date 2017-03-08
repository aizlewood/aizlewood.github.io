
<div class="NodeBlock" data-level="1">
    <input type="checkbox" name="name" value="">

    <div class="NodeBlock-arrow active <?php echo !isset($node['children']) ? ' hidden' : '' ?>"></div>

    <div class="NodeBlock-content">
        <span class="NodeBlock-meta">Grade <?php echo $node['grade'] ?> / <?php echo $node['local-grade'] ?></span>
        <div><a href="view-node?business=<?php echo $business['id'] ?>&structure=<?php echo $structure['id'] ?>"><?php echo $node['name'] ?></a></div>
        <div style="color: #999; font-size: 13px; margin: 8px 0 5px 0">Status: Approved</div>

        <div class="More">
            Tags: tag1, tag2, tag3, etc...
        </div>
    </div>
</div>
