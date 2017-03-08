
<?php
    // includes
    include_once('_includes/db.class.php');
    include_once('_includes/inflect.class.php');
    $db = new DB('_data/db.json');

    // page variables
    $klass = 'no-padding';
    $title = 'report';

    $reports = [];
    $reports['alignment']           = 'Alignment';
    $reports['alignment-summary']   = 'Alignment summary';
    $reports['coverage-metrics']    = 'Coverage metrics';
    $reports['generic']             = 'Generic';

    // defaults
    $reportType     = isset($_GET['reporttype']) ? $_GET['reporttype'] : '';
    $reportOptions  = isset($_GET['reportoptions']) ? $_GET['reportoptions'] : '';

    $business_id    = isset($_GET['business']) ? $_GET['business'] : '';
    $structure_id   = isset($_GET['structure']) ? $_GET['structure'] : '';

    if( $business_id != '' ):
        $business       = $db->table('lines-of-business')->where('id', $business_id);
        $structure      = $db->table('structures', $business['structures'])->where('id', $structure_id);
    else:
        $business['name']   = 'lineOfBusiness';
        $structure['name']  = 'StructureNameA';
    endif;

?>

<?php include '_header.php' ?>

        <header class="Page-header">
            <a href="/">&lt; Back</a>
            <h2>Report Set-up</h2>
        </header>

        <?php if( isset($_GET['reporttype']) ): ?>

            <div style="margin-bottom: 20px;">
                You are creating <?php echo ($reports[$reportType][0] == 'A') ? 'an ' . $reports[$reportType] : 'a ' . $reports[$reportType] ?> report with <?php echo $structure['name'] ?> as source A<br>
                Select the structure you want to use as source B:
            </div>

            <div class="Box">
                <div style="padding-bottom: 10px; border-bottom: 1px solid #fff">
                    <a href="#">Browse</a> &gt; <a href="#"><?php echo $business['name']; ?></a>
                </div>

                <div style="padding: 20px 0">
                    <ul>
                        <li style="padding: 10px 0"><a href="/browse-structures?business=<?php echo $business_id ?>&structure=<?php echo $structure_id ?>&report=true&reporttype=<?php echo $reportType ?>">Structure type A</a> <span style="color: #999;">123</span></li>
                        <li style="padding: 10px 0"><a href="/browse-structures?business=<?php echo $business_id ?>&structure=<?php echo $structure_id ?>&report=true&reporttype=<?php echo $reportType ?>">Structure type B</a> <span style="color: #999;">67</span></li>
                        <li style="padding: 10px 0"><a href="/browse-structures?business=<?php echo $business_id ?>&structure=<?php echo $structure_id ?>&report=true&reporttype=<?php echo $reportType ?>">Structure type C</a> <span style="color: #999;">2</span></li>
                    </ul>
                </div>
            </div>

        <?php elseif( isset($_GET['reportoptions']) ): ?>

            <div style="margin-bottom: 20px;">
                Selected the options for this <?php echo $structure['name'] ?> report:<br>
            </div>

            <div class="ReportOptions">

                <div class="Box">
                    <div>Source A</div>
                    <div>SourceAFullname [<a href="#">change</a>]</div>
                </div>
                <div class="Box Box--dark">
                    <div>Source B</div>
                    <div>SourceBFullname [<a href="#">change</a>]</div>
                </div>
                <div class="Box">
                    <div>Report Name</div>
                    <div><input type="text" name="name" value="" placeholder="Enter a report name"></div>
                </div>
                <div class="Box Box--dark">
                    <div>Lorem Ipsum</div>
                    <div>
                        <label>Label here <input type="radio" name="name[]" value=""></label><br>
                        <label>Label here <input type="radio" name="name[]" value=""></label>
                    </div>
                </div>
                <div class="Box">
                    <div>Lorem Ipsum</div>
                    <div>
                        <label>Label here <input type="radio" name="name[]" value=""></label><br>
                        <label>Label here <input type="radio" name="name[]" value=""></label>
                    </div>
                </div>


                <div class="ReportOptions--footer">
                    <a href="#" class="Button Button--main">Back</a>
                    <a href="/reports" class="Button Button--main">Run Report</a>
                </div>

            </div>

        <?php else: ?>

            <div style="margin-bottom: 20px;">
                You selected <?php echo $structure['name'] ?> as source A<br>
                Select the type of report you want to create:
            </div>

            <div class="Box" style="margin-bottom: 15px;">
                <a href="report-setup?business=<?php echo $business_id ?>&structure=<?php echo $structure_id ?>&reporttype=alignment">Alignment report &gt;</a>
            </div>

            <div class="Box" style="margin-bottom: 15px;">
                <a href="report-setup?business=<?php echo $business_id ?>&structure=<?php echo $structure_id ?>&reporttype=alignment-summary">Alignment Summary report &gt;</a>
            </div>

            <div class="Box" style="margin-bottom: 15px;">
                <a href="report-setup?business=<?php echo $business_id ?>&structure=<?php echo $structure_id ?>&reporttype=coverage-metrics">Coverage metrics report &gt;</a>
            </div>

            <div class="Box" style="margin-bottom: 15px;">
                <a href="report-setup?business=<?php echo $business_id ?>&structure=<?php echo $structure_id ?>&reporttype=generic">Generic report &gt;</a>
            </div>

        <?php endif; ?>


<?php include '_footer.php' ?>
