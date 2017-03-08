
<?php
    // includes
    include_once('_includes/db.class.php');
    include_once('_includes/inflect.class.php');
    $db = new DB('_data/db.json');

    // page variables
    $klass = 'no-padding';
    $title = 'alignment';

    // defaults
    $business['name'] = 'lineOfBusiness';

    if( isset($_GET['business']) ):
        $business_id    = $_GET['business'];
        $structure_id   = $_GET['structure'];

        $business       = $db->table('lines-of-business')->where('id', $business_id);
        $structure      = $db->table('structures', $business['structures'])->where('id', $structure_id);
    endif;

?>

<?php include '_header.php' ?>

        <header class="Page-header">
            <a href="/">&lt; Exit alignment</a>
            <h2>Alignment Set-up</h2>
        </header>

        <div style="margin-bottom: 10px;">
            You selected StructureNameX. Select the structure you want to align it to:
        </div>

        <div class="Box">
            <div style="padding-bottom: 10px; border-bottom: 1px solid #fff">
                <a href="#">Browse</a> &gt; <a href="#"><?php echo $business['name']; ?></a>
            </div>

            <div style="padding: 20px 0">
                <ul>
                    <li style="padding: 10px 0"><a href="/browse-structures?business=<?php echo $business_id ?>&structure=<?php echo $structure_id ?>&align=true">Structure type A</a> <span style="color: #999;">123</span></li>
                    <li style="padding: 10px 0"><a href="/browse-structures?business=<?php echo $business_id ?>&structure=<?php echo $structure_id ?>&align=true">Structure type B</a> <span style="color: #999;">67</span></li>
                    <li style="padding: 10px 0"><a href="/browse-structures?business=<?php echo $business_id ?>&structure=<?php echo $structure_id ?>&align=true">Structure type C</a> <span style="color: #999;">2</span></li>
                </ul>
            </div>
        </div>

<?php include '_footer.php' ?>
