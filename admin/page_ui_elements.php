<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li class="active"><a href="">UI Elements</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Buttons and Dropdowns -->
    <h3 class="page-header page-header-top">Buttons + Dropdown Menus</h3>

    <!-- Simple Buttons -->
    <h4 class="sub-header">Buttons <small>You can have all kinds of buttons with different colors and sizes like shown on the following examples</small></h4>
    <div class="row">
        <div class="col-md-6">
            <h4>Simple Buttons</h4>
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td style="width: 50%;"><code>.btn</code> <code>.btn-default</code></td>
                        <td><button type="button" class="btn btn-default">Default</button></td>
                    </tr>
                    <tr>
                        <td><code>.btn</code> <code>.btn-primary</code></td>
                        <td><button type="button" class="btn btn-primary">Primary</button></td>
                    </tr>
                    <tr>
                        <td><code>.btn</code> <code>.btn-success</code></td>
                        <td><button type="button" class="btn btn-success">Success</button></td>
                    </tr>
                    <tr>
                        <td><code>.btn</code> <code>.btn-danger</code></td>
                        <td><button type="button" class="btn btn-danger">Danger</button></td>
                    </tr>
                    <tr>
                        <td><code>.btn</code> <code>.btn-warning</code></td>
                        <td><button type="button" class="btn btn-warning">Warning</button></td>
                    </tr>
                    <tr>
                        <td><code>.btn</code> <code>.btn-info</code></td>
                        <td><button type="button" class="btn btn-info">Info</button></td>
                    </tr>
                    <tr>
                        <td><code>.btn</code> <code>.btn-inverse</code></td>
                        <td><button type="button" class="btn btn-inverse">Inverse</button></td>
                    </tr>
                    <tr>
                        <td><code>.btn</code> <code>.btn-link</code></td>
                        <td><button type="button" class="btn btn-link">Link</button></td>
                    </tr>
                    <tr>
                        <td><code>.btn</code> <code>.disabled</code></td>
                        <td>
                            <a class="btn disabled" href="javascript:void(0)">Link</a>
                            <button class="btn disabled" type="submit" disabled>Button</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h4>Sizes</h4>
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td style="width: 50%;"><code>.btn</code> <code>.btn-xs</code> <code>.btn-default</code></td>
                        <td>
                            <button type="button" class="btn btn-xs btn-default">Default</button>
                        </td>
                    </tr>
                    <tr>
                        <td><code>.btn</code> <code>.btn-sm</code> <code>.btn-default</code></td>
                        <td>
                            <button type="button" class="btn btn-sm btn-default">Default</button>
                        </td>
                    </tr>
                    <tr>
                        <td><code>.btn</code> <code>.btn-lg</code> <code>.btn-default</code></td>
                        <td>
                            <button type="button" class="btn btn-lg btn-default">Default</button>
                        </td>
                    </tr>
                    <tr>
                        <td><code>.btn</code> <code>.btn-xs</code> <code>.btn-success</code></td>
                        <td>
                            <button type="button" class="btn btn-xs btn-success">Success</button>
                        </td>
                    </tr>
                    <tr>
                        <td><code>.btn</code> <code>.btn-sm</code> <code>.btn-success</code></td>
                        <td>
                            <button type="button" class="btn btn-sm btn-success">Success</button>
                        </td>
                    </tr>
                    <tr>
                        <td><code>.btn</code> <code>.btn-lg</code> <code>.btn-success</code></td>
                        <td>
                            <button type="button" class="btn btn-lg btn-success">Success</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Simple Buttons -->

    <h4 class="sub-header">Buttons Group and Dropdowns</h4>

    <!-- Button group -->
    <div class="well push">
        <p>Use buttons inside a div with <code>.btn-group</code> class to create a group</p>
        <div class="btn-group">
            <button class="btn btn-default">Left</button>
            <button class="btn btn-default">Middle</button>
            <button class="btn btn-default">Right</button>
        </div>
    </div>
    <!-- END Button group -->

    <!-- Button group vertical -->
    <div class="well push">
        <p>Add the extra <code>.btn-group-vertical</code> class for a vertical group</p>
        <div class="btn-group btn-group-vertical">
            <button class="btn btn-default">1</button>
            <button class="btn btn-default">2</button>
            <button class="btn btn-default">3</button>
        </div>
    </div>
    <!-- END Button group vertical -->

    <!-- Button groups and dropdowns -->
    <div class="well push">
        <p>Use any button within a <code>.btn-group</code> and the proper dropdown menu markup to trigger it.</p>
        <div class="btn-group">
            <a  href="javascript:void(0)" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Extra options <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="javascript:void(0)">First link</a></li>
                <li><a href="javascript:void(0)">Second link</a></li>
                <li class="divider"></li>
                <li><a href="javascript:void(0)">Another link</a></li>
            </ul>
        </div>
        <div class="btn-group">
            <a href="javascript:void(0)" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="javascript:void(0)">First link</a></li>
                <li class="disabled"><a href="javascript:void(0)">This is a disabled link</a></li>
                <li class="divider"></li>
                <li class="dropdown-submenu">
                    <a tabindex="-1" href="javascript:void(0)">More options</a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">First link</a></li>
                        <li><a href="javascript:void(0)">Second link</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)">Another link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="btn-group dropup">
            <a href="javascript:void(0)" class="btn btn-info dropdown-toggle" data-toggle="dropdown"><i class="fa fa-beer"></i> <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="javascript:void(0)">First link</a></li>
                <li class="disabled"><a href="javascript:void(0)">This is a disabled link</a></li>
                <li class="divider"></li>
                <li><a href="javascript:void(0)">Another link</a></li>
            </ul>
        </div>
        <div class="btn-group">
            <a class="btn btn-success"><i class="gemicon-small-gear1 gemicon-small-white"></i></a>
            <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)"><span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="javascript:void(0)">First link</a></li>
                <li class="disabled"><a href="javascript:void(0)">This is a disabled link</a></li>
                <li class="divider"></li>
                <li><a href="javascript:void(0)">Another link</a></li>
            </ul>
        </div>
    </div>
    <!-- END Button groups and dropdowns -->

    <!-- Toolbar -->
    <div class="well push">
        <p>Combine sets of divs with <code>.btn-group</code> classes inside a div with <code>.btn-toolbar</code> class to create a toolbar! Remember that you can use any icon, color or size you want!</p>
        <div class="btn-toolbar push">
            <div class="btn-group">
                <button class="btn btn-default"><i class="fa fa-file"></i></button>
                <button class="btn btn-default"><i class="fa fa-floppy-o"></i></button>
            </div>
            <div class="btn-group">
                <button class="btn btn-default"><i class="fa fa-scissors"></i></button>
                <button class="btn btn-default"><i class="fa fa-files-o"></i></button>
                <button class="btn btn-default"><i class="fa fa-clipboard"></i></button>
            </div>
            <div class="btn-group">
                <button class="btn btn-default"><i class="fa fa-bold"></i></button>
                <button class="btn btn-default"><i class="fa fa-italic"></i></button>
                <button class="btn btn-default"><i class="fa fa-underline"></i></button>
                <button class="btn btn-default"><i class="fa fa-strikethrough"></i></button>
            </div>
        </div>
        <div class="btn-toolbar">
            <div class="btn-group">
                <button class="btn btn-warning"><i class="fa fa-align-left"></i></button>
                <button class="btn btn-warning"><i class="fa fa-align-center"></i></button>
                <button class="btn btn-warning"><i class="fa fa-align-right"></i></button>
            </div>
            <div class="btn-group">
                <button class="btn btn-info"><i class="fa fa-outdent"></i></button>
                <button class="btn btn-info"><i class="fa fa-indent"></i></button>
            </div>
            <div class="btn-group">
                <button class="btn btn-success"><i class="fa fa-list-ul"></i></button>
                <button class="btn btn-success"><i class="fa fa-list-ol"></i></button>
                <button class="btn btn-success"><i class="fa fa-table"></i></button>
            </div>
            <div class="btn-group">
                <button class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="javascript:void(0)">First link</a></li>
                    <li><a href="javascript:void(0)">Second link</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0)">Another link</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END Toolbar -->
    <!-- END Buttons -->

    <!-- Navigation Elements -->
    <h3 class="page-header">Navigation Elements <small>Navs, Navbar, Breadcrumbs, Pagination, Tabs and Accordion</small></h3>

    <!-- Navs -->
    <h4 class="sub-header">Navs <small>Navs are created with <code>&lt;ul&gt;</code> lists. Just add the right class and the list will be formatted accordingly!</small></h4>

    <!-- Tabs -->
    <div class="push">
        <p class="well"><code>.nav</code> <code>.nav-tabs</code></p>
        <ul class="nav nav-tabs">
            <li class="active"><a href="javascript:void(0)">Home</a></li>
            <li><a href="javascript:void(0)">Profile</a></li>
            <li><a href="javascript:void(0)">Settings</a></li>
        </ul>
    </div>
    <!-- END Tabs -->

    <!-- Pills -->
    <div class="push">
        <p class="well"><code>.nav</code> <code>.nav-pills</code></p>
        <ul class="nav nav-pills">
            <li class="active"><a href="javascript:void(0)">Home</a></li>
            <li><a href="javascript:void(0)">Profile</a></li>
            <li><a href="javascript:void(0)">Settings</a></li>
            <li class="disabled"><a href="javascript:void(0)">Disabled</a></li>
        </ul>
    </div>
    <!-- END Pills -->

    <!-- Pills Stacked -->
    <div class="push">
        <p class="well"><code>.nav</code> <code>.nav-pills</code> <code>.nav-stacked</code></p>
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="javascript:void(0)">Home</a></li>
            <li><a href="javascript:void(0)">Profile</a></li>
            <li><a href="javascript:void(0)">Settings</a></li>
            <li class="disabled"><a href="javascript:void(0)">Disabled</a></li>
        </ul>
    </div>
    <!-- END Pills Stacked -->

    <!-- Navbars -->
    <h4 class="sub-header">Navbar</h4>

    <!-- Inverse Navbar - You can replace 'navbar-inverse' with 'navbar-default' for a light navbar -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <a href="javascript:void(0)" class="navbar-brand">Logo</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="javascript:void(0)">Link</a></li>
                <li><a href="javascript:void(0)">Link</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Action</a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)">Separated link</a></li>
                        <li><a href="javascript:void(0)">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="javascript:void(0)">Link</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Action</a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END Inverse Navbar -->
    <!-- END Navbars -->

    <!-- Breadcumbs -->
    <h4 class="sub-header">Breadcrumbs <small>A <code>&lt;ol&gt;</code> list with the class <code>.breadcrumb</code> becomes a breadcrumb</small></h4>
    <div class="push">
        <ol class="breadcrumb">
            <li><a href="javascript:void(0)">Home</a></li>
            <li><a href="javascript:void(0)">Settings</a></li>
            <li class="active">Profile</li>
        </ol>
    </div>
    <!-- END Breadcumbs -->

    <!-- Pagination -->
    <h4 class="sub-header">Pagination <small>Just a <code>&lt;ul&gt;</code> with <code>.pagination</code> class</small></h4>

    <!-- Standard Pagination -->
    <div class="push">
        <p class="well">Standard Pagination</p>
        <ul class="pagination">
            <li><a href="javascript:void(0)">Prev</a></li>
            <li><a href="javascript:void(0)">1</a></li>
            <li><a href="javascript:void(0)">2</a></li>
            <li><a href="javascript:void(0)">3</a></li>
            <li><a href="javascript:void(0)">Next</a></li>
        </ul>
    </div>
    <!-- END Standard Pagination -->

    <!-- Pagination States -->
    <div class="push">
        <p class="well">Active and disabled states</p>
        <ul class="pagination">
            <li class="disabled"><a href="javascript:void(0)">Prev</a></li>
            <li><a href="javascript:void(0)">1</a></li>
            <li class="active"><a href="javascript:void(0)">2</a></li>
            <li><a href="javascript:void(0)">3</a></li>
            <li><a href="javascript:void(0)">Next</a></li>
        </ul>
    </div>
    <!-- END Pagination States -->

    <!-- Pagination Sizes -->
    <div class="push">
        <p class="well">Add an extra class for different sizes <code>.pagination-lg</code> <code>.pagination-sm</code></p>
        <div>
            <ul class="pagination pagination-lg">
                <li><a href="javascript:void(0)">Prev</a></li>
                <li><a href="javascript:void(0)">1</a></li>
                <li><a href="javascript:void(0)">2</a></li>
                <li><a href="javascript:void(0)">3</a></li>
                <li><a href="javascript:void(0)">Next</a></li>
            </ul>
        </div>
        <div>
            <ul class="pagination pagination-sm">
                <li><a href="javascript:void(0)">Prev</a></li>
                <li><a href="javascript:void(0)">1</a></li>
                <li><a href="javascript:void(0)">2</a></li>
                <li><a href="javascript:void(0)">3</a></li>
                <li><a href="javascript:void(0)">Next</a></li>
            </ul>
        </div>
    </div>
    <!-- END Pagination Sizes -->

    <!-- Pagination Alignments -->
    <div class="push">
        <p class="well">Wrap it in a <code>div</code> element and add the class <code>.text-center</code> or <code>.text-right</code> to align it!</p>
        <div>
            <ul class="pagination">
                <li><a href="javascript:void(0)">Prev</a></li>
                <li><a href="javascript:void(0)">1</a></li>
                <li><a href="javascript:void(0)">2</a></li>
                <li><a href="javascript:void(0)">3</a></li>
                <li><a href="javascript:void(0)">Next</a></li>
            </ul>
        </div>
        <div class="text-center">
            <ul class="pagination">
                <li><a href="javascript:void(0)">Prev</a></li>
                <li><a href="javascript:void(0)">1</a></li>
                <li><a href="javascript:void(0)">2</a></li>
                <li><a href="javascript:void(0)">3</a></li>
                <li><a href="javascript:void(0)">Next</a></li>
            </ul>
        </div>
        <div class="text-right">
            <ul class="pagination">
                <li><a href="javascript:void(0)">Prev</a></li>
                <li><a href="javascript:void(0)">1</a></li>
                <li><a href="javascript:void(0)">2</a></li>
                <li><a href="javascript:void(0)">3</a></li>
                <li><a href="javascript:void(0)">Next</a></li>
            </ul>
        </div>
    </div>
    <!-- END Pagination Alignments -->

    <!-- Pager -->
    <div class="push">
        <p class="well">Pager for simple pagination. A <code>&lt;ul&gt;</code> with <code>.pager</code> class</p>
        <ul class="pager">
            <li class="previous"><a href="javascript:void(0)"><i class="fa fa-arrow-left"></i> Prev</a></li>
            <li class="next"><a href="javascript:void(0)">Next <i class="fa fa-arrow-right"></i></a></li>
        </ul>
        <ul class="pager">
            <li class="previous"><a href="javascript:void(0)">Prev</a></li>
            <li class="next"><a href="javascript:void(0)">Next</a></li>
        </ul>
        <ul class="pager">
            <li class="previous"><a href="javascript:void(0)"><i class="fa fa-arrow-left"></i></a></li>
            <li class="next"><a href="javascript:void(0)"><i class="fa fa-arrow-right"></i></a></li>
        </ul>
    </div>
    <!-- END Pager -->

    <!-- Working Tabs, just add data-toggle="tabs" in the ul tab list -->
    <h4 class="sub-header">Tabs</h4>

    <div class="row">
        <div class="col-md-6 clearfix">
            <h4>Aligned left</h4>
            <ul id="example-tabs" class="nav nav-tabs" data-toggle="tabs">
                <li class="active"><a href="#example-tabs-home">Home</a></li>
                <li><a href="#example-tabs-profile">Profile</a></li>
                <li><a href="#example-tabs-messages">Messages</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="example-tabs-home">Home Content!</div>
                <div class="tab-pane" id="example-tabs-profile">Profile Content!</div>
                <div class="tab-pane" id="example-tabs-messages">Messages Content!</div>
            </div>
        </div>
        <div class="col-md-6 clearfix">
            <h4>Aligned Right</h4>
            <ul id="example-tabs3" class="nav nav-tabs nav-right" data-toggle="tabs">
                <li class="active"><a href="#example-tabs3-home">Home</a></li>
                <li><a href="#example-tabs3-profile">Profile</a></li>
                <li><a href="#example-tabs3-messages">Messages</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="example-tabs3-home">Home Content!</div>
                <div class="tab-pane" id="example-tabs3-profile">Profile Content!</div>
                <div class="tab-pane" id="example-tabs3-messages">Messages Content!</div>
            </div>
        </div>
    </div>
    <!-- END Working Tabs -->

    <!-- Accordion -->
    <h4 class="sub-header">Accordion</h4>

    <div id="accordion" class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        Collapsible Group Item #1
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        Collapsible Group Item #2
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        Collapsible Group Item #3
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
    </div>
    <!-- END Accordion -->
    <!-- END Navigation Elements -->

    <!-- Alerts -->
    <h3 class="page-header">Alerts</h3>

    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> The task was completed!
    </div>
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Info!</strong> This is a message just to let you know!
    </div>
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Error!</strong> Ohh, no.. The system failed us!
    </div>
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Warning!</strong> Be careful, a lot can happen with these options!
    </div>
    <!-- END Alerts -->

    <!-- Progress Bars -->
    <h3 class="page-header">Progress Bars</h3>

    <div class="row push">
        <div class="col-sm-2">
            <!-- Code of demo is at the bottom of this page -->
            <button id="example-progress-bar-button" type="button" class="btn btn-success" data-loading-text="Working..">
                <i class="fa fa-play"></i> Demo
            </button>
        </div>
        <div class="col-sm-10">
            <div id="example-progress-bar" class="progress">
                <div class="progress-bar progress-bar-danger"></div>
            </div>
        </div>
    </div>

    <div class="row push">
        <div class="col-sm-2">Default style</div>
        <div class="col-sm-10">
            <div class="progress">
                <div class="progress-bar progress-bar-danger" style="width: 30%;">30%</div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-warning" style="width: 45%;">45%</div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-info" style="width: 60%;">60%</div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-success" style="width: 75%;">75%</div>
            </div>
        </div>
    </div>

    <div class="row push">
        <div class="col-sm-2">Mini</div>
        <div class="col-sm-10">
            <div class="progress progress-mini">
                <div class="progress-bar progress-bar-danger" style="width: 30%;"></div>
            </div>
            <div class="progress progress-mini">
                <div class="progress-bar progress-bar-warning" style="width: 45%;"></div>
            </div>
            <div class="progress progress-mini">
                <div class="progress-bar progress-bar-info" style="width: 60%;"></div>
            </div>
            <div class="progress progress-mini">
                <div class="progress-bar progress-bar-success" style="width: 75%;"></div>
            </div>
        </div>
    </div>

    <div class="row push">
        <div class="col-sm-2">With Stripes</div>
        <div class="col-sm-10">
            <div class="progress progress-striped">
                <div class="progress-bar progress-bar-danger" style="width: 30%">Loading..</div>
            </div>
            <div class="progress progress-striped">
                <div class="progress-bar progress-bar-warning" style="width: 45%">Loading..</div>
            </div>
            <div class="progress progress-striped">
                <div class="progress-bar progress-info" style="width: 60%">Loading..</div>
            </div>
            <div class="progress progress-striped">
                <div class="progress-bar progress-bar-success" style="width: 75%">Loading..</div>
            </div>
        </div>
    </div>

    <div class="row push">
        <div class="col-sm-2">Animated stripes (on modern browsers)</div>
        <div class="col-sm-10">
            <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-danger" style="width: 30%">Loading..</div>
            </div>
            <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-warning" style="width: 45%">Loading..</div>
            </div>
            <div class="progress progress-striped active">
                <div class="progress-bar progress-info" style="width: 60%">Loading..</div>
            </div>
            <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-success" style="width: 75%">Loading..</div>
            </div>
        </div>
    </div>

    <div class="row push">
        <div class="col-sm-2">Stacked Bars</div>
        <div class="col-sm-10">
            <div class="progress progress-mini">
                <div class="progress-bar progress-bar-danger" style="width: 15%;"></div>
                <div class="progress-bar progress-bar-warning" style="width: 20%;"></div>
                <div class="progress-bar progress-bar-info" style="width: 25%;"></div>
                <div class="progress-bar progress-bar-success" style="width: 40%;"></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-danger" style="width: 15%;">15%</div>
                <div class="progress-bar progress-bar-warning" style="width: 20%;">20%</div>
                <div class="progress-bar progress-bar-info" style="width: 25%;">25%</div>
                <div class="progress-bar progress-bar-success" style="width: 40%;">40%</div>
            </div>
            <div class="progress progress-striped">
                <div class="progress-bar progress-bar-danger" style="width: 15%;">15%</div>
                <div class="progress-bar progress-bar-warning" style="width: 20%;">20%</div>
                <div class="progress-bar progress-bar-info" style="width: 25%;">25%</div>
                <div class="progress-bar progress-bar-success" style="width: 40%;">40%</div>
            </div>
            <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-danger" style="width: 15%;">15%</div>
                <div class="progress-bar progress-bar-warning" style="width: 20%;">20%</div>
                <div class="progress-bar progress-bar-info" style="width: 25%;">25%</div>
                <div class="progress-bar progress-bar-success" style="width: 40%;">40%</div>
            </div>
        </div>
    </div>
    <!-- END Progress Bars -->

    <!-- Loaders -->
    <h3 class="page-header">Loaders <small>Use one of the 12 loading gifs or make any FontAwesome icon spin (on modern browsers)!</small></h3>

    <div class="row">
        <div class="col-md-6">
            <h4 class="sub-header">Gifs</h4>
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td><code>.loader-01</code></td>
                        <td><span class="loader-01"></span></td>
                        <td><code>.loader-07</code></td>
                        <td><span class="loader-07"></span></td>
                    </tr>
                    <tr>
                        <td><code>.loader-02</code></td>
                        <td><span class="loader-02"></span></td>
                        <td><code>.loader-08</code></td>
                        <td><span class="loader-08"></span></td>
                    </tr>
                    <tr>
                        <td><code>.loader-03</code></td>
                        <td><span class="loader-03"></span></td>
                        <td><code>.loader-09</code></td>
                        <td><span class="loader-09"></span></td>
                    </tr>
                    <tr>
                        <td><code>.loader-04</code></td>
                        <td><span class="loader-04"></span></td>
                        <td><code>.loader-10</code></td>
                        <td><span class="loader-10"></span></td>
                    </tr>
                    <tr>
                        <td><code>.loader-05</code></td>
                        <td><span class="loader-05"></span></td>
                        <td><code>.loader-11</code></td>
                        <td><span class="loader-11"></span></td>
                    </tr>
                    <tr>
                        <td><code>.loader-06</code></td>
                        <td><span class="loader-06"></span></td>
                        <td><code>.loader-12</code></td>
                        <td><span class="loader-12"></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-5 col-md-offset-1">
            <h4 class="sub-header">FontAwesome <small><code>.fa-spin</code> to any icon!</small></h4>
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td><code>.fa</code> <code>.fa-spin</code> <code>.fa-asterisk</code></td>
                        <td><i class="fa fa-asterisk fa-spin"></i></td>
                    </tr>
                    <tr>
                        <td><code>.fa</code> <code>.fa-spin</code> <code>.fa-spinner</code></td>
                        <td><i class="fa fa-spinner fa-spin"></i></td>
                    </tr>
                    <tr>
                        <td><code>.fa</code> <code>.fa-spin</code> <code>.fa-spinner</code> <code>.fa-2x</code></td>
                        <td><i class="fa fa-spinner fa-spin fa-2x"></i></td>
                    </tr>
                    <tr>
                        <td><code>.fa</code> <code>.fa-spin</code> <code>.fa-spinner</code> <code>.fa-4x</code></td>
                        <td><i class="fa fa-spinner fa-spin fa-4x"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Loaders -->

    <!-- Popovers, Tooltips & Modals -->
    <h3 class="page-header">Popovers, Tooltips &amp; Modals</h3>

    <div class="row">
        <!-- Popovers -->
        <div class="col-md-5">
            <h4 class="sub-header">Popovers</h4>
            <button class="btn btn-success" data-toggle="popover" data-content="This is an information popup! Use it easy with the content you want!" title="Popover!">Popover</button>
            <button class="btn btn-default" data-toggle="popover" data-content="This is an information popover! Use it easily with the content you want!" data-placement="top" title="Popover on top!"><i class="fa fa-arrow-up"></i></button>
            <button class="btn btn-default" data-toggle="popover" data-content="This is an information popover! Use it easily with the content you want!" data-placement="right" title="Popover on right!"><i class="fa fa-arrow-right"></i></button>
            <button class="btn btn-default" data-toggle="popover" data-content="This is an information popover! Use it easily with the content you want!" data-placement="bottom" title="Popover on bottom!"><i class="fa fa-arrow-down"></i></button>
            <button class="btn btn-default" data-toggle="popover" data-content="This is an information popover! Use it easily with the content you want!" data-placement="left" title="Popover on left!"><i class="fa fa-arrow-left"></i></button>
        </div>
        <!-- END Popovers -->

        <!-- Tooltips -->
        <div class="col-md-4">
            <h4 class="sub-header">Tooltips</h4>
            <a href="javascript:void(0)" data-toggle="tooltip" title="General tooltip!">Tooltip</a><br>
            <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Tooltip on top!">Tooltip Top</a><br>
            <a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="Tooltip on right!">Tooltip Right</a><br>
            <a href="javascript:void(0)" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom!">Tooltip Bottom</a><br>
            <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Tooltip on left!">Tooltip Left</a><br>
        </div>
        <!-- END Tooltips -->

        <!-- Modals -->
        <div class="col-md-3">
            <h4 class="sub-header">Modals</h4>
            <!-- Modal link -->
            <a href="#example-modal" class="btn btn-default" data-toggle="modal">Launch demo modal</a>

            <!-- Modal itself -->
            <div id="example-modal" class="modal">
                <!-- Modal Dialog -->
                <div class="modal-dialog">
                    <!-- Modal Content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h4>Modal Heading</h4>
                        </div>
                        <div class="modal-body">
                            <p>Modal Content..</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button class="btn btn-success">Save</button>
                        </div>
                    </div>
                    <!-- END Modal Content -->
                </div>
                <!-- END Modal Dialog -->
            </div>
            <!-- END Modal itself -->
        </div>
        <!-- END Modals -->
    </div>
    <!-- END Popovers, Tooltips & Modals -->

    <!-- Carousel -->
    <h3 class="page-header">Carousel</h3>

    <div class="row">
        <div class="col-md-6">
            <!-- First Carousel -->
            <div id="example-carousel" class="carousel slide push">
                <ol class="carousel-indicators">
                    <li data-target="#example-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#example-carousel" data-slide-to="1"></li>
                    <li data-target="#example-carousel" data-slide-to="2"></li>
                    <li data-target="#example-carousel" data-slide-to="3"></li>
                    <li data-target="#example-carousel" data-slide-to="4"></li>
                    <li data-target="#example-carousel" data-slide-to="5"></li>
                </ol>

                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/placeholders/image_dark_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/placeholders/image_light_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/placeholders/image_dark_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/placeholders/image_light_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/placeholders/image_dark_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/placeholders/image_light_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                </div>
                <!-- END Carousel items -->

                <!-- Carousel nav -->
                <a class="left carousel-control" href="#example-carousel" data-slide="prev">
                    <span class="fa fa-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#example-carousel" data-slide="next">
                    <span class="fa fa-chevron-right"></span>
                </a>
                <!-- END Carousel nav -->
            </div>
            <!-- END First Carousel -->
        </div>
        <div class="col-md-6">
            <!-- Second Carousel -->
            <div id="example-carousel2" class="carousel slide remove-margin">
                <ol class="carousel-indicators">
                    <li data-target="#example-carousel2" data-slide-to="0" class="active"></li>
                    <li data-target="#example-carousel2" data-slide-to="1"></li>
                    <li data-target="#example-carousel2" data-slide-to="2"></li>
                    <li data-target="#example-carousel2" data-slide-to="3"></li>
                    <li data-target="#example-carousel2" data-slide-to="4"></li>
                    <li data-target="#example-carousel2" data-slide-to="5"></li>
                </ol>

                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/placeholders/image_dark_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/placeholders/image_light_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/placeholders/image_dark_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/placeholders/image_light_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/placeholders/image_dark_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/placeholders/image_light_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                </div>
                <!-- END Carousel items -->

                <!-- Carousel nav -->
                <a class="left carousel-control" href="#example-carousel2" data-slide="prev">
                    <span class="fa fa-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#example-carousel2" data-slide="next">
                    <span class="fa fa-chevron-right"></span>
                </a>
                <!-- END Carousel nav -->
            </div>
            <!-- END Second Carousel -->
        </div>
    </div>
    <!-- END Carousel -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->
<script>
    $(function () {
        // Demostration of progress bars
        var pbBar = $('#example-progress-bar .progress-bar');
        var pbButton = $('#example-progress-bar-button');

        pbButton.click(function(){
            $(this).button('loading');
            var i = 1;
            interval = setInterval(function() {
                pbBar.css('width', i + '%');
                if (i > 15)
                    pbBar.html(i * 10 + '/1000');
                if (i === 33)
                    pbBar.removeClass('progress-bar-danger').addClass('progress-bar-warning');
                if (i === 66)
                    pbBar.removeClass('progress-bar-warning').addClass('progress-bar-success');
                i++;
                if (i > 100) {
                    clearInterval(interval);
                    pbButton.html('Done!');
                    pbBar.html('<i class="fa fa-check"></i>');
                }
            }, 50);
        });
    });
</script>

<?php include 'inc/bottom.php'; // Close body and html tags ?>