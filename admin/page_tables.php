<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="javascript:void(0)">Tables</a></li>
        <li class="active"><a href="">Styles</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Default style -->
    <h3 class="page-header page-header-top">Default Style <small><code>.table</code></small></h3>
    <p class="well">Some columns will not be visible on phones. This can be achieved by adding the class <code>.hidden-xs</code> on the <code>&lt;td&gt;</code> elements we want to hide. There are also other classes for hiding or making visible html elements on various devices: <code>.hidden-xs hidden-sm</code> <code>.hidden-md</code> <code>.hidden-lg</code> &amp; <code>.visible-xs</code> <code>.visible-sm</code> <code>.visible-md</code> <code>.visible-lg</code></p>
    <table class="table">
        <thead>
            <tr>
                <th class="cell-small text-center" data-toggle="tooltip" title="Toggle all!"><input type="checkbox" id="check1-all" name="check1-all"></th>
                <th class="text-center">#</th>
                <th>Username</th>
                <th class="hidden-xs hidden-sm"><i class="fa fa-envelope-o"></i> Email</th>
                <th class="hidden-xs hidden-sm">Firstname</th>
                <th class="hidden-xs hidden-sm">Lastname</th>
                <th class="text-center"><i class="fa fa-bolt"></i> Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=1; $i<5; $i++) { ?>
            <tr>
                <td class="text-center"><input type="checkbox" id="check1-td<?php echo $i; ?>" name="check1-td<?php echo $i; ?>"></td>
                <td class="text-center"><?php echo $i; ?></td>
                <td><a href="javascript:void(0)">username<?php echo $i; ?></a></td>
                <td class="hidden-xs hidden-sm">user<?php echo $i; ?>@example.com</td>
                <td class="hidden-xs hidden-sm">Name</td>
                <td class="hidden-xs hidden-sm">Last</td>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="javascript:void(0)" class="btn btn-xs btn-inverse" data-toggle="popover" data-placement="top" data-content="Content" title="Plans">
                            <i class="fa fa-angle-double-up"></i> Upgrade
                        </a>
                    </div>
                    <div class="btn-group">
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Details" class="btn btn-xs btn-info"><i class="fa fa-info-circle"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- END Default style -->

    <!-- Condensed -->
    <h3 class="page-header">Condensed <small><code>.table</code> <code>.table-condensed</code></small></h3>
    <table class="table table-condensed">
        <thead>
            <tr>
                <th class="cell-small text-center" data-toggle="tooltip" title="Toggle all!"><input type="checkbox" id="check2-all" name="check2-all"></th>
                <th class="text-center">#</th>
                <th>Username</th>
                <th class="hidden-xs hidden-sm"><i class="fa fa-envelope-o"></i> Email</th>
                <th class="hidden-xs hidden-sm">Firstname</th>
                <th class="hidden-xs hidden-sm">Lastname</th>
                <th class="cell-small text-center"><i class="fa fa-bolt"></i> Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=1; $i<5; $i++) { ?>
            <tr>
                <td class="text-center"><input type="checkbox" id="check2-td<?php echo $i; ?>" name="check2-td<?php echo $i; ?>"></td>
                <td class="text-center"><?php echo $i; ?></td>
                <td><a href="javascript:void(0)">username<?php echo $i; ?></a></td>
                <td class="hidden-xs hidden-sm">user<?php echo $i; ?>@example.com</td>
                <td class="hidden-xs hidden-sm">Name</td>
                <td class="hidden-xs hidden-sm">Last</td>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Details" class="btn btn-xs btn-info"><i class="fa fa-info-circle"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- END Condensed -->

    <!-- Hover -->
    <h3 class="page-header">Hover <small><code>.table</code> <code>.table-hover</code></small></h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="cell-small text-center" data-toggle="tooltip" title="Toggle all!"><input type="checkbox" id="check3-all" name="check3-all"></th>
                <th class="text-center">#</th>
                <th>Username</th>
                <th class="hidden-xs hidden-sm"><i class="fa fa-envelope-o"></i> Email</th>
                <th class="hidden-xs hidden-sm">Firstname</th>
                <th class="hidden-xs hidden-sm">Lastname</th>
                <th class="cell-small text-center"><i class="fa fa-bolt"></i> Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=1; $i<5; $i++) { ?>
            <tr>
                <td class="text-center"><input type="checkbox" id="check3-td<?php echo $i; ?>" name="check3-td<?php echo $i; ?>"></td>
                <td class="text-center"><?php echo $i; ?></td>
                <td><a href="javascript:void(0)">username<?php echo $i; ?></a></td>
                <td class="hidden-xs hidden-sm">user<?php echo $i; ?>@example.com</td>
                <td class="hidden-xs hidden-sm">Name</td>
                <td class="hidden-xs hidden-sm">Last</td>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Details" class="btn btn-xs btn-info"><i class="fa fa-info-circle"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- END Hover -->

    <!-- With Stripes -->
    <h3 class="page-header">With Stripes <small><code>.table</code> <code>.table-striped</code></small></h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="cell-small text-center" data-toggle="tooltip" title="Toggle all!"><input type="checkbox" id="check4-all" name="check4-all"></th>
                <th class="text-center">#</th>
                <th>Username</th>
                <th class="hidden-xs hidden-sm"><i class="fa fa-envelope-o"></i> Email</th>
                <th class="hidden-xs hidden-sm">Firstname</th>
                <th class="hidden-xs hidden-sm">Lastname</th>
                <th class="cell-small text-center"><i class="fa fa-bolt"></i> Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=1; $i<5; $i++) { ?>
            <tr>
                <td class="cell-small text-center"><input type="checkbox" id="check4-td<?php echo $i; ?>" name="check4-td<?php echo $i; ?>"></td>
                <td class="cell-small text-center"><?php echo $i; ?></td>
                <td><a href="javascript:void(0)">username<?php echo $i; ?></a></td>
                <td class="hidden-xs hidden-sm">user<?php echo $i; ?>@example.com</td>
                <td class="hidden-xs hidden-sm">Name</td>
                <td class="hidden-xs hidden-sm">Last</td>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Details" class="btn btn-xs btn-info"><i class="fa fa-info-circle"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- END With Stripes -->

    <!-- With Borders -->
    <h3 class="page-header">With Borders <small><code>.table</code> <code>.table-bordered</code></small></h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="cell-small text-center" data-toggle="tooltip" title="Toggle all!"><input type="checkbox" id="check5-all" name="check5-all"></th>
                <th class="text-center">#</th>
                <th>Username</th>
                <th class="hidden-xs hidden-sm"><i class="fa fa-envelope-o"></i> Email</th>
                <th class="hidden-xs hidden-sm">Firstname</th>
                <th class="hidden-xs hidden-sm">Lastname</th>
                <th class="cell-small text-center"><i class="fa fa-bolt"></i> Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=1; $i<5; $i++) { ?>
            <tr>
                <td class="cell-small text-center"><input type="checkbox" id="check5-td<?php echo $i; ?>" name="check5-td<?php echo $i; ?>"></td>
                <td class="cell-small text-center"><?php echo $i; ?></td>
                <td><a href="javascript:void(0)">username<?php echo $i; ?></a></td>
                <td class="hidden-xs hidden-sm">user<?php echo $i; ?>@example.com</td>
                <td class="hidden-xs hidden-sm">Name</td>
                <td class="hidden-xs hidden-sm">Last</td>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Details" class="btn btn-xs btn-info"><i class="fa fa-info-circle"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- END With Borders -->

    <!-- Borderless -->
    <h3 class="page-header">Borderless <small><code>.table</code> <code>.table-borderless</code></small></h3>
    <table class="table table-borderless">
        <thead>
            <tr>
                <th class="cell-small text-center" data-toggle="tooltip" title="Toggle all!"><input type="checkbox" id="check6-ll" name="check6-all"></th>
                <th class="text-center">#</th>
                <th>Username</th>
                <th class="hidden-xs hidden-sm"><i class="fa fa-envelope-o"></i> Email</th>
                <th class="hidden-xs hidden-sm">Firstname</th>
                <th class="hidden-xs hidden-sm">Lastname</th>
                <th class="cell-small text-center"><i class="fa fa-bolt"></i> Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=1; $i<5; $i++) { ?>
            <tr>
                <td class="text-center"><input type="checkbox" id="check6-td<?php echo $i; ?>" name="check6-td<?php echo $i; ?>"></td>
                <td class="text-center"><?php echo $i; ?></td>
                <td><a href="javascript:void(0)">username<?php echo $i; ?></a></td>
                <td class="hidden-xs hidden-sm">user<?php echo $i; ?>@example.com</td>
                <td class="hidden-xs hidden-sm">Name</td>
                <td class="hidden-xs hidden-sm">Last</td>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Details" class="btn btn-xs btn-info"><i class="fa fa-info-circle"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- END Borderless -->

    <!-- Row Classes -->
    <h3 class="page-header">Row Classes <small><code>.success</code> <code>.danger</code> <code>.warning</code> <code>.active</code></small></h3>
    <table class="table table-borderless">
        <thead>
            <tr>
                <th class="cell-small text-center" data-toggle="tooltip" title="Toggle all!"><input type="checkbox" id="check7-all" name="check7-all"></th>
                <th class="text-center">#</th>
                <th>Username</th>
                <th class="hidden-xs hidden-sm"><i class="fa fa-envelope-o"></i> Email</th>
                <th class="hidden-xs hidden-sm">Firstname</th>
                <th class="hidden-xs hidden-sm">Lastname</th>
                <th class="cell-small text-center"><i class="fa fa-bolt"></i> Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $row_classes = array('success', 'danger', 'warning', 'active'); ?>
            <?php for($i = 0; $i < 8; $i++) { ?>
            <tr class="<?php echo $row_classes[($i < 4) ? $i : rand(0, 3)]; ?>">
                <td class="cell-small text-center"><input type="checkbox" id="check7-td<?php echo $i; ?>" name="check7-td<?php echo $i; ?>"></td>
                <td class="text-center"><?php echo $i + 1; ?></td>
                <td><a href="javascript:void(0)">username<?php echo $i + 1; ?></a></td>
                <td class="hidden-xs hidden-sm">user<?php echo $i + 1; ?>@example.com</td>
                <td class="hidden-xs hidden-sm">Name</td>
                <td class="hidden-xs hidden-sm">Last</td>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Details" class="btn btn-xs btn-info"><i class="fa fa-info-circle"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- END Borderless -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>