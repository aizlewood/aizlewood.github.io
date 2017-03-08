
<div class="NodeBlock NodeBlock--product" data-level="1">
    <input type="checkbox" name="name" value="">

    <div class="NodeBlock-arrow active <?php echo !isset($node['children']) ? ' hidden' : '' ?>"></div>

    <div class="NodeBlock-content">
        <span class="NodeBlock-meta"><?php echo $node['Domain'] ?> | <?php echo $node['Educational Objective Level Type'] ?></span>
        <div><a href="view-node?business=<?php echo $business['id'] ?>&structure=<?php echo $structure['id'] ?>"><?php echo $node['Educational Objective Statement Code'] ?>: <?php echo $node['Educational Objective'] ?></a></div>
        <div style="color: #999; font-size: 13px; margin: 8px 0 5px 0"><?php echo $node['Blooms Cognitive'] ?> | <?php echo $node['Blooms Knowledge'] ?> | <?php echo $node['Workflow Status'] ?></div>
    </div>
</div>
