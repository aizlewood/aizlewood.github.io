
<?php
    include_once('_includes/db.class.php');
    $db = new DB('_data/db.json');

    $args = $_SERVER['QUERY_STRING'];

    $linesOfBusiness = $db->table('lines-of-business')->get();

    if( isset($_GET['business']) ):
        $business = $db->table('lines-of-business')->where('id', $_GET['business']);
        $structures = $business['structures'];
    endif;
?>

<?php include '_header.php'; ?>


        <header class="Page-header">
            <?php if( isset($_GET['business']) ): ?>
                <a href="/">Home</a>
            <?php endif; ?>
            <h2><?php echo isset($_GET['business']) ? $business['name'] : "Browse" ?></h2>
        </header>

        <div class="Browse">

            <div class="Box" style="margin-bottom: 20px;">
                <ul>
                    <?php if( isset($business) ): ?>
                        <?php foreach ($structures as $structure): ?>
                            <li>
                                <a href="browse-structures?<?php echo $args ?>&structure=<?php echo $structure['id'] ?>"><?php echo $structure['name'] ?></a>
                            </li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <?php foreach ($linesOfBusiness as $business): ?>
                            <li>
                                <a href="?business=<?php echo $business['id'] ?>"><?php echo $business['name'] ?></a>
                            </li>
                        <?php endforeach ?>
                    <?php endif; ?>
                </ul>
            </div>

            <div class="grid">
                <div class="grid__item one-third">
                    <div class="Box">
                        <h3>
                            <a href="/manage-structures">Manage Structures</a>
                        </h3>
                        <ul>
                            <li style="margin: 5px 0">123 approved</li>
                            <li style="margin: 5px 0">10 awaiting approval</li>
                            <li style="margin: 5px 0">5 drafts</li>
                        </ul>
                    </div>
                </div>
                <div class="grid__item one-third">
                    <div class="Box">
                        <h3>
                            <a href="#">Reports</a>
                        </h3>
                        <ul>
                            <li style="margin: 5px 0">12 created by you</li>
                            <li style="margin: 5px 0">898 created by everyone</li>
                        </ul>
                    </div>
                </div>
                <div class="grid__item one-third">
                    <div class="Box">
                        <h3>
                            <a href="#">Audit Log</a>
                        </h3>
                        <ul>
                            <li style="margin: 5px 0">A history of all actions carried out in LOMT</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

<?php include('_footer.php') ?>
