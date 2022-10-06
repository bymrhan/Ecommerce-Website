<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="javascript:void(0)">Forms</a></li>
        <li class="active"><a href="">Wizard</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Basic Form Wizard -->
    <form id="basic-wizard" action="page_form_wizard.php" method="post" class="form-horizontal form-box">
        <!-- Form Header -->
        <h4 class="form-box-header"><i class="fa fa-magic"></i> Basic Wizard</h4>

        <!-- Form Content -->
        <div class="form-box-content">

            <!-- First Step -->
            <div id="first" class="step">
                <!-- Step Info -->
                <div class="wizard-steps row">
                    <div class="col-md-4 text-center active">1. Account</div>
                    <div class="col-md-4 text-center">2. Personal</div>
                    <div class="col-md-4 text-center">3. Extras</div>
                </div>
                <!-- END Step Info -->
                <div class="form-group">
                    <label class="control-label col-md-2" for="example-username">Username</label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="text" id="example-username" name="example-username" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="example-email">Email</label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="text" id="example-email" name="example-email" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="example-password">Password</label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="password" id="example-password" name="example-password" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="example-password2">Retype Password</label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="password" id="example-password2" name="example-password2" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END First Step -->

            <!-- Second Step -->
            <div id="second" class="step">
                <!-- Step Info -->
                <div class="wizard-steps row">
                    <div class="col-md-4 text-center">1. Account <i class="fa fa-check"></i></div>
                    <div class="col-md-4 text-center active">2. Personal</div>
                    <div class="col-md-4 text-center">3. Extras</div>
                </div>
                <!-- END Step Info -->
                <div class="form-group">
                    <label class="control-label col-md-2" for="example-firstname">Firstname</label>
                    <div class="col-md-3">
                        <input type="text" id="example-firstname" name="example-firstname" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="example-lastname">Lastname</label>
                    <div class="col-md-3">
                        <input type="text" id="example-lastname" name="example-lastname" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="example-address">Address</label>
                    <div class="col-md-3">
                        <input type="text" id="example-address" name="example-address" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="example-city">City</label>
                    <div class="col-md-3">
                        <input type="text" id="example-city" name="example-city" class="form-control">
                    </div>
                </div>
            </div>
            <!-- END Second Step -->

            <!-- Third Step -->
            <div id="third" class="step">
                <!-- Step Info -->
                <div class="wizard-steps row">
                    <div class="col-md-4 text-center">1. Account <i class="fa fa-check"></i></div>
                    <div class="col-md-4 text-center">2. Personal <i class="fa fa-check"></i></div>
                    <div class="col-md-4 text-center active">3. Extras</div>
                </div>
                <!-- END Step Info -->
                <div class="form-group">
                    <label class="control-label col-md-2" for="example-bio">Bio</label>
                    <div class="col-md-10">
                        <textarea id="example-bio" name="example-bio" rows="6" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="example-newsletter">Newsletter</label>
                    <div class="col-md-10">
                        <div class="checkbox">
                            <label for="example-newsletter">
                                <input type="checkbox" id="example-newsletter" name="example-newsletter"> Sign up
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2"><a href="javascript:void(0)">Terms and Conditions</a></label>
                    <div class="col-md-10">
                        <div class="checkbox">
                            <label for="example-terms">
                                <input type="checkbox" id="example-terms" name="example-terms" value="1"> Accept
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Third Step -->

            <!-- Form Buttons -->
            <div class="form-group form-actions">
                <div class="col-md-10 col-md-offset-2">
                    <input type="reset" class="btn btn-danger" id="back" value="Back">
                    <input type="submit" class="btn btn-success" id="next" value="Next">
                </div>
            </div>
            <!-- END Form Buttons -->
        </div>
        <!-- END Form Content -->
    </form>
    <!-- END Basic Form Wizard -->

    <!-- Advanced Form Wizard -->
    <form id="advanced-wizard" action="page_form_wizard.php" method="post" class="form-horizontal form-box remove-margin">
        <!-- Form Header -->
        <h4 class="form-box-header"><i class="fa fa-magic"></i> Advanced Wizard - Ajax Submit + Field Validation + Custom Animation</h4>

        <!-- Form Content -->
        <div class="form-box-content">
            <!-- First Step -->
            <div id="advanced-first" class="step">
                <!-- Step Info -->
                <div class="wizard-steps row">
                    <div class="col-md-4 text-center active">1. Personal</div>
                    <div class="col-md-4 text-center">2. Account</div>
                    <div class="col-md-4 text-center">3. Extras</div>
                </div>
                <!-- END Step Info -->
                <div class="form-group">
                    <label class="control-label col-md-2" for="example-advanced-firstname">Firstname</label>
                    <div class="col-md-3">
                        <input type="text" id="example-advanced-firstname" name="example-advanced-firstname" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="example-advanced-lastname">Lastname</label>
                    <div class="col-md-3">
                        <input type="text" id="example-advanced-lastname" name="example-advanced-lastname" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="example-advanced-address">Address</label>
                    <div class="col-md-3">
                        <input type="text" id="example-advanced-address" name="example-advanced-address" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="example-advanced-city">City</label>
                    <div class="col-md-3">
                        <input type="text" id="example-advanced-city" name="example-advanced-city" class="form-control">
                    </div>
                </div>
            </div>
            <!-- END First Step -->

            <!-- Second Step -->
            <div id="advanced-second" class="step">
                <!-- Step Info -->
                <div class="wizard-steps row">
                    <div class="col-md-4 text-center">1. Personal <i class="fa fa-check"></i></div>
                    <div class="col-md-4 text-center active">2. Account</div>
                    <div class="col-md-4 text-center">3. Extras</div>
                </div>
                <!-- END Step Info -->
                <div class="form-group">
                    <label class="control-label col-md-2" for="val_username">Username *</label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                            <input type="text" id="val_username" name="val_username" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="val_email">Email *</label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                            <input type="text" id="val_email" name="val_email" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="val_password">Password *</label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
                            <input type="password" id="val_password" name="val_password" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="val_confirm_password">Retype Password *</label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
                            <input type="password" id="val_confirm_password" name="val_confirm_password" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Second Step -->

            <!-- Third Step -->
            <div id="advanced-third" class="step">
                <!-- Step Info -->
                <div class="wizard-steps row">
                    <div class="col-md-4 text-center">1. Personal <i class="fa fa-check"></i></div>
                    <div class="col-md-4 text-center">2. Account <i class="fa fa-check"></i></div>
                    <div class="col-md-4 text-center active">3. Extras</div>
                </div>
                <!-- END Step Info -->
                <div class="form-group">
                    <label class="control-label col-md-2" for="example-advanced-bio">Bio</label>
                    <div class="col-md-10">
                        <textarea id="example-advanced-bio" name="example-advanced-bio" rows="6" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="example-advanced-newsletter">Newsletter</label>
                    <div class="col-md-10">
                        <div class="checkbox">
                            <label for="example-advanced-newsletter">
                                <input type="checkbox" id="example-advanced-newsletter" name="example-advanced-newsletter"> Sign up
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2"><a href="javascript:void(0)">Terms and Conditions</a></label>
                    <div class="col-md-10">
                        <div class="checkbox">
                            <label for="val_terms">
                                <input type="checkbox" id="val_terms" name="val_terms" value="1"> Accept
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Third Step -->

            <!-- Form Buttons -->
            <div class="form-group form-actions">
                <div class="col-md-10 col-md-offset-2">
                    <input type="reset" class="btn btn-danger" id="back2" value="Back">
                    <input type="submit" class="btn btn-success" id="next2" value="Next">
                </div>
            </div>
            <!-- END Form Buttons -->
        </div>
        <!-- END Form Content -->
    </form>
    <!-- END Advanced Form Wizard -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->
<script>
    $(function(){
        /* For advanced usage and examples please check out
         *  Jquery Wizard       -> http://www.thecodemine.org
         *  Jquery Form         -> http://malsup.com/jquery/form/
         *  Jquery Validation   -> https://github.com/jzaefferer/jquery-validation
         */

        /* Initialize Basic Wizard */
        $('#basic-wizard').formwizard({
            focusFirstInput : true,
            disableUIStyles : true
        });

        /* Initialize Advanced Wizard */
        $('#advanced-wizard').formwizard({
            disableUIStyles : true,
            formPluginEnabled: true,
            validationEnabled: true,
            validationOptions: {
                errorClass: 'help-block',
                errorElement: 'span',
                errorPlacement: function(error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function(e){
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function(e){
                    // You can use the following if you would like to highlight with green color the input after successful validation!
                    e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                    e.closest('.help-block').remove();
                    e.closest('.help-inline').remove();
                },
                rules: {
                    val_username: {
                        required: true,
                        minlength: 2
                    },
                    val_password: {
                        required: true,
                        minlength: 5
                    },
                    val_confirm_password: {
                        required: true,
                        minlength: 5,
                        equalTo: '#val_password'
                    },
                    val_email: {
                        required: true,
                        email: true
                    },
                    val_terms: {
                        required: true
                    }
		},
		messages: {
                    val_username: {
                        required: 'Please enter a username',
                        minlength: 'Your username must consist of at least 2 characters'
                    },
                    val_password: {
                        required: 'Please provide a password',
                        minlength: 'Your password must be at least 5 characters long'
                    },
                    val_confirm_password: {
                        required: 'Please provide a password',
                        minlength: 'Your password must be at least 5 characters long',
                        equalTo: 'Please enter the same password as above'
                    },
                    val_email: 'Please enter a valid email address',
                    val_terms: 'Please accept the terms to continue'
		}
            },
            formOptions :{
                success: function(data){
                    // On success status returned
                },
                beforeSubmit: function(data){
                    alert('Form Submitted!');
                },
                dataType: 'json',
                resetForm: true
            },
            inAnimation : {height: 'show'},
            outAnimation: {height: 'hide'}
        });
    });
</script>

<?php include 'inc/bottom.php'; // Close body and html tags ?>