<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="javascript:void(0)">Components</a></li>
        <li class="active"><a href="">Gallery</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Gallery Default -->
    <h3 class="page-header page-header-top">Gallery <small>Default style with links and options on hover</small></h3>

    <!--
    Add the value 'gallery-options' to data-toggle attribute of <ul> and include a div with class 'thumbnails-options'
    Your gallery with hover options is ready :-)
    -->
    <ul class="thumbnails clearfix" data-toggle="gallery-options">
        <?php for($i=0;$i<20;$i++) { ?>
        <li>
            <div class="thumbnails-options">
                <div class="btn-group">
                    <button class="btn btn-sm btn-primary"><i class="fa fa-cloud-download"></i></button>
                    <button class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <a href="javascript:void(0)" class="thumbnail"><img src="img/placeholders/image_light_160x120.png" alt="fakeimg"></a>
        </li>
        <?php } ?>
    </ul>
    <div class="text-center">
        <ul class="pagination remove-margin">
            <li><a href="javascript:void(0)">Prev</a></li>
            <li><a href="javascript:void(0)">1</a></li>
            <li><a href="javascript:void(0)">2</a></li>
            <li><a href="javascript:void(0)">3</a></li>
            <li><a href="javascript:void(0)">Next</a></li>
        </ul>
    </div>
    <!-- END Gallery Default -->

    <!-- Galleries Various Styles -->
    <h3 class="page-header">Galleries <small>Various Styles</small></h3>

    <!-- Rounded Images -->
    <h4>Rounded Images with links <small><code>.img-rounded</code></small></h4>

    <ul class="thumbnails clearfix">
        <?php for($i=0; $i<18; $i++) { ?>
        <li>
            <a href="javascript:void(0)" class="thumbnail">
                <img src="img/placeholders/image_light_120x120.png" alt="fakeimg" class="img-rounded">
            </a>
        </li>
        <?php } ?>
    </ul>
    <!-- END Rounded Images -->

    <!-- Circle Images -->
    <h4>Circle Images with links <small><code>.img-circle</code></small></h4>

    <ul class="thumbnails clearfix">
        <?php for($i=0; $i<18; $i++) { ?>
        <li>
            <a href="javascript:void(0)" class="thumbnail">
                <img src="img/placeholders/image_light_120x120.png" alt="fakeimg" class="img-circle">
            </a>
        </li>
        <?php } ?>
    </ul>
    <!-- END Circle Images -->

    <!-- Borderless Images -->
    <h4>Individual Borderless Images with links <small><code>.thumbnail-borderless</code> on a specific element with <code>.thumbnail</code> class</small></h4>

    <ul class="thumbnails clearfix">
        <li>
            <a href="javascript:void(0)" class="thumbnail">
                <img src="img/placeholders/image_light_160x120.png" alt="fakeimg">
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless">
                <img src="img/placeholders/image_light_160x120.png" alt="fakeimg">
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" class="thumbnail">
                <img src="img/placeholders/image_light_160x120.png" alt="fakeimg">
            </a>
        </li>
    </ul>

    <h4>Borderless Images with links <small><code>.thumbnails-borderless</code> on the ul list for all the thumbnails</small></h4>

    <ul class="thumbnails clearfix thumbnails-borderless">
        <li>
            <a href="javascript:void(0)" class="thumbnail">
                <img src="img/placeholders/image_light_160x120.png" alt="fakeimg">
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless">
                <img src="img/placeholders/image_light_160x120.png" alt="fakeimg">
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" class="thumbnail">
                <img src="img/placeholders/image_light_160x120.png" alt="fakeimg">
            </a>
        </li>
    </ul>

    <h4>Just Images <small>No links</small></h4>

    <ul class="thumbnails clearfix">
        <li>
            <img src="img/placeholders/image_light_160x120.png" alt="fakeimg">
        </li>
        <li>
            <img src="img/placeholders/image_light_160x120.png" alt="fakeimg">
        </li>
        <li>
            <img src="img/placeholders/image_light_160x120.png" alt="fakeimg">
        </li>
    </ul>
    <!-- END Borderless Images -->

    <!-- END Galleries Various Styles -->

    <!-- Custom Galleries -->
    <h3 class="page-header">Custom Galleries</h3>

    <ul class="thumbnails clearfix" data-toggle="gallery-options">
        <li>
            <div class="thumbnails-options">
                <div class="btn-group">
                    <button class="btn btn-small btn-danger"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <a href="javascript:void(0)" class="thumbnail">
                <img src="img/placeholders/image_light_360x270.png" alt="fakeimg">
            </a>
        </li>
        <li>
            <div class="thumbnails-options">
                <div class="btn-group">
                    <button class="btn btn-small btn-danger"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <a href="javascript:void(0)" class="thumbnail">
                <img src="img/placeholders/image_light_160x270.png" alt="fakeimg">
            </a>
        </li>
        <li>
            <div class="thumbnails-options">
                <div class="btn-group">
                    <button class="btn btn-small btn-inverse"><i class="fa fa-cloud-upload"></i></button>
                    <button class="btn btn-small btn-primary"><i class="fa fa-cloud-download"></i></button>
                </div>
            </div>
            <div class="thumbnail">
                <img src="img/placeholders/image_light_360x200.png" alt="fakeimg">
                <h4>Image Title</h4>
                <p>A description of the image. Add any html markup!</p>
            </div>
        </li>
        <li>
            <div class="thumbnails-options">
                <div class="btn-group">
                    <button class="btn btn-small btn-success"><i class="fa fa-pencil"></i></button>
                </div>
            </div>
            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless">
                <img src="img/placeholders/image_light_170x120.png" alt="fakeimg" class="img-rounded">
            </a>
        </li>
        <li>
            <div class="thumbnails-options">
                <div class="btn-group">
                    <button class="btn btn-small btn-success"><i class="fa fa-pencil"></i></button>
                </div>
            </div>
            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless">
                <img src="img/placeholders/image_light_170x120.png" alt="fakeimg" class="img-rounded">
            </a>
        </li>
    </ul>
    <!-- END Custom Galleries -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>