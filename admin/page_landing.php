<?php include 'inc/config.php'; // Configuration php file ?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title><?php echo $template['title'] ?></title>

        <meta name="description" content="<?php echo $template['description'] ?>">
        <meta name="author" content="<?php echo $template['author'] ?>">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- Related styles of various javascript plugins -->
        <link rel="stylesheet" href="css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="js/vendor/modernizr-respond.min.js"></script>
    </head>
    <body>
        <!-- Landing Container -->
        <div class="landing-container">
            <!-- Header -->
            <header class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-con">
                    <!-- Nav Left -->
                    <ul class="navbar-nav-custom nav-left">
                        <li>
                            <a href="index.php"><i class="fa fa-arrow-left"></i> Back</a>
                        </li>
                    </ul>
                    <!-- END Nav Left -->

                    <!-- Logo -->
                    <a href="page_landing.php" class="navbar-brand">
                        <img src="img/template/logo.png" alt="logo">
                    </a>
                    <!-- END Logo -->
                </div>
            </header>
            <!-- END Header -->

            <!-- Section Promo Image -->
            <div class="landing-section-outer">
                <div class="landing-section text-center">
                    <img src="img/placeholders/landing_page_promo.png" alt="image" class="img-responsive">
                </div>
            </div>
            <!-- END Section Promo Image -->

            <!-- Actions -->
            <div class="landing-section-outer">
                <div class="landing-section text-center">
                    <a href="index.php" class="btn btn-lg btn-info push"><i class="fa fa-rocket"></i> Live Demo</a>
                    <a href="https://1.envato.market/7jd" class="btn btn-lg btn-success push"><i class="fa fa-shopping-cart"></i> Buy Now!</a>
                </div>
            </div>
            <!-- END Actions -->

            <!-- Section Features -->
            <div class="landing-section-outer grey">
                <div class="landing-section">
                    <!-- Features 1st Row -->
                    <div class="row">
                        <div class="col-md-4">
                            <h4><i class="fa fa-rocket"></i> Feature #1</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        </div>
                        <div class="col-md-4">
                            <h4><i class="fa fa-rocket"></i> Feature #2</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        </div>
                        <div class="col-md-4">
                            <h4><i class="fa fa-rocket"></i> Feature #3</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        </div>
                    </div>
                    <!-- END Features 1st Row -->

                    <!-- Features 2nd Row -->
                    <div class="row">
                        <div class="col-md-4">
                            <h4><i class="fa fa-rocket"></i> Feature #4</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        </div>
                        <div class="col-md-4">
                            <h4><i class="fa fa-rocket"></i> Feature #5</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        </div>
                        <div class="col-md-4">
                            <h4><i class="fa fa-rocket"></i> Feature #6</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        </div>
                    </div>
                    <!-- END Features 2nd Row -->
                </div>
            </div>
            <!-- END Section Features -->

            <!-- Special Feature #1 -->
            <div class="landing-section-outer">
                <div class="landing-section">
                    <div class="row">
                        <div class="col-md-8">
                            <h4><i class="fa fa-rocket"></i> Special Feature #1</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="img/placeholders/image_light_360x270.png" alt="promo" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Special Feature #1 -->

            <!-- Special Feature #2 -->
            <div class="landing-section-outer">
                <div class="landing-section">
                    <div class="row">
                        <div class="col-md-8">
                            <h4><i class="fa fa-rocket"></i> Special Feature #2</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="img/placeholders/image_light_360x270.png" alt="promo" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Special Feature #2 -->

            <!-- Special Feature #3 -->
            <div class="landing-section-outer">
                <div class="landing-section">
                    <div class="row">
                        <div class="col-md-8">
                            <h4><i class="fa fa-rocket"></i> Special Feature #3</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="img/placeholders/image_light_360x270.png" alt="promo" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Special Feature #3 -->

            <!-- Actions -->
            <div class="landing-section-outer">
                <div class="landing-section text-center">
                    <a href="index.php" class="btn btn-lg btn-info push"><i class="fa fa-rocket"></i> Live Demo</a>
                    <a href="https://1.envato.market/7jd" class="btn btn-lg btn-success push"><i class="fa fa-shopping-cart"></i> Buy Now!</a>
                </div>
            </div>
            <!-- END Actions -->

            <!-- Footer Meta Data -->
            <div class="landing-section-outer dark">
                <div class="landing-section">
                    <div class="row">
                        <div class="col-md-3">
                            <h4>Link Category</h4>
                            <ul class="fa-ul">
                                <li><i class="fa fa-globe fa-li"></i> <a href="javascript:void(0)">Link goes here</a></li>
                                <li><i class="fa fa-globe fa-li"></i> <a href="javascript:void(0)">Link goes here</a></li>
                                <li><i class="fa fa-globe fa-li"></i> <a href="javascript:void(0)">Link goes here</a></li>
                                <li><i class="fa fa-globe fa-li"></i> <a href="javascript:void(0)">Link goes here</a></li>
                                <li><i class="fa fa-globe fa-li"></i> <a href="javascript:void(0)">Link goes here</a></li>
                                <li><i class="fa fa-globe fa-li"></i> <a href="javascript:void(0)">Link goes here</a></li>
                                <li><i class="fa fa-globe fa-li"></i> <a href="javascript:void(0)">Link goes here</a></li>
                                <li><i class="fa fa-globe fa-li"></i> <a href="javascript:void(0)">Link goes here</a></li>
                                <li><i class="fa fa-globe fa-li"></i> <a href="javascript:void(0)">Link goes here</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h4>About</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus.</p>
                        </div>
                        <div class="col-md-6">
                            <div id="landing-map" class="gmap-con"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Footer Meta Data -->
        </div>
        <!-- END Landing Container -->

        <!-- Scroll to top link, check main.js - scrollToTop() -->
        <a href="javascript:void(0)" id="to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js -->
        <script src="js/vendor/bootstrap.min.js"></script>

        <!-- Google Maps API + Gmaps Plugin - Remove 'http:' if you have SSL -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/helpers/gmaps.min.js"></script>

        <!-- Jquery plugins and custom javascript code -->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Javascript code only for this page -->
        <script>
            $(function(){
                // Set height to the google maps container
                $('#landing-map').css('height', '250px');

                // Initialize landing map
                new GMaps({
                    div: '#landing-map',
                    lat: 0,
                    lng: 0,
                    zoom: 1,
                    scrollwheel: false
                }).setMapTypeId(google.maps.MapTypeId.SATELLITE);
            });
        </script>
    </body>
</html>