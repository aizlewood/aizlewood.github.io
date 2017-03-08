
<?php if ($business_id == 'english'): ?>

    <div class="NodeBlock" data-level="1">
        <input type="checkbox" name="name" value="">

        <div class="NodeBlock-arrow active <?php echo !isset($node['children']) ? ' hidden' : '' ?>"></div>

        <div class="NodeBlock-content">
            <span class="NodeBlock-meta">Grade <?php echo $node['status'] ?> | Skill <?php echo $node['skill'] ?></span>
            <div><a href="view-node?business=<?php echo $business['id'] ?>&structure=<?php echo $structure['id'] ?>"><?php echo $node['id'] ?>: <?php echo $node['heading'] ?></a></div>
            <div style="color: #999; font-size: 13px; margin: 8px 0 5px 0">Level: <?php echo $node['cefr'] ?> | <?php echo $node['other-level'] ?></div>
        </div>
    </div>

<?php else: ?>

    <div class="NodeBlock" data-level="1">
        <input type="checkbox" name="name" value="">

        <div class="NodeBlock-arrow active <?php echo !isset($node['children']) ? ' hidden' : '' ?>"></div>

        <div class="NodeBlock-content">
            <span class="NodeBlock-meta"><?php echo $node['process-dimension'] ?> | <?php echo $node['knowledge-dimension'] ?></span>
            <div><a href="view-node?business=<?php echo $business['id'] ?>&structure=<?php echo $structure['id'] ?>"><?php echo $node['code'] ?>: <?php echo $node['framework-element'] ?></a></div>
            <div style="color: #999; font-size: 13px; margin: 8px 0 5px 0"><?php echo $node['proficiency'] ?> | <?php echo $node['status'] ?></div>
        </div>
    </div>

<?php endif; ?>
