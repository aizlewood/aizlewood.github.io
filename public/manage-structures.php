
<?php
    include_once('_includes/db.class.php');
    $db = new DB('_data/db.json');
?>

<?php include '_header.php'; ?>

    <header class="Page-header">
        <a href="/">&lt; Home</a>
        <h2>Manage Structures</h2>
    </header>

    <div style="margin-bottom: 25px;">
        Managing structures for: LineOfBusinessName [<a href="/">change</a>]
    </div>

    <a href="/create-structure" class="Button Button--large">Create or upload structure</a>

    <div class="">

    </div>

<?php include '_footer.php'; ?>
