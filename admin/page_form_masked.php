<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="javascript:void(0)">Forms</a></li>
        <li class="active"><a href="">Masked Inputs</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Form Masked, Initialization happens at the bottom of the page -->
    <form action="page_form_masked.php" method="post" class="form-horizontal form-box remove-margin" onsubmit="return false;">
        <!-- Form Header -->
        <h4 class="form-box-header">Masked Inputs <small>Easily mask the inputs with a specific pattern</small></h4>

        <!-- Form Content -->
        <div class="form-box-content">
            <div class="form-group">
                <label class="control-label col-md-2" for="masked_date">Date</label>
                <div class="col-md-3">
                    <input type="text" id="masked_date" name="masked_date" class="form-control">
                    <span class="help-block">dd/mm/yyyy</span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2" for="masked_date2">Date 2</label>
                <div class="col-md-3">
                    <input type="text" id="masked_date2" name="masked_date2" class="form-control">
                    <span class="help-block">dd-mm-yyyy</span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2" for="masked_phone">Phone</label>
                <div class="col-md-3">
                    <input type="text" id="masked_phone" name="masked_phone" class="form-control">
                    <span class="help-block">(999) 999-9999</span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2" for="masked_phone_ext">Phone + Ext</label>
                <div class="col-md-3">
                    <input type="text" id="masked_phone_ext" name="masked_phone_ext" class="form-control">
                    <span class="help-block">(999) 999-9999? x99999</span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2" for="masked_taxid">Tax ID</label>
                <div class="col-md-3">
                    <input type="text" id="masked_taxid" name="masked_taxid" class="form-control">
                    <span class="help-block">99-9999999</span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2" for="masked_ssn">SSN</label>
                <div class="col-md-3">
                    <input type="text" id="masked_ssn" name="masked_ssn" class="form-control">
                    <span class="help-block">999-99-9999</span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2" for="masked_pkey">Product Key</label>
                <div class="col-md-3">
                    <input type="text" id="masked_pkey" name="masked_pkey" class="form-control">
                    <span class="help-block">a*-999-a999</span>
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-md-10 col-md-offset-2">
                    <button type="reset" class="btn btn-danger"><i class="fa fa-repeat"></i> Reset</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Submit</button>
                </div>
            </div>
        </div>
        <!-- END Form Content -->
    </form>
    <!-- END Form Masked -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->
<script>
    $(function(){
        // Initialize masked inputs
        // a - Represents an alpha character (A-Z,a-z)
        // 9 - Represents a numeric character (0-9)
        // * - Represents an alphanumeric character (A-Z,a-z,0-9)
        $('#masked_date').mask('99/99/9999');
        $('#masked_date2').mask('99-99-9999');
        $('#masked_phone').mask('(999) 999-9999');
        $('#masked_phone_ext').mask('(999) 999-9999? x99999');
        $('#masked_taxid').mask('99-9999999');
        $('#masked_ssn').mask('999-99-9999');
        $('#masked_pkey').mask('a*-999-a999');
    });
</script>

<?php include 'inc/bottom.php'; // Close body and html tags ?>