
<?php
    $klass = 'no-padding';
    $title = 'alignment';

    include '_header.php';
?>

        <header class="Page-header">
            <a href="/alignment">Exit</a>
            <h2>View all alignments</h2>
        </header>

        <div class="ViewAlignments">

            <div class="ViewAlignments-toolbar">
                <span>20 matches</span>
                <div class="">
                    Sort by:
                    <select class="" name="">
                        <option value="0">Newest first</option>
                    </select>

                    <a href="#" class="Button Button--small Button--filterAlignments">Filter</a>
                </div>
            </div>

            <div class="ViewAlignments-header">
                <div class="ViewAlignments-headerA">
                    <strong>Source A:</strong> StructureNameGoesHere, and is quite likely to span 2-3 lines as depicted here. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida [...]
                </div>
                <div class=""></div>
                <div class="ViewAlignments-headerB">
                    <strong>Source B:</strong> StructureNameGoesHere, and is quite likely to span 2-3 lines as depicted here. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida [...]
                </div>
            </div>

            <div class="ViewAlignments-body">
                <ul>
                    <?php for ($count = 0; $count < 20; $count++): ?>
                    <li>
                        <div class="RecentAlignment">
                            <div class="RecentAlignment-by">By: Brignull, Harry DD/Month/YYYY  HH:MM UTC</div>

                            <div class="RecentAlignment-sourceA">
                                <span>Source A:</span> Labelgoeshere (associated metadata here)
                            </div>
                            <div class="RecentAlignment-type">
                                <span>Alignment:</span> Exact
                            </div>
                            <div class="RecentAlignment-sourceB">
                                <span>Source B:</span> Anotherlabelgoeshere (associated metadata here)
                            </div>

                            <a href="#" class="RecentAlignment-edit"></a>
                        </div>
                    </li>
                    <?php endfor; ?>
                </ul>
            </div>
        </div>

<?php include '_footer.php' ?>
