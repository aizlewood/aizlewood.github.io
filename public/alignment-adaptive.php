
<?php $klass = 'no-padding'; ?>
<?php $title = 'alignment'; ?>
<?php include '_header-adaptive.php' ?>


<div class="grid__item xx-large--one-whole">
        <header class="Page-header">
            <a href="/">Exit</a>
            <h2>Alignment Tool</h2>
        </header>
</div>        

        <div class="AlignmentTool">

            <div class="AlignmentTool-container grid__item xx-large--one-whole">

                <div class="Source">
                    <div class="Source-header">
                        <div class="Source-headerText"><span>Source A:</span> Structure Name</div>

                        <div>
                        <!--
                            <select class="" name="">
                                <option>Grade K</option>
                            </select>
                        -->
                            <button class="Button Button--filter">Filter</button>
                            <button class="Button Button--clear">Clear</button>
                            <button class="Button Button--settings"></button>
                        </div>
                    </div>
                    <div class="Source-container">

                        <div class="Tree">

                        <?php for ($i=0; $i < 2; $i++): ?>
                            <!-- group one -->
                            <div class="ANode">
                                <div class="ANode-arrow active"></div>
                                <div class="Option">
                                    <label>
                                        <input type="checkbox" value="1">
                                        <strong>GLSI0231</strong> Can understand the main points of narratives and conversations about familiar topics (e.g. work, leisure) delivered in clear standard speech.
                                    </label>
                                    <?php $links = 3; $down = 1; ?>
                                    <?php include('partials/pill.php') ?>
                                </div>
                            </div>
                            <div class="ANode-group" data-level="2">
                                <div class="ANode">
                                    <div class="ANode-arrow active"></div>
                                    <div class="Option">
                                        <label>
                                            <input type="checkbox" value="1">
                                            <strong>GLSI0231</strong> Can follow the main points of extended discussion around them if in standard speech.
                                        </label>
                                        <?php $links = 0; $down = 1; ?>
                                        <?php include('partials/pill.php') ?>
                                    </div>
                                </div>

                                <div class="ANode-group" data-level="3">
                                    <div class="ANode">
                                        <div class="ANode-arrow hidden"></div>
                                        <div class="Option">
                                            <label>
                                                <input type="checkbox" value="1">
                                                <strong>GLSI0231</strong> Example learning criteria Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci veniam impedit quisquam fuga eveniet odit repellendus repellat quae ipsam! Sapiente consequuntur
                                            </label>
                                            <?php $links = 0; $down = 0; ?>
                                            <?php include('partials/pill.php') ?>
                                        </div>
                                    </div>
                                    <div class="ANode">
                                        <div class="ANode-arrow hidden"></div>
                                        <div class="Option">
                                            <label>
                                                <input type="checkbox" value="1">
                                                <strong>GLSI0231</strong> Example learning criteria sit amet, consectetur adipisicing elit
                                            </label>
                                            <?php $links = 1; $down = 0; ?>
                                            <?php include('partials/pill.php') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="ANode">
                                    <div class="ANode-arrow hidden"></div>
                                    <div class="Option">
                                        <label>
                                            <input type="checkbox" value="1">
                                            <strong>GLSI0231</strong> Example Sub-title
                                        </label>
                                        <?php $links = 0; $down = 0; ?>
                                        <?php include('partials/pill.php') ?>
                                    </div>
                                </div>
                            </div>

                            <!-- group two  -->
                            <div class="ANode">
                                <div class="ANode-arrow active"></div>
                                <div class="Option">
                                    <label>
                                        <input type="checkbox" value="1">
                                        <strong>GLSI0231</strong> Example Title
                                    </label>
                                    <?php include('partials/pill.php') ?>
                                </div>
                            </div>
                            <div class="ANode-group" data-level="2">
                                <div class="ANode">
                                    <div class="ANode-arrow active"></div>
                                    <div class="Option">
                                        <label>
                                            <input type="checkbox" value="1">
                                            <strong>GLSI0231</strong> Example Sub-title
                                        </label>
                                        <?php include('partials/pill.php') ?>
                                    </div>
                                </div>

                                <div class="ANode-group" data-level="3">
                                    <div class="ANode">
                                        <div class="ANode-arrow hidden"></div>
                                        <div class="Option">
                                            <label>
                                                <input type="checkbox" value="1">
                                                <strong>GLSI0231</strong> Example learning criteria Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci veniam impedit quisquam fuga eveniet odit repellendus repellat quae ipsam! Sapiente consequuntur
                                            </label>
                                            <?php include('partials/pill.php') ?>
                                        </div>
                                    </div>
                                    <div class="ANode">
                                        <div class="ANode-arrow hidden"></div>
                                        <div class="Option">
                                            <label>
                                                <input type="checkbox" value="1">
                                                <strong>GLSI0231</strong> Example learning criteria Lorem ipsum dolor sit amet, consectetur adipisicing consequuntur
                                            </label>
                                            <?php include('partials/pill.php') ?>
                                        </div>
                                    </div>
                                    <div class="ANode">
                                        <div class="ANode-arrow hidden"></div>
                                        <div class="Option">
                                            <label>
                                                <input type="checkbox" value="1">
                                                <strong>GLSI0231</strong> Example learning criteria Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci veniam impedit quisquam fuga eveniet odit repellendus repellat quae ipsam! Sapiente consequuntur
                                            </label>
                                            <?php include('partials/pill.php') ?>
                                        </div>
                                    </div>
                                    <div class="ANode">
                                        <div class="ANode-arrow hidden"></div>
                                        <div class="Option">
                                            <label>
                                                <input type="checkbox" value="1">
                                                <strong>GLSI0231</strong> Example learning criteria ipsum sit amet, adipisicing elit. Adipisci veniam impedit quisquam fuga eveniet odit repellendus quae ipsam! Sapiente consequuntur
                                            </label>
                                            <?php include('partials/pill.php') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="ANode">
                                    <div class="ANode-arrow hidden"></div>
                                    <div class="Option">
                                        <label>
                                            <input type="checkbox" value="1">
                                            <strong>GLSI0231</strong> Example Sub-title
                                        </label>
                                        <?php include('partials/pill.php') ?>
                                    </div>
                                </div>
                            </div>

                        <?php endfor; ?>
                        </div>
                    </div>
                </div>

                <div class="Source">
                    <div class="Source-header">
                        <div class="Source-headerText"><span>Source B:</span> Structure Name</div>

                        <div>
                        <!--
                            <select class="" name="">
                                <option>Grade K</option>
                            </select>
                        -->
                            <button class="Button Button--filter">Filter</button>
                            <button class="Button Button--clear">Clear</button>
                            <button class="Button Button--settings"></button>
                        </div>
                    </div>

                    <div class="Source-container">
                        <div class="Tree">

                        <?php for ($i=0; $i < 2; $i++): ?>
                            <!-- group one -->
                            <div class="ANode">
                                <div class="ANode-arrow active"></div>
                                <div class="Option">
                                    <label>
                                        <input type="checkbox" value="1">
                                        <strong>GLSI0231</strong> Example Title
                                    </label>
                                    <?php include('partials/pill.php') ?>
                                </div>
                            </div>
                            <div class="ANode-group" data-level="2">
                                <div class="ANode">
                                    <div class="ANode-arrow active"></div>
                                    <div class="Option">
                                        <label>
                                            <input type="checkbox" value="1">
                                            <strong>GLSI0231</strong> Example Sub-title
                                        </label>
                                        <?php include('partials/pill.php') ?>
                                    </div>
                                </div>

                                <div class="ANode-group" data-level="3">
                                    <div class="ANode">
                                        <div class="ANode-arrow hidden"></div>
                                        <div class="Option">
                                            <label>
                                                <input type="checkbox" value="1">
                                                <strong>GLSI0231</strong> Example learning criteria Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci veniam impedit quisquam fuga eveniet odit repellendus repellat quae ipsam! Sapiente consequuntur
                                            </label>
                                            <?php include('partials/pill.php') ?>
                                        </div>
                                    </div>
                                    <div class="ANode">
                                        <div class="ANode-arrow hidden"></div>
                                        <div class="Option">
                                            <label>
                                                <input type="checkbox" value="1">
                                                <strong>GLSI0231</strong> Example learning criteria sit amet, consectetur adipisicing elit
                                            </label>
                                            <?php include('partials/pill.php') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="ANode">
                                    <div class="ANode-arrow hidden"></div>
                                    <div class="Option">
                                        <label>
                                            <input type="checkbox" value="1">
                                            <strong>GLSI0231</strong> Example Sub-title
                                        </label>
                                        <?php include('partials/pill.php') ?>
                                    </div>
                                </div>
                            </div>

                            <!-- group two  -->
                            <div class="ANode">
                                <div class="ANode-arrow active"></div>
                                <div class="Option">
                                    <label>
                                        <input type="checkbox" value="1">
                                        <strong>GLSI0231</strong> Example Title
                                    </label>
                                    <?php include('partials/pill.php') ?>
                                </div>
                            </div>
                            <div class="ANode-group" data-level="2">
                                <div class="ANode">
                                    <div class="ANode-arrow active"></div>
                                    <div class="Option">
                                        <label>
                                            <input type="checkbox" value="1">
                                            <strong>GLSI0231</strong> Example Sub-title
                                        </label>
                                        <?php include('partials/pill.php') ?>
                                    </div>
                                </div>

                                <div class="ANode-group" data-level="3">
                                    <div class="ANode">
                                        <div class="ANode-arrow hidden"></div>
                                        <div class="Option">
                                            <label>
                                                <input type="checkbox" value="1">
                                                <strong>GLSI0231</strong> Example learning criteria Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci veniam impedit quisquam fuga eveniet odit repellendus repellat quae ipsam! Sapiente consequuntur
                                            </label>
                                            <?php include('partials/pill.php') ?>
                                        </div>
                                    </div>
                                    <div class="ANode">
                                        <div class="ANode-arrow hidden"></div>
                                        <div class="Option">
                                            <label>
                                                <input type="checkbox" value="1">
                                                <strong>GLSI0231</strong> Example learning criteria Lorem ipsum dolor sit amet, consectetur adipisicing consequuntur
                                            </label>
                                            <?php include('partials/pill.php') ?>
                                        </div>
                                    </div>
                                    <div class="ANode">
                                        <div class="ANode-arrow hidden"></div>
                                        <div class="Option">
                                            <label>
                                                <input type="checkbox" value="1">
                                                <strong>GLSI0231</strong> Example learning criteria Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci veniam impedit quisquam fuga eveniet odit repellendus repellat quae ipsam! Sapiente consequuntur
                                            </label>
                                            <?php include('partials/pill.php') ?>
                                        </div>
                                    </div>
                                    <div class="ANode">
                                        <div class="ANode-arrow hidden"></div>
                                        <div class="Option">
                                            <label>
                                                <input type="checkbox" value="1">
                                                <strong>GLSI0231</strong> Example learning criteria ipsum sit amet, adipisicing elit. Adipisci veniam impedit quisquam fuga eveniet odit repellendus quae ipsam! Sapiente consequuntur
                                            </label>

                                        </div>
                                    </div>
                                </div>

                                <div class="ANode">
                                    <div class="ANode-arrow hidden"></div>
                                    <div class="Option">
                                        <label>
                                            <input type="checkbox" value="1">
                                            <strong>GLSI0231</strong> Example Sub-title
                                        </label>
                                        <?php include('partials/pill.php') ?>
                                    </div>
                                </div>
                            </div>

                        <?php endfor; ?>

                        </div>
                    </div>
                </div>

            </div>

            <footer class="AlignmentTool-footer-adaptive grid__item xx-large--one-whole">

                <div class="RecentPanel">
                    <div class="RecentPanel-container">
                        <ul>
                            <li class="LogItem">
                                <div class="LogItem-sourceA">
                                    <strong>Source A:</strong>
                                    <div>Label of Node appears here with associated metadata as above</div>
                                </div>
                                <div class="LogItem-alignment">
                                    <strong>Alignment:</strong>
                                    <div>exact</div>
                                </div>
                                <div class="LogItem-sourceB">
                                    <strong>Source B:</strong>
                                    <div>Label of Node appears here with associated metadata as above</div>
                                </div>
                            </li>
                            <li class="LogItem">
                                <div class="LogItem-sourceA">
                                    <strong>Source A:</strong>
                                    <div>Label of Node appears here with associated metadata as above</div>
                                </div>
                                <div class="LogItem-alignment">
                                    <strong>Alignment:</strong>
                                    <div>exact</div>
                                </div>
                                <div class="LogItem-sourceB">
                                    <strong>Source B:</strong>
                                    <div>Label of Node appears here with associated metadata as above</div>
                                </div>
                            </li>
                            <li class="LogItem">
                                <div class="LogItem-sourceA">
                                    <strong>Source A:</strong>
                                    <div>Label of Node appears here with associated metadata as above</div>
                                </div>
                                <div class="LogItem-alignment">
                                    <strong>Alignment:</strong>
                                    <div>exact</div>
                                </div>
                                <div class="LogItem-sourceB">
                                    <strong>Source B:</strong>
                                    <div>Label of Node appears here with associated metadata as above</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="/view-alignments">View all alignments &gt;</a>
                </div>

                <div class="AlignPanel">
                    <button name="paste" class="Button Button--main">Paste</button>
                    <button name="copy" class="Button Button--main">Copy</button>
                    &nbsp;
                    <button name="exact" class="Button Button--main">
                        <u>E</u>xact
                    </button>
                    <button name="related" class="Button Button--main">
                        <u>R</u>elated
                    </button>
                    <button name="close" class="Button Button--main">
                        <u>C</u>lose
                    </button>
                    <button name="broad" class="Button Button--main">
                        <u>B</u>road
                    </button>
                    <button name="narrow" class="Button Button--main">
                        <u>N</u>arrow
                    </button>
                    <!--
                    <button name="narrow" class="Button Button--main">
                        <u>A</u>dd Note
                    </button>
                    -->
                </div>

                <div class="Alignment-meta clearfix">
                    <button class="Button Button-recent Button--main">Recent</button>

                    <div class="AlignmentTool-lastAction"></div>

                    <button class="Button Button-align Button--main">Action</button>
                </div>

            </footer>

        </div>

<?php include '_footer.php' ?>
