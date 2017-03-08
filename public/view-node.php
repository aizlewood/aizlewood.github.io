
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
    else:
        $business   = $db->table('lines-of-business')->get()[0];
        $structure  = $db->table('structures', $business['structures'])->get()[0];
    endif;

    $args = $_SERVER['QUERY_STRING'];
?>

<?php include '_header.php'; ?>

        <header class="Page-header">
            <a href="/">Home</a> &gt; <a href="/?business=<?php echo $business['id'] ?>"><?php echo $business['name'] ?></a> &gt; <a href="/browse-structures.php?business=<?php echo $business['id'] ?>&structure=<?php echo $structure['id'] ?>"><?php echo $structure['name'] ?></a>
            <h2><?php echo 'NodeName' ?></h2>
        </header>

        <div class="ViewNode">

            <div class="Tabs">
                <div class="Tab active" data-tab="nodeDetails">Node details</div>
                <div class="Tab" data-tab="preview">Preview</div>
            </div>

            <div class="TabContents">

                <!-- Tab -->
                <div class="TabContent TabContent--nodeDetails">

                    <div class="ViewNode-toolbar">
                        <div>
                            <div class="Button Button--history">History</div>
                            <a href="edit-node" class="Button Button--edit">Edit</a>
                            <div class="Button Button--showEmpty">Show empty fields</div>
                        </div>

                        <div>
                            <select class="" name="">
                                <option>Current Status: Draft</option>
                            </select>
                            <div class="Button Button--changeStatus">Change Status</div>
                        </div>
                    </div>

                    <div class="ViewNode-heirarchy">
                        <h3>Parental heirarchy</h3>

                        <div class="ViewNode-heirarchyContainer">
                            <div><span>StructureName</span></div>
                            <div><span>GrandparentNodeName</span></div>
                            <div><span>ParentNodeName</span></div>
                            <div><span>NodeName</span></div>
                        </div>
                    </div>

                    <div class="ViewNode-metadata">
                        <h3>Metadata</h3>

                        <table>
                            <tr>
                                <td>Label</td>
                                <td>Value</td>
                            </tr>
                            <tr>
                                <td>Label</td>
                                <td>Value</td>
                            </tr>
                            <tr>
                                <td>Label</td>
                                <td>Value</td>
                            </tr>
                            <tr>
                                <td>Label</td>
                                <td>Value</td>
                            </tr>
                            <tr>
                                <td>Label</td>
                                <td>Value</td>
                            </tr>
                            <tr>
                                <td>Label</td>
                                <td>Value</td>
                            </tr>
                            <tr>
                                <td>Label</td>
                                <td>Value</td>
                            </tr>
                        </table>
                    </div>

                    <div class="toggleable">
                        <h3><span>Related Words</span></h3>
                    </div>

                    <div class="toggleable">
                        <h3><span>Related grammer learning objectives</span></h3>
                    </div>

                    <div class="toggleable">
                        <h3><span>Related grammer learning objectives</span></h3>
                    </div>
                </div>

                <!-- Tab -->
                <div class="TabContent TabContent--preview">

                    <div class="frame">
                        <span>iFrame appears here</span>
                    </div>

                </div>

            </div>

        </div>


<?php include '_footer.php' ?>
