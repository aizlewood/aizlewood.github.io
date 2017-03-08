<?php
$links = isset($links) ? $links: 0;
$down  = isset($down) ? $down: 0;
?>
<div class="Pill clearfix">
    <div class="Pill-links"><?php echo $links ?></div>
    <div class="Pill-down"><?php echo $down ?></div>
    <a href="/view-node" class="Pill-view" target="viewnode"></a>
</div>
<div class="PillDetails">
    <div class="arrow">
        <svg width="15px" height="10px" viewBox="63 417 25 15">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(63.000000, 418.000000)">
                <path d="M6.9388939e-18,13 C0.0590820313,13.0217285 11.9695602,0 11.9695602,0 L24.0009766,13 C24.0009766,13 0.0590820313,13.0217285 6.9388939e-18,13 Z" fill="#efefef"></path>
                <path d="M12,0 L1,12" id="Line" stroke="#979797" stroke-linecap="square"></path>
                <path d="M12,0 L23,12" id="Line" stroke="#979797" stroke-linecap="square"></path>
            </g>
        </svg>
    </div>
    <div class="PillDetails-container">
        <ul>
            <?php if($links > 0): ?>
                <?php for($l=0; $l < $links; $l++): ?>
                    <li class="PillDetails-alignment">
                        <span class="exact">Exact</span> hac dictumst. Vivamus adipiscing fermentum quam volutpat aliquam. et elit eget elit facilisis tristique. Nam vel iaculis mauris...<i class="Icon Icon--edit"></i> <span class="note">Note</span>
                    </li>
                <?php endfor; ?>
            <?php else: ?>
                <li>0 alignments at this level</li>
            <?php endif; ?>
            <?php if ($down > 0): ?>
                <li><?php echo $down ?> alignments in children below</li>
            <?php endif; ?>
        </ul>
    </div>
</div>
