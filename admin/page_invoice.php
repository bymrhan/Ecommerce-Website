<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="javascript:void(0)">Pages</a></li>
        <li class="active"><a href="">Invoice</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Invoice -->
    <!-- Header -->
    <h3 class="sub-header text-center"><i class="fa fa-file-o"></i> Invoice #INV00536</h3>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!-- Invoice Tile -->
            <div class="dash-tile dash-tile-dark no-opacity remove-margin">
                <!-- Content -->
                <div class="dash-tile-content">
                    <div class="dash-tile-content-inner-fluid dash-tile-content-light">
                        <!-- Addresses -->
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                    <strong><i class="fa fa-home"></i> Your Company</strong><br>
                                    Address Line<br>
                                    Town/City<br>
                                    Region, Zip/Postal Code<br><br>
                                    <abbr title="Phone"><i class="fa fa-phone"></i> </abbr> (000) 000-0000
                                </address>
                            </div>
                            <div class="col-md-5 col-md-offset-1">
                                <table class="table table-borderless table-condensed">
                                    <tbody>
                                        <tr>
                                            <td><strong>Bill To:</strong></td>
                                            <td>
                                                <address>
                                                    <strong>Client Company</strong><br>
                                                    Address Line<br>
                                                    Town/City<br>
                                                    Region, Zip/Postal Code
                                                </address>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Invoice</strong></td>
                                            <td><span class="label label-danger">#INV00536</span></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Date</strong></td>
                                            <td><span class="label label-warning">June 10, 2013</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END Addresses -->

                        <!-- Product Table -->
                        <table class="table table-borderless table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th class="hidden-xs hidden-sm">Description</th>
                                    <th class="hidden-xs hidden-sm text-center">Unit Price</th>
                                    <th class="hidden-xs hidden-sm text-center">Quantity</th>
                                    <th class="text-center">Discount</th>
                                    <th class="text-right">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="success">
                                    <td>1</td>
                                    <td>Design</td>
                                    <td class="hidden-xs hidden-sm"><em>Corporate Website #1</em></td>
                                    <td class="hidden-xs hidden-sm text-center">$700</td>
                                    <td class="hidden-xs hidden-sm text-center">1</td>
                                    <td class="text-center">-</td>
                                    <td class="text-right">$700</td>
                                </tr>
                                <tr class="success">
                                    <td>2</td>
                                    <td>Design</td>
                                    <td class="hidden-xs hidden-sm"><em>Corporate Website #2</em></td>
                                    <td class="hidden-xs hidden-sm text-center">$700</td>
                                    <td class="hidden-xs hidden-sm text-center">1</td>
                                    <td class="text-center">-</td>
                                    <td class="text-right">$700</td>
                                </tr>
                                <tr class="success">
                                    <td>3</td>
                                    <td>Design</td>
                                    <td class="hidden-xs hidden-sm"><em>Corporate Website #3</em></td>
                                    <td class="hidden-xs hidden-sm text-center">$700</td>
                                    <td class="hidden-xs hidden-sm text-center">1</td>
                                    <td class="text-center">-</td>
                                    <td class="text-right">$700</td>
                                </tr>
                                <tr class="success">
                                    <td>4</td>
                                    <td></td>
                                    <td class="hidden-xs hidden-sm"></td>
                                    <td class="hidden-xs hidden-sm text-center"></td>
                                    <td class="hidden-xs hidden-sm text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-right"></td>
                                </tr>
                                <tr class="success">
                                    <td>5</td>
                                    <td></td>
                                    <td class="hidden-xs hidden-sm"></td>
                                    <td class="hidden-xs hidden-sm text-center"></td>
                                    <td class="hidden-xs hidden-sm text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-right"></td>
                                </tr>
                                <tr class="warning">
                                    <td></td>
                                    <td></td>
                                    <td class="hidden-xs hidden-sm"></td>
                                    <td class="hidden-xs hidden-sm"></td>
                                    <td class="hidden-xs hidden-sm"></td>
                                    <td class="text-right"><strong>Subtotal</strong></td>
                                    <td class="text-right">$2100</td>
                                </tr>
                                <tr class="warning">
                                    <td></td>
                                    <td></td>
                                    <td class="hidden-xs hidden-sm"></td>
                                    <td class="hidden-xs hidden-sm"></td>
                                    <td class="hidden-xs hidden-sm"></td>
                                    <td class="text-right"><strong>VAT Rate</strong></td>
                                    <td class="text-right">10%</td>
                                </tr>
                                <tr class="warning">
                                    <td></td>
                                    <td></td>
                                    <td class="hidden-xs hidden-sm"></td>
                                    <td class="hidden-xs hidden-sm"></td>
                                    <td class="hidden-xs hidden-sm"></td>
                                    <td class="text-right"><strong>VAT Due</strong></td>
                                    <td class="text-right">$210</td>
                                </tr>
                                <tr class="warning">
                                    <td></td>
                                    <td></td>
                                    <td class="hidden-xs hidden-sm"></td>
                                    <td class="hidden-xs hidden-sm"></td>
                                    <td class="hidden-xs hidden-sm"></td>
                                    <td class="text-right"><strong>Total Due</strong></td>
                                    <td class="text-right"><span class="text-danger"><strong>$2310</strong></span></td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- END Product Table -->

                        <!-- Extras -->
                        <div class="clearfix">
                            <a href="javascript:void(0)" class="btn btn-lg btn-success pull-right push">Submit Invoice</a>
                            <a href="javascript:void(0)" class="btn btn-lg btn-danger pull-right push">Cancel</a>
                            <p><strong>Sent To:</strong> <a href="javascript:void(0)">client@company.com</a><br>Payment Due by <span class="label label-success">June 15, 2013</span></p>
                        </div>
                        <!-- END Extras -->
                    </div>
                </div>
                <!-- END Content -->
            </div>
            <!-- END Invoice Tile -->
        </div>
    </div>
    <!-- END Invoice -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>