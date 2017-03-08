
<?php if ( $business_id == 'higher-education'): ?>

    <div class="NodeBlock NodeBlock--product" data-level="1">
        <input type="checkbox" name="name" value="">

        <div class="NodeBlock-arrow active <?php echo !isset($node['children']) ? ' hidden' : '' ?>"></div>

        <div class="NodeBlock-content">
            <a class="Node-title" href="view-node?business=<?php echo $business['id'] ?>&structure=<?php echo $structure['id'] ?>"><?php echo $node['name'] ?></a>
        </div>
    </div>

<?php elseif ( $business_id == 'english'): ?>

    <div class="NodeBlock NodeBlock--product" data-level="1">
        <input type="checkbox" name="name" value="">

        <div class="NodeBlock-arrow active <?php echo !isset($node['children']) ? ' hidden' : '' ?>"></div>

        <div class="NodeBlock-content">
            <span class="NodeBlock-meta">SpeakOut | Elementary | SB</span>
            <div><a href="view-node?business=<?php echo $business['id'] ?>&structure=<?php echo $structure['id'] ?>"><?php echo $node['heading'] ?></a></div>
            <div style="color: #999; font-size: 13px; margin: 8px 0 5px 0">Page Range: <?php echo $node['start-page'] ?> - <?php echo $node['end-page'] ?></div>
        </div>
    </div>

<?php else: ?>

    <div class="NodeBlock NodeBlock--product" data-level="1">
        <input type="checkbox" name="name" value="">

        <div class="NodeBlock-arrow active <?php echo !isset($node['children']) ? ' hidden' : '' ?>"></div>

        <div class="NodeBlock-content">
            <a class="Node-title" href="view-node?business=<?php echo $business['id'] ?>&structure=<?php echo $structure['id'] ?>"><?php echo $node['level-title'] ?>: <?php echo $node['content-title'] ?></a>
            <div style="font-size: 13px; color: #999; margin-top: 4px;">Page range (P.20 - 30)</div>
        </div>
    </div>

<?php endif; ?>
