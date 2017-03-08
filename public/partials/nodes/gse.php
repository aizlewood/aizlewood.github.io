
<div class="NodeBlock" data-level="1">
    <input type="checkbox" name="name" value="">

    <div class="NodeBlock-arrow active <?php echo !isset($node['children']) ? ' hidden' : '' ?>"></div>

    <div class="NodeBlock-content">
        <span class="NodeBlock-meta">Skill: <?php echo $node['Skill'] ?> | Status: <?php echo $node['Status'] ?> | GSE: <?php echo isset($node['GSE']) ? $node['GSE'] : $node['GSE Band'] ?></span>
        <a class="Node-title" href="view-node?business=<?php echo $business['id'] ?>&structure=<?php echo $structure['id'] ?>"><?php echo $node['Descriptive ID'] ?>: <?php echo $node['Descriptor'] ?></a>

        <?php if ( $node['Type'] == 'Functional' ): ?>
            <div style="color: #999; font-size: 13px; margin: 8px 0 5px 0"><?php echo $node['Syllabus'] ?> | <?php echo $node['CEFR Communicative activity'] ?></div>
        <?php elseif( $node['Type'] == 'Grammar' ): ?>
            <div style="color: #999; font-size: 13px; margin: 8px 0 5px 0"><?php echo $node['Syllabus'] ?> | <?php echo $node['Grammatical Category'] ?> | <?php echo $node['Grammatical Subcategory'] ?></div>
        <?php else: ?>
            <div style="color: #999; font-size: 13px; margin: 8px 0 5px 0"><?php echo $node['Syllabus'] ?> | <?php echo $node['Topic'] ?></div>
        <?php endif; ?>

    </div>
</div>
