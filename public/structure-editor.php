
<?php
    include_once('_includes/db.class.php');
    $db = new DB('_data/db.json');
?>

<?php include '_header.php'; ?>

    <header class="Page-header">
        <a href="/manage-structures">&lt; Exit</a>
        <h2>Create structure from scratch</h2>
    </header>

    <div class="StructureEditor">

        <div class="StructureEditor-header">
            <a href="/add-node" class="Button Button--small">add node</a>

            <div>
                <a href="#">select all</a> | <a href="#">select none</a>
                <a href="#" class="Button Button--small">bulk edit</a>
            </div>

        </div>

        <div class="StructureEditor-body">

            <div class="StructureEditor-nodes">

                <ul>
                    <li class="jstree-open">
                        <div class="EditorNode">
                            <div class="Block-content">
                                <span class="Block-metaAttr">Metadata | Updated: 01-01-1999</span>
                                <a class="Block-title" href="#">Name</a>
                                <div class="Block-footer">
                                    <span>Metadata | Metadata</span>
                                </div>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <div class="EditorNode">
                                    <div class="Block-content">
                                        <span class="Block-metaAttr">Metadata | Updated: 01-01-1999</span>
                                        <a class="Block-title" href="#">Name</a>
                                        <div class="Block-footer">
                                            <span>Metadata | Metadata</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="EditorNode">
                                    <div class="Block-content">
                                        <span class="Block-metaAttr">Metadata | Updated: 01-01-1999</span>
                                        <a class="Block-title" href="#">Name</a>
                                        <div class="Block-footer">
                                            <span>Metadata | Metadata</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                         </ul>
                    </li>
                    <li class="jstree-open">
                        <div class="EditorNode">
                            <div class="Block-content">
                                <span class="Block-metaAttr">Metadata | Updated: 01-01-1999</span>
                                <a class="Block-title" href="#">Name</a>
                                <div class="Block-footer">
                                    <span>Metadata | Metadata</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="jstree-open">
                        <div class="EditorNode">
                            <div class="Block-content">
                                <span class="Block-metaAttr">Metadata | Updated: 01-01-1999</span>
                                <a class="Block-title" href="#">Name</a>
                                <div class="Block-footer">
                                    <span>Metadata | Metadata</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="jstree-open">
                        <div class="EditorNode">
                            <div class="Block-content">
                                <span class="Block-metaAttr">Metadata | Updated: 01-01-1999</span>
                                <a class="Block-title" href="#">Name</a>
                                <div class="Block-footer">
                                    <span>Metadata | Metadata</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>

        </div>

    </div>

<?php include '_footer.php'; ?>
