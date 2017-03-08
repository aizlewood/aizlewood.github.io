
    </div>

    <!--/////////////////////////////////////
        Templates
    /////////////////////////////////////-->

    <!-- template -->
    <script id="filters" type="text/html">
        <div class="Filters">
            <div class="search">
                <input type="text" name="name" value="" placeholder="Enter search terms or add filters">
            </div>

            <div class="container">
                <div class="filters">
                    <div class="filter-list">
                        <div>Filter List 1</div>
                        <ul>
                            <li><a href="#">Item 1</a> <span>(24)</span></li>
                            <li><a href="#">Item 2</a> <span>(13)</span></li>
                            <li><a href="#">Item 3</a> <span>(17)</span></li>
                            <li><a href="#">Item 4</a> <span>(32)</span></li>
                            <li><a href="#">Item 5</a> <span>(4)</span></li>
                        </ul>
                    </div>

                    <div class="filter-list">
                        <div>Filter List 2</div>
                        <ul>
                            <li><a href="#">Item 1</a> <span>(24)</span></li>
                            <li><a href="#">Item 2</a> <span>(13)</span></li>
                            <li><a href="#">Item 3</a> <span>(17)</span></li>
                            <li><a href="#">Item 4</a> <span>(32)</span></li>
                        </ul>
                    </div>

                    <div class="filter-list">
                        <div>Filter List 3</div>
                        <ul>
                            <li><a href="#">Item 1</a> <span>(24)</span></li>
                            <li><a href="#">Item 2</a> <span>(13)</span></li>
                            <li><a href="#">Item 3</a> <span>(17)</span></li>
                            <li><a href="#">Item 4</a> <span>(32)</span></li>
                            <li><a href="#">Item 5</a> <span>(4)</span></li>
                        </ul>
                    </div>

                    <div class="filter-list">
                        <div>Filter List 4</div>
                        <ul>
                            <li><a href="#">Item 1</a> <span>(24)</span></li>
                            <li><a href="#">Item 2</a> <span>(13)</span></li>
                            <li><a href="#">Item 3</a> <span>(17)</span></li>
                            <li><a href="#">Item 4</a> <span>(32)</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div>236 matching nodes</div>
                <a href="#" class="Button Button--main">Update results</a>
            </div>
        </div>
    </script>

    <!-- template -->
    <script id="confirm" type="text/html">
        <div class="Confirm">
            <div class="Confirm-header"></div>
            <div class="Confirm-body">
                <a href="#" class="Button Button--cancel">Cancel</a>
                <a href="#" class="Button Button--search">Proceed</a>
            </div>
        </div>
    </script>

    <!-- template -->
    <script id="bulk-edit" type="text/html">
        <div class="BulkEdit">
            <div class="BulkEdit-container">
                <div class="BulkEdit-block clearfix">
                    <div class="BulkEdit-label">Metadata-tag-component:</div>
                    <div class="BulkEdit-values"></div>
                    <div class="BulkEdit-action">
                        <a href="#" class="Button--addTag">+ add a tag</a>
                    </div>
                </div>
                <div class="BulkEdit-block clearfix">
                    <div class="BulkEdit-label">Metadata-textfield-component:</div>
                    <div class="BulkEdit-values"></div>
                    <div class="BulkEdit-action">
                        <select>
                            <option>Select action&hellip;</option>
                        </select>
                        <button type="button" class="Button">Go</button>
                    </div>
                </div>
                <div class="BulkEdit-block clearfix">
                    <div class="BulkEdit-label">Metadata-textfield-component:</div>
                    <div class="BulkEdit-values"></div>
                    <div class="BulkEdit-action">
                        <select>
                            <option>Select action&hellip;</option>
                        </select>
                        <button type="button" class="Button">Go</button>
                    </div>
                </div>
                <div class="BulkEdit-block clearfix">
                    <div class="BulkEdit-label">Status:</div>
                    <div class="BulkEdit-values"></div>
                    <div class="BulkEdit-action">
                        <select>
                            <option>Change Status to&hellip;</option>
                        </select>
                        <button type="button" class="Button">Go</button>
                    </div>
                </div>

                <div class="BulkEdit-footer">
                    <a href="#" class="Button Button--main Button--close">Close</a>
                </div>
            </div>
        </div>
    </script>

    <!-- template -->
    <script id="add-tag" type="text/html">
        <div class="AddTag">
            <div class="AddTag-container">
                <input type="text" name="name" value="" class="AddTag-search">
                <div class="AddTag-results">
                    <div>
                        TagName
                        <div class="AddTag-resultsMeta">Metadata > metadata</div>
                    </div>
                    <div>
                        TagName
                        <div class="AddTag-resultsMeta">Metadata > metadata</div>
                    </div>
                    <div>
                        TagName
                        <div class="AddTag-resultsMeta">Metadata > metadata</div>
                    </div>
                    <div>
                        TagName
                        <div class="AddTag-resultsMeta">Metadata > metadata</div>
                    </div>
                </div>
            </div>

            <div class="AddTag-footer">
                <a href="#" class="Button Button--main Button--cancel">Cancel</a>
                <a href="#" class="Button Button--main Button--addTag">Add Tag</a>
            </div>
        </div>

    </script>

    <!-- template -->
    <script id="alignment-settings" type="text/html">
        <div class="AlignmentSettings">
            <div class="arrow">
                <svg width="25px" height="15px" viewBox="63 417 25 15">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(63.000000, 418.000000)">
                        <path d="M6.9388939e-18,13 C0.0590820313,13.0217285 11.9695602,0 11.9695602,0 L24.0009766,13 C24.0009766,13 0.0590820313,13.0217285 6.9388939e-18,13 Z" fill="#efefef"></path>
                        <path d="M12,0 L1,12" id="Line" stroke="#979797" stroke-linecap="square"></path>
                        <path d="M12,0 L23,12" id="Line" stroke="#979797" stroke-linecap="square"></path>
                    </g>
                </svg>
            </div>
            <div class="AlignmentSettings-container">
                <h2>Alignments</h2>
                <a href="#">show</a> | <a href="#">hide</a>

                <h2>Show levels</h2>
                <ul>
                    <li><a href="#">All levels</a></li>
                    <li><a href="#">Level 1</a></li>
                    <li><a href="#">Levels 1-2</a></li>
                    <li><a href="#">Levels 1-3</a></li>
                    <li><a href="#">Levels 1-4</a></li>
                    <li><a href="#">Levels 1-5</a></li>
                </ul>

                <a href="#">Change this source</a>
            </div>
        </div>
    </script>

    <!-- template -->
    <script id="add-filter" type="text/html">
        <div class="AddFilter">
            <div>
                <label>Filter by level 1 category</label>
                <input type="text" name="name" value="" style="display: block; width: 100%;">
            </div>

            <div style="margin-top: 15px">
                <label>Filter by level 2 category</label>
                <input type="text" name="name" value="" style="display: block; width: 100%;">
            </div>

            <div class="AddTag-footer" style="margin-top: 20px;">
                <a href="#" class="Button Button--main Button--cancel">Cancel</a>
                <a href="#" class="Button Button--main Button--addTag">Add Tag</a>
            </div>
        </div>
    </script>

    <!-- template -->
    <script id="edit-alignment" type="text/html">
        <div class="EditAlignment">

            <div class="EditAlignment-body">
                <div class="EditAlignment-sourceA">
                    <span>Source A</span>
                    <p>Labelgoeshere which is entirely likely to span two to three lines of text, before we truncate it at three lines with an ellipsis. Full text revealed as a tooltip on hover.</p>
                </div>

                <div class="EditAlignment-type">
                    <span>Alignment</span>
                    <select>
                        <option value="">Exact</option>
                    </select>
                </div>

                <div class="EditAlignment-sourceB">
                    <span>Source B</span>
                    <p>Labelgoeshere which is entirely likely to span two to three lines of text, before we truncate it at three lines with an ellipsis. Full text revealed as a tooltip on hover.</p>
                </div>
            </div>

            <div class="EditAlignment-footer">
                <div>
                    <a href="#" class="Button Button--main Button--add">Add Note</a>
                    <a href="#" class="Button Button--main Button--delete">Delete Alignment</a>
                </div>
                <div>
                    <a href="#" class="Button Button--main Button--cancel">Cancel</a>
                    <a href="#" class="Button Button--main Button--save">Save Changes</a>
                </div>
            </div>
        </div>
    </script>


    <!-- template -->
    <script id="alignment-filter" type="text/html">
        <div class="AlignmentFilter">
            <div>
                <label>Filter by user</label>
                <input type="text" name="name" value="" style="display: block; width: 100%;">
            </div>

            <div style="margin-top: 15px">
                <label>Filter by action</label>
                <input type="text" name="name" value="" style="display: block; width: 100%;">
            </div>

            <div style="margin-top: 15px" class="clearfix">
                <label style="clear:both; display: block;">Filter by date</label>
                <input type="text" name="name" value="" style="float: left; width: 45%;" placeholder="From...">
                <input type="text" name="name" value="" style="float: right; width: 45%;" placeholder="To...">
            </div>

            <div class="AddTag-footer" style="margin-top: 20px; clear:both">
                <a href="#" class="Button Button--main Button--addTag">Update Results</a>
            </div>
        </div>
    </script>


    <!--/////////////////////////////////////
        Modal
    /////////////////////////////////////-->

    <div class="Overlay"></div>
    <div class="Modal">
        <div class="Modal-header clearfix">
            <div class="Modal-headerText"></div>
            <div class="Modal-close"></div>
        </div>
        <div class="Modal-wrapper">
            <div class="Modal-container"></div>
        </div>
    </div>

    <!--/////////////////////////////////////
        Annotations
    /////////////////////////////////////-->
    <script>
        let annotations = {
            ".Filter--country": {
                "text": "This control will be be disabled until a discipline has been selected. While disabled, the text will read “Select a discipline to enable this field”"
            },
            ".Filter--authority": {
                "text": "This control will be disabled until an authority has been selected. While disabled, the text will read “Select a discipline and country to enable this field”"
            },
            ".Drawer-toggle": {
                "text": "<strong>Aesthetics:</strong><br>" +
                        "the ‘Actions’ button and associated dropdown has a different style & layout in the visual design. Refer to <a href=\"https://projects.invisionapp.com/share/MP799KQF9#/screens/157602862/comments\" target=\"_blank\">this visual design</a>" +
                        "<br><br>"+
                        "<strong>Functionality:</strong><br>"+
                        "‘Status: Approved’ will be a dropdown containing all statuses for that structure. Different structures have different statuses available"
            },
            "[data-structure=\"gse\"] .Results-content": {
                x: 150,
                y: 160,
                "text": "This page is needed so that a user can perform actions on the GSE standard. For example, perform an alignment involving the GSE, or a product."
            }
        }
    </script>

    <!--/////////////////////////////////////
        scripts
    /////////////////////////////////////-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.1/dragula.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="/assets/js/main.js"></script>
</body>
</html>
