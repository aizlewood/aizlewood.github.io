
<?php
    $klass = 'no-padding';
    $title = 'alignment';

    include '_header.php';
?>

        <header class="Page-header">
            <a href="/alignment">Back</a>
            <h2>Edit Alignment Note</h2>
        </header>

        <div class="AddNote Box">

            <div class="AddNote-editing">
                <span>Selected alignment</span>
                1 node in Source A - aligned as "Exact" - to 1 node in Source B
            </div>

            <div class="RecentAlignment" style="border:none">
                <div class="RecentAlignment-sourceA">
                    <span>Source A:</span> Labelgoeshere (associated metadata here)
                </div>
                <div class="RecentAlignment-type">
                    <span>Alignment:</span> Exact
                </div>
                <div class="RecentAlignment-sourceB">
                    <span>Source B:</span> Anotherlabelgoeshere (associated metadata here)
                </div>
            </div>
        </div>

        <div class="AddNote-addNote Box">
            <textarea name="name" rows="8" cols="40"></textarea>
            <input type="button" class="Button Button--search" name="name" value="Add Note">
        </div>

<?php include '_footer.php' ?>
