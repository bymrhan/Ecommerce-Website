<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="javascript:void(0)">Components</a></li>
        <li class="active"><a href="">CSS3 Animations</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Animations Content -->
    <h3 class="page-header page-header-top"><i class="fa fa-certificate animation-pulse"></i> CSS3 Animations <small>Simply by adding a class</small></h3>

    <p>You can easily animate most of the HTML elements just by adding a class to them! Click the following buttons to check live all the available animations on the image! (The animations will work on modern browsers!)</p>
    <div class="text-center">
        <h4 class="sub-header">Animation class: <small><code id="animation-class">None</code></small></h4>
        <div class="block-section">
            <img src="img/placeholders/image_dark_160x120.png" id="animation-element" alt="image">
        </div>
        <h4 class="sub-header">Entrances <small>15 animations</small></h4>
        <p class="animation-buttons">
            <a href="javascript:void(0)" class="btn btn-sm btn-primary push" data-animation="animation-fadeInQuick">FadeInQuick - New</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-primary push" data-animation="animation-fadeInQuickInv">FadeInQuickInv - New</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-primary push" data-animation="animation-fadeInLeft">FadeInLeft - New</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-primary push" data-animation="animation-fadeInRight">FadeInRight - New</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-primary push" data-animation="animation-fadeIn360">FadeIn360 - New</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-primary push" data-animation="animation-slideDown">SlideDown</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-primary push" data-animation="animation-slideUp">SlideUp</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-primary push" data-animation="animation-slideLeft">SlideLeft</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-primary push" data-animation="animation-slideRight">SlideRight</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-primary push" data-animation="animation-slideExpandUp">SlideExpandUp</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-primary push" data-animation="animation-expandUp">ExpandUp</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-primary push" data-animation="animation-fadeIn">FadeIn</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-primary push" data-animation="animation-expandOpen">ExpandOpen</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-primary push" data-animation="animation-bigEntrance">BigEntrance</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-primary push" data-animation="animation-hatch">Hatch</a>
        </p>
        <h4 class="sub-header">Misc <small>8 animations</small></h4>
        <p class="animation-buttons">
            <a href="javascript:void(0)" class="btn btn-sm btn-primary push" data-animation="animation-bounce">Bounce</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-primary push" data-animation="animation-pulse">Pulse</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-primary push" data-animation="animation-floating">Floating</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-primary push" data-animation="animation-tossing">Tossing</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-primary push" data-animation="animation-pullUp">PullUp</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-primary push" data-animation="animation-pullDown">PullDown</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-primary push" data-animation="animation-stretchLeft">StretchLeft</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-primary push" data-animation="animation-stretchRight">StretchRight</a>
        </p>
    </div>
    <!-- End Animations Content -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->
<script>
    $(function() {
        /* Add/Remove Animation */
        var animElem = $('#animation-element');
        var animSpan = $('#animation-class');
        var animClass = '';

        $('.animation-buttons .btn').click(function() {
            animClass = $(this).data('animation');

            animElem.removeClass().addClass(animClass);
            animSpan.text(animClass);
        });
    });
</script>

<?php include 'inc/bottom.php'; // Close body and html tags ?>