<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="javascript:void(0)">Forms</a></li>
        <li class="active"><a href="">Components</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Text Inputs -->
    <form action="page_form_components.php" method="post" class="form-horizontal form-box" onsubmit="return false;">
        <h4 class="form-box-header">Text Inputs</h4>
        <div class="form-box-content">
            <!-- Input Sizes -->
            <div class="form-group">
                <label class="control-label col-md-2">Static</label>
                <div class="col-md-3">
                    <p class="form-control-static">Username</p>
                </div>
                <div class="col-md-7">
                    <span class="help-block"><code>.form-control-static</code></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2" for="example-input-small">Small</label>
                <div class="col-md-3">
                    <input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm">
                </div>
                <div class="col-md-7">
                    <span class="help-block"><code>.form-control</code> <code>.input-sm</code></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2" for="example-input-normal">Normal</label>
                <div class="col-md-3">
                    <input type="text" id="example-input-normal" name="example-input-normal" class="form-control">
                </div>
                <div class="col-md-7">
                    <span class="help-block"><code>.form-control</code></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2" for="example-input-large">Large</label>
                <div class="col-md-3">
                    <input type="text" id="example-input-large" name="example-input-large" class="form-control input-lg">
                </div>
                <div class="col-md-7">
                    <span class="help-block"><code>.form-control</code> <code>.input-lg</code></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2" for="example-input-grid1">Using the grid</label>
                <div class="col-md-1">
                    <input type="text" id="example-input-grid1" name="example-input-grid1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-2 col-md-offset-2">
                    <input type="text" id="example-input-grid2" name="example-input-grid2" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3 col-md-offset-2">
                    <input type="text" id="example-input-grid3" name="example-input-grid3" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4 col-md-offset-2">
                    <input type="text" id="example-input-grid4" name="example-input-grid4" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-5 col-md-offset-2">
                    <input type="text" id="example-input-grid5" name="example-input-grid5" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-2">
                    <input type="text" id="example-input-grid6" name="example-input-grid6" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-7 col-md-offset-2">
                    <input type="text" id="example-input-grid7" name="example-input-grid7" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-8 col-md-offset-2">
                    <input type="text" id="example-input-grid8" name="example-input-grid8" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-9 col-md-offset-2">
                    <input type="text" id="example-input-grid9" name="example-input-grid9" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                    <input type="text" id="example-input-grid10" name="example-input-grid10" class="form-control">
                </div>
            </div>
            <!-- END Input Sizes -->

            <!-- Disabled Input -->
            <div class="form-group">
                <label class="control-label col-md-2" for="example-input-disabled">Disabled</label>
                <div class="col-md-4">
                    <input type="text" id="example-input-disabled" name="example-input-disabled" class="form-control" disabled>
                </div>
            </div>
            <!-- END Disabled Input -->

            <!-- Inline input and placeholder -->
            <div class="form-group">
                <label class="control-label col-md-2" for="example-input-inline">Inline</label>
                <div class="col-md-2">
                    <input type="text" id="example-input-inline" name="example-input-inline" class="form-control" placeholder="Placeholder text..">
                </div>
                <div class="col-md-2">
                    <input type="text" id="example-input-inline2" name="example-input-inline2" class="form-control">
                </div>
                <div class="col-md-2">
                    <input type="text" id="example-input-inline3" name="example-input-inline3" class="form-control">
                </div>
                <div class="col-md-2">
                    <input type="text" id="example-input-inline4" name="example-input-inline4" class="form-control">
                </div>
                <div class="col-md-2">
                    <input type="text" id="example-input-inline5" name="example-input-inline5" class="form-control">
                </div>
            </div>
            <!-- END Inline input and placeholder -->

            <!-- Typeahead example, initialized in main.js - uiDemo() -->
            <div class="form-group">
                <label class="control-label col-md-2" for="example-input-typeahead">Typeahead</label>
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="text" id="example-input-typeahead" class="form-control example-typeahead" placeholder="search..">
                        <span class="input-group-btn">
                            <button class="btn btn-default"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                    <span class="help-block"><code>.example-typeahead</code></span>
                </div>
            </div>
            <!-- END Typeahead example -->

            <!-- Prepend Content -->
            <h4 class="form-box-sub-header">Prepend Content</h4>
            <div class="form-group">
                <label class="control-label col-md-2"><span class="help-block"><em>Text or icons</em></span></label>
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <input type="text" id="example-input-prepend" name="example-input-prepend" class="form-control" placeholder="Username">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon">Firstname:</span>
                        <input type="text" id="example-input-prepend2" name="example-input-prepend2" class="form-control" placeholder="Enter..">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                        <input type="text" id="example-input-prepend3" name="example-input-prepend3" class="form-control" placeholder="@username">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2"><span class="help-block"><em>Buttons with text or icons</em></span></label>
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-default">Search</button>
                        </span>
                        <input type="text" id="example-input-prepend-btn" name="example-input-prepend-btn" class="form-control" placeholder="Username">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-success"><i class="fa fa-search"></i></button>
                        </span>
                        <input type="text" id="example-input-prepend-btn2" name="example-input-prepend-btn2" class="form-control" placeholder="Search..">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-primary"><i class="fa fa-facebook"></i></button>
                            <button class="btn btn-info"><i class="fa fa-twitter"></i></button>
                            <button class="btn btn-danger"><i class="fa fa-pinterest"></i></button>
                        </span>
                        <input type="text" id="example-input-prepend-btn3" name="example-input-prepend-btn3" class="form-control" placeholder="@username">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2"><span class="help-block"><em>Buttons and Dropdowns</em></span></label>
                <div class="col-md-5">
                    <div class="input-group">
                        <div class="input-group-btn">
                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)">Option 1</a></li>
                                <li><a href="javascript:void(0)">Option 2</a></li>
                                <li><a href="javascript:void(0)">Option 3</a></li>
                            </ul>
                        </div>
                        <input type="text" id="example-input-prepend-dd" name="example-input-prepend-dd" class="form-control" placeholder="...">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="input-group">
                        <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fa fa-facebook"></i></button>
                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i> Twitter</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i> Google Plus+</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i> Linkedin</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                            </ul>
                        </div>
                        <input type="text" id="example-input-prepend-dd2" name="example-input-prepend-dd2" class="form-control" placeholder="@username">
                    </div>
                </div>
            </div>
            <!-- END Prepend Content -->

            <!-- Append Content -->
            <h4 class="form-box-sub-header">Append Content</h4>
            <div class="form-group">
                <label class="control-label col-md-2"><span class="help-block"><em>Text or icons</em></span></label>
                <div class="col-md-3">
                    <div class="input-group">
                        <input type="text" id="example-input-append" name="example-input-append" class="form-control text-right" placeholder="00">
                        <span class="input-group-addon">.00</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <input type="text" id="example-input-append2" name="example-input-append2" class="form-control" placeholder="Email">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="text" id="example-input-append3" name="example-input-append3" class="form-control" placeholder="Add url">
                        <span class="input-group-addon"><i class="fa fa-rss"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2"><span class="help-block"><em>Buttons with text or icons</em></span></label>
                <div class="col-md-3">
                    <div class="input-group">
                        <input type="text" id="example-input-append-btn" name="example-input-append-btn" class="form-control" placeholder="username">
                        <span class="input-group-btn">
                            <button class="btn btn-default">Search</button>
                        </span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <input type="text" id="example-input-append-btn2" name="example-input-append-btn2" class="form-control" placeholder="search..">
                        <span class="input-group-btn">
                            <button class="btn btn-success"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="text" id="example-input-append-btn3" name="example-input-append-btn3" class="form-control" placeholder="@username">
                        <span class="input-group-btn">
                            <button class="btn btn-primary"><i class="fa fa-facebook"></i></button>
                            <button class="btn btn-info"><i class="fa fa-twitter"></i></button>
                            <button class="btn btn-danger"><i class="fa fa-pinterest"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2"><span class="help-block"><em>Buttons and Dropdowns</em></span></label>
                <div class="col-md-5">
                    <div class="input-group">
                        <input type="text" id="example-input-append-dd" name="example-input-append-dd" class="form-control" placeholder="...">
                        <div class="input-group-btn">
                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="javascript:void(0)">Option 1</a></li>
                                <li><a href="javascript:void(0)">Option 2</a></li>
                                <li><a href="javascript:void(0)">Option 3</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="input-group">
                        <input type="text" id="example-input-append-dd2" name="example-input-append-dd2" class="form-control" placeholder="@username">
                        <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fa fa-facebook"></i></button>
                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i> Twitter</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i> Google Plus+</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i> Linkedin</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Append Content -->

            <!-- Prepend and append Content -->
            <h4 class="form-box-sub-header">Prepend &amp; Append Content</h4>
            <div class="form-group">
                <label class="control-label col-md-2"><span class="help-block"><em>Text or icons</em></span></label>
                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input type="text" id="example-input-preapppend" name="example-input-preapppend" class="form-control text-right" placeholder="00">
                        <span class="input-group-addon">.00</span>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                        <span class="input-group-addon">Facebook</span>
                        <input type="text" id="example-input-preapppend2" name="example-input-preapppend2" class="form-control text-center" placeholder="@username">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2"><span class="help-block"><em>Buttons with text or icons</em></span></label>
                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-primary"><i class="fa fa-facebook"></i></button>
                        </span>
                        <input type="text" id="example-input-preapppend-btn" name="example-input-preapppend-btn" class="form-control text-center" placeholder="@username">
                        <span class="input-group-btn">
                            <button class="btn btn-info"><i class="fa fa-twitter"></i></button>
                        </span>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-primary"><i class="fa fa-facebook"></i></button>
                        </span>
                        <span class="input-group-btn">
                            <button class="btn btn-primary">Friends</button>
                        </span>
                        <input type="text" id="example-input-preapppend-btn2" name="example-input-preapppend-btn2" class="form-control text-center" placeholder="@username">
                        <span class="input-group-btn">
                            <button class="btn btn-info"><i class="fa fa-twitter"></i></button>
                        </span>
                        <span class="input-group-btn">
                            <button class="btn btn-info">Followers</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2"><span class="help-block"><em>Buttons and Dropdowns</em></span></label>
                <div class="col-md-5">
                    <div class="input-group">
                        <div class="input-group-btn">
                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)">Edit</a></li>
                                <li><a href="javascript:void(0)">Delete</a></li>
                            </ul>
                        </div>
                        <input type="text" id="example-input-preappend-dd" name="example-input-preappend-dd" class="form-control" placeholder="@username">
                        <span class="input-group-btn">
                            <button class="btn btn-warning"><i class="fa fa-exclamation-triangle"></i></button>
                        </span>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="input-group">
                        <div class="input-group-btn">
                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i> Twitter</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i> Google Plus+</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i> Linkedin</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                            </ul>
                        </div>
                        <input type="text" id="example-input-preappend-dd2" name="example-input-preappend-dd2" class="form-control" placeholder="@username">
                        <span class="input-group-btn">
                            <button class="btn btn-primary"><i class="fa fa-facebook"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            <!-- END Prepend and append Content -->

            <div class="form-group form-actions">
                <div class="col-md-10 col-md-offset-2">
                    <input type="submit" class="btn btn-success" value="Save changes">
                    <input type="submit" class="btn btn-danger" value="Cancel">
                </div>
            </div>
        </div>
    </form>
    <!-- END Text Inputs -->

    <!-- Validation States -->
    <form action="page_form_components.php" method="post" class="form-horizontal form-box" onsubmit="return false;">
        <h4 class="form-box-header">Validation States</h4>
        <div class="form-box-content">
            <div class="form-group">
                <label class="control-label col-md-2" for="example-input-tooltip">Tooltip</label>
                <div class="col-md-3">
                    <input type="text" id="example-input-tooltip" name="example-input-tooltip" class="form-control" data-toggle="tooltip" data-placement="right" title="Info!">
                </div>
                <div class="col-md-7">
                    <span class="help-block">Tooltip with info</span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2" for="example-input-popover">Popover</label>
                <div class="col-md-3">
                    <input type="text" id="example-input-popover" name="example-input-popover" class="form-control" data-toggle="popover" data-placement="top" data-title="Information" data-content="This is some dummy content! Inform the user about input requirements!">
                </div>
                <div class="col-md-7">
                    <span class="help-block">Popover with info</span>
                </div>
            </div>
            <div class="form-group has-success">
                <label class="control-label col-md-2" for="example-input-success">Success</label>
                <div class="col-md-3">
                    <input type="text" id="example-input-success" name="example-input-success" class="form-control">
                </div>
                <div class="col-md-7">
                    <span class="help-block"><i class="fa fa-check"></i> Valid!</span>
                </div>
            </div>
            <div class="form-group has-warning">
                <label class="control-label col-md-2" for="example-input-warning">Warning</label>
                <div class="col-md-3">
                    <input type="password" id="example-input-warning" name="example-input-warning" class="form-control">
                </div>
                <div class="col-md-7">
                    <span class="help-block"><i class="fa fa-exclamation-triangle"></i> The password is too small!</span>
                </div>
            </div>
            <div class="form-group has-error">
                <label class="control-label col-md-2" for="example-input-error">Error</label>
                <div class="col-md-3">
                    <input type="text" id="example-input-error" name="example-input-error" class="form-control">
                </div>
                <div class="col-md-3">
                    <input type="password" id="example-input-error2" name="example-input-error2" class="form-control">
                </div>
                <div class="col-md-4">
                    <span class="help-block"><i class="fa fa-times"></i> Login failed!</span>
                </div>
            </div>
        </div>
    </form>
    <!-- END Validation States -->

    <!-- Pickers -->
    <form action="page_form_components.php" method="post" class="form-horizontal form-box" onsubmit="return false;">
        <h4 class="form-box-header">Pickers</h4>
        <div class="form-box-content">
            <!-- Colorpicker for Bootstrap (classes are initialized in js/main.js -> uiInit()), for extra usage examples you can check out http://www.eyecon.ro/bootstrap-colorpicker/ -->
            <div class="form-group">
                <label class="control-label col-md-2" for="example-input-colorpicker">Color</label>
                <div class="col-md-2">
                    <input type="text" id="example-input-colorpicker" name="example-input-colorpicker" class="form-control input-colorpicker">
                </div>
                <div class="col-md-8">
                    <span class="help-block"><code>.input-colorpicker</code></span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-2 col-md-offset-2">
                    <div class="input-group input-colorpicker color" data-color="#db4a39">
                        <input type="text" id="example-input-colorpicker2" name="example-input-colorpicker2" class="form-control">
                        <span class="input-group-addon"><i style="background-color: #db4a39"></i></span>
                    </div>
                </div>
                <div class="col-md-8">
                    <span class="help-block">As a component</span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-2 col-md-offset-2">
                    <div class="input-group input-colorpicker color" data-color="rgba(0,0,0,1)" data-color-format="rgba">
                        <input type="text" id="example-input-colorpicker3" name="example-input-colorpicker3" class="form-control">
                        <span class="input-group-addon"><i style="background-color: rgba(0,0,0,1)"></i></span>
                    </div>
                </div>
                <div class="col-md-8">
                    <span class="help-block">RGBa</span>
                </div>
            </div>
            <!-- END Colorpicker -->

            <!-- Timepicker for Bootstrap (classes are initialized in js/main.js -> uiInit()), for extra usage examples you can check out http://jdewit.github.io/bootstrap-timepicker/ -->
            <div class="form-group">
                <label class="control-label col-md-2" for="example-input-timepicker">Time</label>
                <div class="col-md-2">
                    <div class="input-group bootstrap-timepicker">
                        <input type="text" id="example-input-timepicker" name="example-input-timepicker" class="form-control input-timepicker">
                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                    </div>
                </div>
                <div class="col-md-8">
                    <span class="help-block"><code>.input-timepicker</code></span>
                </div>
            </div>
            <!-- END Timepicker -->

            <!-- Datepicker for Bootstrap (classes are initialized in js/main.js -> uiInit()), for extra usage examples you can check out http://eternicode.github.io/bootstrap-datepicker -->
            <div class="form-group">
                <label class="control-label col-md-2" for="example-input-datepicker">Date</label>
                <div class="col-md-2">
                    <input type="text" id="example-input-datepicker" name="example-input-datepicker" class="form-control input-datepicker">
                </div>
                <div class="col-md-8">
                    <span class="help-block"><code>.input-datepicker</code></span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-2 col-md-offset-2">
                    <div class="input-group date input-datepicker" data-date="30-04-2013" data-date-format="dd-mm-yyyy">
                        <input type="text" id="example-input-datepicker2" name="example-input-datepicker2" class="form-control">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                </div>
                <div class="col-md-8">
                    <span class="help-block">As a component</span>
                </div>
            </div>
            <!-- END Datepicker -->

            <!-- Daterangepicker (classes are initialized in js/main.js -> uiInit()), for extra usage examples you can check out https://github.com/dangrossman/bootstrap-daterangepicker -->
            <div class="form-group">
                <label class="control-label col-md-2" for="example-input-daterangepicker">Date Range</label>
                <div class="col-md-3">
                    <div class="input-group">
                        <input type="text" id="example-input-daterangepicker" name="example-input-daterangepicker" class="form-control input-daterangepicker">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <span class="help-block"><code>.input-daterangepicker</code></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">Advanced Date Range</label>
                <div class="col-md-4">
                    <div id="example-advanced-daterangepicker" class="btn btn-default">
                        <i class="fa fa-calendar"></i>
                        <span></span>
                        <b class="caret"></b>
                    </div>
                </div>
            </div>
            <!-- END Daterangepicker -->

            <div class="form-group form-actions">
                <div class="col-md-10 col-md-offset-2">
                    <button class="btn btn-success"><i class="fa fa-floppy-o"></i> Save</button>
                    <button class="btn btn-danger"><i class="fa fa-times"></i> Delete</button>
                </div>
            </div>
        </div>
    </form>
    <!-- END Pickers -->

    <!-- Textareas -->
    <form action="page_form_components.php" method="post" class="form-horizontal form-box" onsubmit="return false;">
        <h4 class="form-box-header">Textareas</h4>
        <div class="form-box-content">
            <div class="form-group">
                <label class="control-label col-md-2" for="example-textarea">Default</label>
                <div class="col-md-4">
                    <textarea id="example-textarea" name="example-textarea" class="form-control" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">Disabled</label>
                <div class="col-md-4">
                    <textarea id="example-textarea-disabled" name="example-textarea-disabled" class="form-control" rows="3" disabled>This is a disabled textarea!</textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2" for="example-textarea-large">Large</label>
                <div class="col-md-10">
                    <textarea id="example-textarea-large" name="example-textarea-large" class="form-control" rows="10"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2" for="example-textarea-editor">WYSIWYG Editor</label>
                <div class="col-md-10">
                    <textarea id="example-textarea-editor" name="example-textarea-editor" class="textarea-editor textarea-large" rows="10"></textarea>
                    <span class="help-block">Add the <code>.textarea-editor</code> class to a textarea to transform it into a wysiwyg editor</span>
                </div>
            </div>
            <!-- CKEditor, you just need to include the plugin (see at the bottom of this page) and add the class 'ckeditor' to your textarea -->
            <!-- More info can be found at http://ckeditor.com -->
            <div class="form-group">
                <label class="control-label col-md-2" for="example-textarea-ckeditor">CKEditor</label>
                <div class="col-md-10">
                    <textarea id="example-textarea-ckeditor" name="example-textarea-ckeditor" class="ckeditor"></textarea>
                    <span class="help-block">Add the <code>.ckeditor</code> class to a textarea to transform it into a rich wysiwyg editor</span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2" for="example-textarea-elastic">Elastic</label>
                <div class="col-md-4">
                    <textarea id="example-textarea-elastic" name="example-textarea-elastic" class="form-control textarea-elastic" rows="3"></textarea>
                    <span class="help-block">Add the <code>.textarea-elastic</code> class to a textarea and will auto expand as you write</span>
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-md-10 col-md-offset-2">
                    <button class="btn btn-success"><i class="fa fa-floppy-o"></i> Save</button>
                    <button class="btn btn-danger"><i class="fa fa-times"></i> Delete</button>
                </div>
            </div>
        </div>
    </form>
    <!-- END Textareas -->

    <!-- Checkboxes, Radios & Selects -->
    <form action="page_form_components.php" method="post" class="form-horizontal form-box" onsubmit="return false;">
        <h4 class="form-box-header">Switches, Checkboxes, Radios & Selects</h4>
        <div class="form-box-content">
            <!-- Switches -->
            <div class="form-group">
                <label class="control-label col-md-2">Switches</label>
                <div class="col-md-10">
                    <label class="switch switch-default"><input type="checkbox" checked><span></span></label>
                    <label class="switch switch-info"><input type="checkbox" checked><span></span></label>
                    <label class="switch switch-success"><input type="checkbox" checked><span></span></label>
                    <label class="switch switch-warning"><input type="checkbox" checked><span></span></label>
                    <label class="switch switch-danger"><input type="checkbox" checked><span></span></label>
                    <span class="help-block">Checked</span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                    <label class="switch switch-default"><input type="checkbox"><span></span></label>
                    <label class="switch switch-info"><input type="checkbox"><span></span></label>
                    <label class="switch switch-success"><input type="checkbox"><span></span></label>
                    <label class="switch switch-warning"><input type="checkbox"><span></span></label>
                    <label class="switch switch-danger"><input type="checkbox"><span></span></label>
                    <span class="help-block">Unchecked</span>
                </div>
            </div>
            <!-- END Switches -->

            <!-- Checkboxes -->
            <div class="form-group">
                <label class="control-label col-md-2">Checkboxes</label>
                <div class="col-md-10">
                    <div class="checkbox">
                        <label for="example-checkbox1">
                            <input type="checkbox" id="example-checkbox1" name="example-checkbox1" value="option1"> Option1
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="example-checkbox2">
                            <input type="checkbox" id="example-checkbox2" name="example-checkbox2" value="option2"> Option2
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="example-checkbox3">
                            <input type="checkbox" id="example-checkbox3" name="example-checkbox3" value="option3"> Option3
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">Inline Checkboxes</label>
                <div class="col-md-4">
                    <label class="checkbox-inline" for="example-checkbox-inline1">
                        <input type="checkbox" id="example-checkbox-inline1" name="example-checkbox-inline1" value="option1"> Option1
                    </label>
                    <label class="checkbox-inline" for="example-checkbox-inline2">
                        <input type="checkbox" id="example-checkbox-inline2" name="example-checkbox-inline2" value="option2"> Option2
                    </label>
                    <label class="checkbox-inline" for="example-checkbox-inline3">
                        <input type="checkbox" id="example-checkbox-inline3" name="example-checkbox-inline3" value="option3"> Option3
                    </label>
                </div>
            </div>
            <!-- END Checkboxes -->

            <!-- Radios -->
            <div class="form-group">
                <label class="control-label col-md-2">Radios</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="example-radio1">
                            <input type="radio" id="example-radio1" name="example-radios" value="option1"> Option1
                        </label>
                    </div>
                    <div class="radio">
                        <label for="example-radio2">
                            <input type="radio" id="example-radio2" name="example-radios" value="option2"> Option2
                        </label>
                    </div>
                    <div class="radio">
                        <label for="example-radio3">
                            <input type="radio" id="example-radio3" name="example-radios" value="option3"> Option3
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">Inline Radios</label>
                <div class="col-md-4">
                    <label class="radio-inline" for="example-radio-inline1">
                        <input type="radio" id="example-radio-inline1" name="example-radios-inline" value="option1"> Option1
                    </label>
                    <label class="radio-inline" for="example-radio-inline2">
                        <input type="radio" id="example-radio-inline2" name="example-radios-inline" value="option2"> Option2
                    </label>
                    <label class="radio-inline" for="example-radio-inline3">
                        <input type="radio" id="example-radio-inline3" name="example-radios-inline" value="option3"> Option3
                    </label>
                </div>
            </div>
            <!-- END Radios -->

            <!-- Selects -->
            <div class="form-group">
                <label class="control-label col-md-2" for="example-select">Select</label>
                <div class="col-md-2">
                    <select id="example-select" name="example-select" class="form-control">
                        <option>html</option>
                        <option>css</option>
                        <option>javascript</option>
                        <option>php</option>
                        <option>mysql</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2" for="example-select-multiple">Multiple Select</label>
                <div class="col-md-2">
                    <select id="example-select-multiple" name="example-select-multiple" class="form-control" multiple>
                        <option>html</option>
                        <option>css</option>
                        <option>javascript</option>
                        <option>php</option>
                        <option>mysql</option>
                    </select>
                </div>
            </div>
            <!-- END Selects -->

            <!-- Chosen plugin (class is initialized in js/main.js -> uiInit()), for extra usage examples you can check out http://harvesthq.github.io/chosen/ -->
            <div class="form-group">
                <label class="control-label col-md-2" for="example-select-chosen">Chosen Select</label>
                <div class="col-md-2">
                    <select id="example-select-chosen" name="example-select-chosen" class="form-control select-chosen">
                        <option>html</option>
                        <option>css</option>
                        <option>javascript</option>
                        <option>php</option>
                        <option>mysql</option>
                    </select>
                    <span class="help-block"><code>.select-chosen</code></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2" for="example-select-chosen-multiple">Chosen Select Multiple</label>
                <div class="col-md-2">
                    <select id="example-select-chosen-multiple" name="example-select-chosen-multiple" class="form-control select-chosen" multiple>
                        <option selected>html</option>
                        <option>css</option>
                        <option>javascript</option>
                        <option>php</option>
                        <option>mysql</option>
                    </select>
                    <span class="help-block"><code>.select-chosen</code></span>
                </div>
            </div>
            <!-- END Chosen plugin -->

            <!-- Select2 plugin (class for basic usage is initialized in js/main.js -> uiInit()), for extra usage examples you can check out http://ivaynberg.github.io/select2/ -->
            <div class="form-group">
                <label class="control-label col-md-2" for="example-select-select2">Select2 Select</label>
                <div class="col-md-4">
                    <select id="example-select-select2" name="example-select-select2" class="form-control select-select2">
                        <option>html</option>
                        <option>css</option>
                        <option>javascript</option>
                        <option>php</option>
                        <option>mysql</option>
                    </select>
                    <span class="help-block"><code>.select-select2</code></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2" for="example-select-select2-multiple">Select2 Select Multiple</label>
                <div class="col-md-4">
                    <select id="example-select-select2-multiple" name="example-select-select2-multiple" class="form-control select-select2" multiple>
                        <option selected>html</option>
                        <option>css</option>
                        <option>javascript</option>
                        <option>php</option>
                        <option>mysql</option>
                    </select>
                    <span class="help-block"><code>.select-select2</code></span>
                </div>
            </div>
            <!-- END Select2 plugin -->

            <div class="form-group form-actions">
                <div class="col-md-10 col-md-offset-2">
                    <button class="btn btn-success"><i class="fa fa-wrench"></i> Update Settings</button>
                </div>
            </div>
        </div>
    </form>
    <!-- END Checkboxes, Radios & Selects -->

    <!-- File Upload -->
    <form action="page_form_components.php" method="post" enctype="multipart/form-data" class="form-horizontal form-box" onsubmit="return false;">
        <h4 class="form-box-header">File Upload</h4>
        <div class="form-box-content">
            <div class="form-group">
                <label class="control-label col-md-2" for="example-file">Default</label>
                <div class="col-md-4">
                    <input type="file" id="example-file" name="example-file" class="form-control">
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-md-10 col-md-offset-2">
                    <button class="btn btn-success"><i class="fa fa-arrow-circle-o-up"></i> Upload</button>
                    <button class="btn btn-danger">Cancel</button>
                </div>
            </div>
        </div>
    </form>
    <!-- END File Upload -->

    <!-- Dropzone -->
    <div class="form-box">
        <h4 class="form-box-header form-box-header-push">Dropzone <small>Just add <code>.dropzone</code> class to a form! On unsupported browsers it will fall back to normal input</small></h4>
        <div class="form-box-content">
            <form action="page_form_components.php" class="dropzone push">
                <div class="fallback">
                    <input name="file" type="file">
                </div>
            </form>
        </div>
    </div>
    <!-- END Dropzone -->

    <!-- Input Grid -->
    <form action="page_form_components.php" method="post" class="form-horizontal form-box remove-margin">
        <h4 class="form-box-header">Input Grid</h4>
        <div class="form-box-content">
            <div class="form-group">
                <div class="col-md-7">
                    <input type="text" class="form-control" placeholder=".col-md-7">
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder=".col-md-5">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder=".col-md-6">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder=".col-md-6">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder=".col-md-3">
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder=".col-md-9">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-8">
                    <input type="text" class="form-control" placeholder=".col-md-8">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder=".col-md-4">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder=".col-md-3">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder=".col-md-3">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder=".col-md-3">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder=".col-md-3">
                </div>
            </div>
        </div>
    </form>
    <!-- END Input Grid -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- ckeditor.js, load it only in the page you would like to use CKEditor (it's a heavy plugin to include it with the others!) -->
<script src="js/ckeditor/ckeditor.js"></script>

<?php include 'inc/bottom.php'; // Close body and html tags ?>