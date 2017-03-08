
<?php
    include_once('_includes/db.class.php');
    include_once('_includes/inflect.class.php');
    $db = new DB('_data/db.json');

    $args = $_SERVER['QUERY_STRING'];

    $linesOfBusiness = $db->table('lines-of-business')->get();

    if( isset($_GET['business']) ):
        $business   = $db->table('lines-of-business')->where('id', $_GET['business']);
        $structure  = $db->table('structures', $business['structures'])->where('id', $_GET['structure']);
        $filters    = $db->table('filters', $structure['filters'])->get();
    endif;

    $args = $_SERVER['QUERY_STRING'];
?>

<?php include '_header.php'; ?>

        <header class="Page-header">
            <a href="/">&lt; Cancel</a>
            <h2>Edit: <?php echo 'NodeName' ?></h2>
        </header>

        <div class="EditNode">

            <div class="EditNode-form">
                <form class="" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

                    <div class="EditNode-formFields">
                        <div class="EditNode-formRow">
                            <div class="EditNode-formCol">Label</div>
                            <div class="EditNode-formCol">
                                <div><label><input type="checkbox" name="box[]" value="1"> Checkbox</label></div>
                                <div><label><input type="checkbox" name="box[]" value="1"> Checkbox</label></div>
                                <div><label><input type="checkbox" name="box[]" value="1"> Checkbox</label></div>
                                <div><label><input type="checkbox" name="box[]" value="1"> Checkbox</label></div>
                            </div>
                        </div>
                        <div class="EditNode-formRow">
                            <div class="EditNode-formCol">Label</div>
                            <div class="EditNode-formCol">
                                <input type="text" name="name" value="">
                            </div>
                        </div>
                        <div class="EditNode-formRow">
                            <div class="EditNode-formCol">Label</div>
                            <div class="EditNode-formCol">
                                <div><label><input type="radio" name="radio" value="1"> Radio button</label></div>
                                <div><label><input type="radio" name="radio" value="1"> Radio button</label></div>
                                <div><label><input type="radio" name="radio" value="1"> Radio button</label></div>
                                <div><label><input type="radio" name="radio" value="1"> Radio button</label></div>
                            </div>
                        </div>
                        <div class="EditNode-formRow">
                            <div class="EditNode-formCol">Label</div>
                            <div class="EditNode-formCol">
                                <select class="chosen-select" name="" multiple="">
                                    <option>TagName</option>
                                    <option>Another TagName</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="EditNode-formButtons">
                        <button type="button" name="button" class="Button Button--main">Cancel</button>
                        <button type="button" name="button" class="Button Button--main">Save</button>
                    </div>
                </form>
            </div>

        </div>

<?php include '_footer.php' ?>
