
<?php
    include_once('_includes/db.class.php');
    $db = new DB('_data/db.json');
?>

<?php include '_header.php'; ?>

    <header class="Page-header">
        <a href="/structure-editor">&lt; back</a>
        <h2>Add node</h2>
    </header>

    <div class="AddNode">

        <div class="AddNode-form">
            <form class="" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

                <table>
                    <tr>
                        <td class="">Name</td>
                        <td class="">
                            <input type="text" name="name" value="">
                        </td>
                    </tr>

                    <tr>
                        <td class="">Label</td>
                        <td class="">
                            <select class="chosen-select" name="" multiple="">
                                <option>TagName</option>
                                <option>Another TagName</option>
                            </select>
                        </td>
                    </tr>
                </table>

                <div class="AddNode-footer">
                    <a href="/structure-editor" class="Button Button--large">Cancel</a>
                    <div>
                        <a href="/structure-editor?add=1" class="Button Button--large">Save</a>
                        <a href="/add-node?add=1" class="Button Button--large">Save and add another</a>
                    </div>
                </div>
            </form>
        </div>

    </div>

<?php include '_footer.php'; ?>
