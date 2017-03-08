
<?php
    include_once('_includes/db.class.php');
    $db = new DB('_data/db.json');
?>

<?php include '_header.php'; ?>

    <header class="Page-header">
        <a href="/manage-structures">&lt; Cancel</a>
        <h2>Create or upload a structure</h2>
    </header>

    <div style="margin-bottom: 25px;">
        Step 1 of 4: Choose the type of structure you want to create or upload
    </div>

    <div class="CreateStructure">

        <div class="Box">

            <div class="OptionBlock">
                <h3>What do you want to do?</h3>

                <label><input type="radio" name="do" value="" checked> Create new structure from scratch</label>
                <label class="disabled"><input type="radio" name="do" value="" disabled> Upload .XLS spreadsheet</label>
            </div>

            <div class="OptionBlock">
                <h3>Select line of business:</h3>

                <label><input type="radio" name="business" value="" checked> English</label>
                <label><input type="radio" name="business" value=""> Higher Education</label>
                <label><input type="radio" name="business" value=""> School Global</label>
                <label><input type="radio" name="business" value=""> School North America</label>
            </div>

            <div class="OptionBlock">
                <h3>Select type of structure:</h3>

                <label><input type="radio" name="structure" value="" checked> GSE (Global Scale of English) Standard</label>
                <label><input type="radio" name="structure" value=""> External Framework</label>
                <label><input type="radio" name="structure" value=""> Product</label>
                <label><input type="radio" name="structure" value=""> Intermediary</label>
            </div>

            <div class="OptionBlock">
                <h3>Select approval process:</h3>

                <label><input type="radio" name="approval" value="" checked> Structure level approval (treat structure as a single unit for approval)</label>
                <label><input type="radio" name="approval" value=""> Node level approval (Break-down structure into individual nodes for approval)</label>
            </div>

            <div style="padding: 15px 0;">
                <a href="/structure-editor" class="Button Button--large Button--dark">Next &gt;</a>
            </div>

        </div>

    </div>

<?php include '_footer.php'; ?>
