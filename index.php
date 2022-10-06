<?php 

try {
     $db = new PDO("mysql:host=localhost;dbname=odev_db", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}


 $query = $db->query("SELECT sum(fiyat*adet) as toplam, SUM(adet) as adetsayi FROM sepet INNER JOIN kitap ON kitap.id = sepet.id", PDO::FETCH_ASSOC); 
	 if ( $query->rowCount() ){
     foreach( $query as $row ){ $toplamsayi=$row['toplam']; } } 
?>
<!DOCTYPE html>

<html lang="tr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kitapİste - Kitap Satış Sitesi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/plugins.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
	
	 <style>
        div2{
            width: 250px;
            height: 150px;
            background-color:#00b894;
        }
		.buttons2 {
		background-color: #62ab00; /* Green */
		border-radius: 15px;
		border: none;
		color: white;
		padding: 4px 30px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		cursor: pointer;
		-webkit-transition-duration: 0.4s; /* Safari */
		transition-duration: 0.4s;
		}

		.buttons2:hover {
		box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}
		
		.btnyellow {
			margin-top: 245px;
			margin-left: 261px;
			background: #fff;
			color: #282828;
			background: #eccd00;
			color: #282828 !important;
			padding: 0 29px;
			line-height: 40px;
}
	.btn--yellow{
		margin-top: 245px;
			margin-left: 261px;
		}
		
		.menuitem {
	border-bottom: 4px solid #d9d9d9;
    padding: 10px 121px 23px 15px;
    color: #555555;
    line-height: 26px;
    text-transform: capitalize;
    font-weight: 400;
    display: block;
	color: #333;
    text-decoration: none;
    font-size: 14px;
	position: relative;
		}
		.cross-btn2 {
	font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    margin-left: 191px;
    margin-top: 173px;
		}
    </style>
</head>

<body>
    <div class="site-wrapper" id="top">
        <div class="site-header header-4 mb--20 d-none d-lg-block">
            <div class="header-middle pt--10 pb--10">
                <div class="container">				
                    <div class="row align-items-center">				
                        <div class="col-lg-3">
						
                            <a href="index.php" class="site-brand">						
                                <img src="image/logo1.png" alt=""></br>
								&nbsp;&nbsp;&nbsp Kitap oku geleceği doku.
                            </a>
                        </div>
						
                        <div class="col-lg-5">
                            <div class="header-search-block">
							<form method="post" action="arama.php">
                                <input  type="text" name="search" placeholder="Kitap veya yazar ara">
                                <button class="ion-ios-search-strong" name="Submit" >Ara</button>
								</form>
                            </div>
                        </div>
						
                        <div class="col-lg-4">
                            <div class="main-navigation flex-lg-right">
							<input class="buttons buttons2" type="button" onclick="window.location.href='admin/giris.php';" value="Giriş" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="cart-widget">
                                    <div class="">
                                        
                                    </div>
                                    <div class="cart-block">
                                        <div class="cart-total">
                                            <span class="text-number">
                                                <?php echo $adetsayi=$row['adetsayi']; ?>
                                            </span>
                                            <span class="text-item">
                                                Sepetim
                                            </span>
                                            <span class="price">
                                                ₺<?php echo $toplamsayi=$row['toplam']; ?>
                                                <i class="fas fa-chevron-down"></i>
                                            </span>
											
                                        </div>
                                        <div class="cart-dropdown-block">
											<?php  
							    $query = $db->query("SELECT *
FROM sepet
INNER JOIN kitap ON kitap.id = sepet.id", PDO::FETCH_ASSOC);
                                if ( $query->rowCount() ){
                                foreach( $query as $row ){                               
                                ?>
                                            <div class=" single-cart-block ">
                                                <div class="cart-product">
                                                    <a href="product-details.php?id=<?php echo $row['id']; ?>" class="image">
                                                        <img src="<?php echo $row['kapak_foto']; ?>" alt="">
                                                    </a>
                                                    <div class="content">
                                                        <h6 class="title"><a href="product-details.php?id<?php echo $row['id']; ?>"><?php echo $row['kitap_adi']; ?></a>
                                                        </h6>
                                                        <p class="price"><span class="qty"><?php echo $row['adet']; ?> × </span><?php echo $row['fiyat']; ?></p>
                                                        <a href="sil.php?pid=<?php echo $row['sepet_id']; ?>" data-toggle="tooltip" title="Delete" class="cross-btn"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </div>
                                            </div>
											<?php }}
													?>	
                                            <div class=" single-cart-block ">
                                                <div class="btn-block">
                                                    <a href="cart.php" class="btn">Sepetim <i
                                                            class="fas fa-chevron-right"></i></a>
                                                    <a href="checkout.html" class="btn btn--primary">Ödeme yap <i
                                                            class="fas fa-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
										
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <nav class="category-nav  primary-nav show">
                                <div>
                                    <a href="javascript:void(0)" class="category-trigger"><i
                                            class="fa fa-bars"></i>Kategoriler</a>
                                    <ul class="category-menu">
                                        <li class="menuitem"><a  href="kategori.php?kid=Roman"> Roman</a>
                                           
                                        </li>
                                        
										<li class="menuitem"><a href="kategori.php?kid=Çizgi Roman">Çizgi Roman</a>
                                          
                                        </li>
										<li class="menuitem"><a href="kategori.php?kid=Edebiyat">Edebiyat</a>
                                            
                                        </li>
										<li class="menuitem"><a href="kategori.php?kid=Tarih">Tarih</a>
                                            
                                        </li>
										<li class="menuitem"><a href="kategori.php?kid=Bilim">Bilim</a>
                                          
                                        </li>
                                        <li class="menuitem"><a href="kategori.php?kid=Felsefe">Felsefe</a>
                                           
                                        </li>
                                        <li class="menuitem"><a href="#">En Çok Satanlar</a>
                                            
											<div class="card" style="width: 18rem;">
  
                                      
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="col-lg-3">
                            <div class="header-phone ">
                                <div class="icon">
                                    <i class="fas fa-headphones-alt"></i>
                                </div>
                                <div class="text">
                                    <p>İletişim</p>
                                    <p class="font-weight-bold number">+01-202-555-0181</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="main-navigation flex-lg-right">
                                <ul class="main-menu menu-right li-last-0">
                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0)">Ana sayfa <i
                                                class=""></i></a>
                                        
                                    </li>
                                    <!-- Shop -->
                                    <li class="menu-item has-children mega-menu">
                                        <a href="javascript:void(0)">shop <i
                                                class="fas fa-chevron-down dropdown-arrow"></i></a>
                                        <ul class="sub-menu four-column">
                                            <li class="cus-col-25">
                                                <h3 class="menu-title"><a href="javascript:void(0)">Shop Grid </a></h3>
                                                <ul class="mega-single-block">
                                                    <li><a href="shop-grid.html">Fullwidth</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">left Sidebar</a></li>
                                                    <li><a href="shop-grid-right-sidebar.html">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="cus-col-25">
                                                <h3 class="menu-title"> <a href="javascript:void(0)">Shop List</a></h3>
                                                <ul class="mega-single-block">
                                                    <li><a href="shop-list.html">Fullwidth</a></li>
                                                    <li><a href="shop-list-left-sidebar.html">left Sidebar</a></li>
                                                    <li><a href="shop-list-right-sidebar.html">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="cus-col-25">
                                                <h3 class="menu-title"> <a href="javascript:void(0)">Product Details
                                                        1</a></h3>
                                                <ul class="mega-single-block">
                                                    <li><a href="product-details.html">Product Details Page</a></li>
                                                    <li><a href="product-details-affiliate.html">Product Details
                                                            Affiliate</a></li>
                                                    <li><a href="product-details-group.html">Product Details Group</a>
                                                    </li>
                                                    <li><a href="product-details-variable.html">Product Details
                                                            Variables</a></li>
                                                </ul>
                                            </li>
                                            <li class="cus-col-25">
                                                <h3 class="menu-title"><a href="javascript:void(0)">Product Details
                                                        2</a></h3>
                                                <ul class="mega-single-block">
                                                    <li><a href="product-details-left-thumbnail.html">left Thumbnail</a>
                                                    </li>
                                                    <li><a href="product-details-right-thumbnail.html">Right
                                                            Thumbnail</a></li>
                                                    <li><a href="product-details-left-gallery.html">Left Gallery</a>
                                                    </li>
                                                    <li><a href="product-details-right-gallery.html">Right Gallery</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- Pages -->
                                    <li class="menu-item has-children">
                                        <a href="kampanyalar.php">Kampanyalar</a>
                                       
                                    </li>
                                    <!-- Blog -->
                                    
                                    <li class="menu-item">
                                        <a href="contact.html">İletişim</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-mobile-menu">
            <header class="mobile-header d-block d-lg-none pt--10 pb-md--10">
                <div class="container">
                    <div class="row align-items-sm-end align-items-center">
                        <div class="col-md-4 col-7">
                            <a href="index.html" class="site-brand">
                                <img src="image/logo.png" alt="">
                            </a>
                        </div>
                        <div class="col-md-5 order-3 order-md-2">
                            <nav class="category-nav   ">
                                <div>
                                    <a href="javascript:void(0)" class="category-trigger"><i
                                            class="fa fa-bars"></i>Browse
                                        categories</a>
                                    <ul class="category-menu">
                                        <li class="cat-item has-children">
                                            <a href="#">Arts & Photography</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Bags & Cases</a></li>
                                                <li><a href="#">Binoculars & Scopes</a></li>
                                                <li><a href="#">Digital Cameras</a></li>
                                                <li><a href="#">Film Photography</a></li>
                                                <li><a href="#">Lighting & Studio</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children mega-menu"><a href="#">Biographies</a>
                                            <ul class="sub-menu">
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Business & Money</a>
                                            <ul class="sub-menu">
                                                <li><a href="">Brake Tools</a></li>
                                                <li><a href="">Driveshafts</a></li>
                                                <li><a href="">Emergency Brake</a></li>
                                                <li><a href="">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Calendars</a>
                                            <ul class="sub-menu">
                                                <li><a href="">Brake Tools</a></li>
                                                <li><a href="">Driveshafts</a></li>
                                                <li><a href="">Emergency Brake</a></li>
                                                <li><a href="">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Children's Books</a>
                                            <ul class="sub-menu">
                                                <li><a href="">Brake Tools</a></li>
                                                <li><a href="">Driveshafts</a></li>
                                                <li><a href="">Emergency Brake</a></li>
                                                <li><a href="">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Comics</a>
                                            <ul class="sub-menu">
                                                <li><a href="">Brake Tools</a></li>
                                                <li><a href="">Driveshafts</a></li>
                                                <li><a href="">Emergency Brake</a></li>
                                                <li><a href="">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item"><a href="#">Perfomance Filters</a></li>
                                        <li class="cat-item has-children"><a href="#">Cookbooks</a>
                                            <ul class="sub-menu">
                                                <li><a href="">Brake Tools</a></li>
                                                <li><a href="">Driveshafts</a></li>
                                                <li><a href="">Emergency Brake</a></li>
                                                <li><a href="">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item "><a href="#">Accessories</a></li>
                                        <li class="cat-item "><a href="#">Education</a></li>
                                        <li class="cat-item hidden-menu-item"><a href="#">Indoor Living</a></li>
                                        <li class="cat-item"><a href="#" class="js-expand-hidden-menu">More
                                                Categories</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="col-md-3 col-5  order-md-3 text-right">
                            <div class="mobile-header-btns header-top-widget">
                                <ul class="header-links">
                                    <li class="sin-link">
                                        <a href="cart.php" class="cart-link link-icon"><i class="ion-bag"></i></a>
                                    </li>
                                    <li class="sin-link">
                                        <a href="javascript:" class="link-icon hamburgur-icon off-canvas-btn"><i
                                                class="ion-navicon"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!--Off Canvas Navigation Start-->
            <aside class="off-canvas-wrapper">
                <div class="btn-close-off-canvas">
                    <i class="ion-android-close"></i>
                </div>
                <div class="off-canvas-inner">
                    <!-- search box start -->
                    <div class="search-box offcanvas">
                        <form>
                            <input type="text" placeholder="Search Here">
                            <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
                        </form>
                    </div>
                    <!-- search box end -->
                    
                   
                    
                </div>
            </aside>
            <!--Off Canvas Navigation End-->
        </div>
        <div class="sticky-init fixed-header common-sticky">
            <div class="container d-none d-lg-block">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <a href="index.html" class="site-brand">
                           <img src="image/logo1.png" alt=""></br>
								&nbsp;&nbsp;&nbsp Kitap oku geleceği doku.
                        </a>
                    </div>
                    <div class="col-lg-8">
                        <div class="main-navigation flex-lg-right">
                            <ul class="main-menu menu-right ">
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0)">Ana Sayfa <i
                                            ></i></a>
                                   
                                </li>
                                <!-- Shop -->
                                <li class="menu-item has-children mega-menu">
                                    <a href="javascript:void(0)">shop <i
                                            class="fas fa-chevron-down dropdown-arrow"></i></a>
                                    <ul class="sub-menu four-column">
                                        <li class="cus-col-25">
                                            <h3 class="menu-title"><a href="javascript:void(0)">Shop Grid </a></h3>
                                            <ul class="mega-single-block">
                                                <li><a href="shop-grid.html">Fullwidth</a></li>
                                                <li><a href="shop-grid-left-sidebar.html">left Sidebar</a></li>
                                                <li><a href="shop-grid-right-sidebar.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="cus-col-25">
                                            <h3 class="menu-title"> <a href="javascript:void(0)">Shop List</a></h3>
                                            <ul class="mega-single-block">
                                                <li><a href="shop-list.html">Fullwidth</a></li>
                                                <li><a href="shop-list-left-sidebar.html">left Sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="cus-col-25">
                                            <h3 class="menu-title"> <a href="javascript:void(0)">Product Details 1</a>
                                            </h3>
                                            <ul class="mega-single-block">
                                                <li><a href="product-details.html">Product Details Page</a></li>
                                                <li><a href="product-details-affiliate.html">Product Details
                                                        Affiliate</a></li>
                                                <li><a href="product-details-group.html">Product Details Group</a></li>
                                                <li><a href="product-details-variable.html">Product Details
                                                        Variables</a></li>
                                            </ul>
                                        </li>
                                        <li class="cus-col-25">
                                            <h3 class="menu-title"><a href="javascript:void(0)">Product Details 2</a>
                                            </h3>
                                            <ul class="mega-single-block">
                                                <li><a href="product-details-left-thumbnail.html">left Thumbnail</a>
                                                </li>
                                                <li><a href="product-details-right-thumbnail.html">Right Thumbnail</a>
                                                </li>
                                                <li><a href="product-details-left-gallery.html">Left Gallery</a></li>
                                                <li><a href="product-details-right-gallery.html">Right Gallery</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Pages -->
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0)">Pages <i
                                            class="fas fa-chevron-down dropdown-arrow"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="cart.php">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="login-register.html">Login Register</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="order-complete.html">Order Complete</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="contact-2.html">contact 02</a></li>
                                    </ul>
                                </li>
                                <!-- Blog -->
                                <li class="menu-item has-children mega-menu">
                                    <a href="javascript:void(0)">Blog <i
                                            class="fas fa-chevron-down dropdown-arrow"></i></a>
                                    <ul class="sub-menu three-column">
                                        <li class="cus-col-33">
                                            <h3 class="menu-title"><a href="javascript:void(0)">Blog Grid</a></h3>
                                            <ul class="mega-single-block">
                                                <li><a href="blog.html">Full Widh (Default)</a></li>
                                                <li><a href="blog-left-sidebar.html">left Sidebar</a></li>
                                                <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="cus-col-33">
                                            <h3 class="menu-title"><a href="javascript:void(0)">Blog List </a></h3>
                                            <ul class="mega-single-block">
                                                <!-- <li><a href="blog-list.html">Full Widh (Default)</a></li> -->
                                                <li><a href="blog-list-left-sidebar.html">left Sidebar</a></li>
                                                <li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="cus-col-33">
                                            <h3 class="menu-title"><a href="javascript:void(0)">Blog Details</a></h3>
                                            <ul class="mega-single-block">
                                                <li><a href="blog-details.html">Image Format (Default)</a></li>
                                                <li><a href="blog-details-gallery.html">Gallery Format</a></li>
                                                <li><a href="blog-details-audio.html">Audio Format</a></li>
                                                <li><a href="blog-details-video.html">Video Format</a></li>
                                                <li><a href="blog-details-left-sidebar.html">left Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="contact.html">İletişim</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=================================
        Hero Area
    ===================================== -->
        <section class="hero-area hero-slider-4 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 offset-lg-3">
                        <div class="sb-slick-slider" data-slick-setting='{
                                                                    "autoplay": true,
                                                                    "autoplaySpeed": 4000,
                                                                    "slidesToShow": 1,
                                                                    "dots":true
                                                                    }'>
                            <div class="single-slide bg-image bg-overlay--white"
                                data-bg="image/bg-images/home1.jpg">
                                <div class="home-content text-left pl--30">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <span class="title-small">Yeni yıla merhaba!</span>                                           
                                            <p>Yılın en güzel romanları
                                                </p>
                                            <a href="shop-grid.html" class="btn btn-outlined--pink">
                                                Fırsatı Kaçırma
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide bg-image bg-overlay--dark"
                                data-bg="image/bg-images/home21.jpg">
                                <div class="home-content text-center">
                                    <div class="row justify-content-end">
                                        <div class="col-lg-8">
                                          
										  <a href="http://localhost/pustok/product-details.php?id=26" class="btn btn--yellow">
											İncele                                              
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
        Home Features Section
    ===================================== -->
        <section class="mb--30">
            <h2 class="sr-only">Feature Section</h2>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <div class="text">
                                <h5>Ücretsiz Kargo</h5>
                                <p> 100₺ Üstü</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-redo-alt"></i>
                            </div>
                            <div class="text">
                                <h5>Para iade garantisi</h5>
                                <p>%100 paranız iade.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-piggy-bank"></i>
                            </div>
                            <div class="text">
                                <h5>Kapıda ödeme</h5>
                                <p>Güvenli ödeme</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-life-ring"></i>
                            </div>
                            <div class="text">
                                <h5>Yardım desteği</h5>
                                <p>İletişim : 542 542 52 52</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
        Home Category Gallery
    ===================================== -->
      
        <!--=================================
        Home Two Column Section
    ===================================== -->
        <section class="section-margin">
            <h1 class="sr-only">Promotion Section</h1>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="home-left-side text-center text-lg-left">
                            <div class="single-block">
                                <h3 class="home-sidebar-title">
                                    En Çok Satanlar
                                </h3>
                                <div class="product-slider product-list-slider multiple-row sb-slick-slider home-4-left-sidebar"
                                    data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow":1,
                                            "rows":4,
                                            "dots":true
                                        }' data-slick-responsive='[
                                            {"breakpoint":1200, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":992, "settings": {"slidesToShow": 2, "rows":2} },
                                            {"breakpoint":768, "settings": {"slidesToShow": 2, "rows":2} },
                                            {"breakpoint":575, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":490, "settings": {"slidesToShow": 1} }
                                        ]'>
										<?php  
							    $query = $db->query("SELECT * FROM kitap ORDER BY RAND() LIMIT 8", PDO::FETCH_ASSOC);
                                if ( $query->rowCount() ){
                                foreach( $query as $row ){                               
                                ?>
                                               <div class="single-slide">
                                        <div class="product-card card-style-list">
                                            <div class="card-image">
											<a href="product-details.php?id=<?php echo $row['id']; ?>" class="hover-image">
                                                <img src="<?php echo $row['kapak_foto']; ?>" alt="">
                                            </div>
                                            <div class="product-card--body">
                                                <div class="product-header">
                                                    <a href="" class="author"><?php echo $row['yazar']; ?></a>
                                                   <h3><a href="product-details.html?id=<?php echo $row['id']; ?>"><?php echo substr($row['kitap_adi'],0,100); ?></a></h3>
												   <a href="" class="author">Yıl : <?php echo $row['yili']; ?></a>
                                                </div>
                                                <div class="price-block">
                                                    <span class="price"><?php echo $row['fiyat']; ?>TL</span>
                                                    <del class="price-old">£51.20</del>
                                                    <span class="price-discount">20%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                <?php }}
													?>	
                                   
                                
                              
                                    
                                 
                               
                                   
                                  
                                    
                                  
                                  
                                    
                                </div>
                            </div>
                           
                            <div class="single-block text-center">
                                <h3 class="home-sidebar-title style-2">
                                    Özel teklif
                                </h3>
                                <div class="product-slider countdown-single with-countdown sb-slick-slider product-border-reset"
                                    data-slick-setting='{
                                                "autoplay": true,
                                                "autoplaySpeed": 8000,
                                                "slidesToShow": 1,
                                                "dots":true
                                            }' data-slick-responsive='[
                                            {"breakpoint":1200, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":992, "settings": {"slidesToShow": 2} },
                                            {"breakpoint":768, "settings": {"slidesToShow": 2} },
                                            {"breakpoint":575, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":490, "settings": {"slidesToShow": 1} }
                                        ]'>
                                    <div class="single-slide">
                                        <div class="product-card">
                                            <div class="product-header">
                                                <a href="" class="author">
                                                    Ypple
                                                </a>
                                                    <h3><a href="product-details.html">BOOK: Do You Really Need It? This
                                                            Will Help You</a></h3>
                                            </div>
                                            <div class="product-card--body">
                                                <div class="card-image">
                                                    <img src="image/products/product-2.jpg" alt="">
                                                    <div class="hover-contents">
                                                        <a href="product-details.html" class="hover-image">
                                                            <img src="image/products/product-1.jpg" alt="">
                                                        </a>
                                                        <div class="hover-btns">
                                                            <a href="cart.php" class="single-btn">
                                                                <i class="fas fa-shopping-basket"></i>
                                                            </a>
                                                            <a href="wishlist.html" class="single-btn">
                                                                <i class="fas fa-heart"></i>
                                                            </a>
                                                            <a href="compare.html" class="single-btn">
                                                                <i class="fas fa-random"></i>
                                                            </a>
                                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                                class="single-btn">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price-block">
                                                    <span class="price">£51.20</span>
                                                    <del class="price-old">£51.20</del>
                                                    <span class="price-discount">20%</span>
                                                </div>
                                                <div class="count-down-block">
                                                    <div class="product-countdown" data-countdown="01/05/2020"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                   
                                    
                                    
                                    <div class="single-slide">
                                        <div class="product-card">
                                            <div class="product-header">
                                                <a href="" class="author">
                                                    Tpple
                                                </a>
                                                    <h3><a href="product-details.html">Turn Your BOOK Into A High
                                                            Performing Machine</a></h3>
                                            </div>
                                            <div class="product-card--body">
                                                <div class="card-image">
                                                    <img src="image/products/product-8.jpg" alt="">
                                                    <div class="hover-contents">
                                                        <a href="product-details.html" class="hover-image">
                                                            <img src="image/products/product-7.jpg" alt="">
                                                        </a>
                                                        <div class="hover-btns">
                                                            <a href="cart.php" class="single-btn">
                                                                <i class="fas fa-shopping-basket"></i>
                                                            </a>
                                                            <a href="wishlist.html" class="single-btn">
                                                                <i class="fas fa-heart"></i>
                                                            </a>
                                                            <a href="compare.html" class="single-btn">
                                                                <i class="fas fa-random"></i>
                                                            </a>
                                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                                class="single-btn">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price-block">
                                                    <span class="price">£51.20</span>
                                                    <del class="price-old">£51.20</del>
                                                    <span class="price-discount">20%</span>
                                                </div>
                                                <div class="count-down-block">
                                                    <div class="product-countdown" data-countdown="01/01/2022"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-block">
                                <h3 class="home-sidebar-title">
                                    MÜŞTERİ YORUMLARI
                                </h3>
                                <div class="sb-slick-slider testimonial-slider slider-one-column" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow":1,
                "dots":true
            }' data-slick-responsive='[
                {"breakpoint":1200, "settings": {"slidesToShow": 1} },
                {"breakpoint":992, "settings": {"slidesToShow": 2} },
                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                {"breakpoint":575, "settings": {"slidesToShow": 1} },
                {"breakpoint":490, "settings": {"slidesToShow": 1} }
            ]'>
                                    <div class="single-slide">
                                        <div class="testimonial-card">
                                            <div class="testimonial-image">
                                                <img src="image/others/client-1.png" alt="">
                                            </div>
                                            <div class="testimonial-body">
                                                <article>
                                                    <h2 class="sr-only">Testimonial Article</h2>
                                                    <p>version This is Photoshops of Lorem Ipsum. Proin gravida nibh vel
                                                        velit.Lorem ipsum dolor
                                                        sit amet, consectetur
                                                        adipiscing elit. In molestie augue magna. Pell..</p>
                                                    <span class="d-block client-name">Rebecka Filson</span>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="testimonial-card">
                                            <div class="testimonial-image">
                                                <img src="image/others/client-2.png" alt="">
                                            </div>
                                            <div class="testimonial-body">
                                                <article>
                                                    <h2 class="sr-only">Testimonial Article</h2>
                                                    <p>In molestie augue magna.This is Photoshops version of Lorem
                                                        Ipsum. Proin gravida nibh vel
                                                        velit.Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Pell..</p>
                                                    <span class="d-block client-name">Rebecka Filson</span>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="testimonial-card">
                                            <div class="testimonial-image">
                                                <img src="image/others/client-3.png" alt="">
                                            </div>
                                            <div class="testimonial-body">
                                                <article>
                                                    <h2 class="sr-only">Testimonial Article</h2>
                                                    <p>Lorem Ipsum This is Photoshops version of . Proin gravida nibh
                                                        vel velit.Lorem ipsum
                                                        dolor sit amet, consectetur
                                                        adipiscing elit. In molestie augue magna. Pell..</p>
                                                    <span class="d-block client-name">Rebecka Filson</span>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="testimonial-card">
                                            <div class="testimonial-image">
                                                <img src="image/others/client-4.png" alt="">
                                            </div>
                                            <div class="testimonial-body">
                                                <article>
                                                    <h2 class="sr-only">Testimonial Article</h2>
                                                    <p>elit. In molestie This is Photoshops version of Lorem Ipsum.
                                                        Proin gravida nibh vel
                                                        velit.Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing augue magna. Pell..</p>
                                                    <span class="d-block client-name">Rebecka Filson</span>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="testimonial-card">
                                            <div class="testimonial-image">
                                                <img src="image/others/client-5.png" alt="">
                                            </div>
                                            <div class="testimonial-body">
                                                <article>
                                                    <h2 class="sr-only">Testimonial Article</h2>
                                                    <p>Pell Photoshops version of Lorem Ipsum. Proin gravida nibh vel
                                                        velit.Lorem ipsum dolor
                                                        sit amet, consectetur
                                                        adipiscing elit. In molestie augue magna. This is..</p>
                                                    <span class="d-block client-name">Rebecka Filson</span>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="home-right-side">
                            <div class="single-block">
                                <div class="sb-custom-tab text-lg-left text-center">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="shop-tab" data-toggle="tab" href="#shop"
                                                role="tab" aria-controls="shop" aria-selected="true">
                                                Özel Ürünler
                                            </a>
                                            <span class="arrow-icon"></span>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="men-tab" data-toggle="tab" href="#men" role="tab"
                                                aria-controls="men" aria-selected="true">
                                                Yeni gelenler
                                            </a>
                                            <span class="arrow-icon"></span>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="woman-tab" data-toggle="tab" href="#woman"
                                                role="tab" aria-controls="woman" aria-selected="false">
                                                En Çok Görüntülenenler
                                            </a>
                                            <span class="arrow-icon"></span>
                                        </li>
                                    </ul>
                                    <div class="tab-content space-db--30" id="myTabContent">
                                        <div class="tab-pane show active" id="shop" role="tabpanel"
                                            aria-labelledby="shop-tab">
                                            <div class="product-slider multiple-row slider-border-multiple-row  sb-slick-slider"
                                                data-slick-setting='{
                        "autoplay": true,
                        "autoplaySpeed": 8000,
                        "slidesToShow": 3,
                        "rows":2,
                        "dots":true
                    }' data-slick-responsive='[
                        {"breakpoint":992, "settings": {"slidesToShow": 3} },
                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                    ]'>
					<?php  
							    $query = $db->query("SELECT * FROM kitap ORDER BY id DESC LIMIT 9", PDO::FETCH_ASSOC);
                                if ( $query->rowCount() ){
                                foreach( $query as $row ){                               
                                ?>

                                                <div class="single-slide">
                                                    <div class="product-card">
                                                        <div class="product-header">
                                                            <a href="" class="author"><?php echo $row['yazar']; ?></a>
                                                                
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="card-image">
                                                                <img src="<?php echo $row['kapak_foto']; ?>" alt="">
                                                                <div class="hover-contents">
                                                                    <a href="product-details.php?id=<?php echo $row['id']; ?>" class="hover-image">
                                                                        <img src="<?php echo $row['kapak_foto']; ?>" alt="">
                                                                    </a>
                                                                    <div class="hover-btns">

                                                                        <a href="ekle.php?id=<?php echo $row['id']; ?>" name="kaydet"  class="single-btn" >
                                                                            <i  class="fas fa-shopping-basket"></i>
                                                                        </a>
                                                                        <a href="wishlist.html" data-id="<?php echo $row['id']; ?>" class="single-btn">
                                                                            <i class="fas fa-heart"></i>
                                                                        </a>
                                                                        <a href="compare.html" class="single-btn">
                                                                            <i class="fas fa-random"></i>
                                                                        </a>
                                                                        <a href="product-details.php?id=<?php echo $row['id']; ?>" data-toggle="modal"
                                                                            data-target="#quickModal"
                                                                            class="single-btn">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div></br>
															<h3><a href="product-details.html?id=<?php echo $row['id']; ?>"><?php echo substr($row['kitap_adi'],0,100); ?></a></h3>
															<a href="" class="author">Yıl:<?php echo $row['yili']; ?></a>
                                                            <div class="price-block">
                                                                <span class="price"><?php echo $row['fiyat']; ?>TL</span>
                                                                
                                                                <span class="price-discount">20%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												
                                                <?php }} 
													?>	
                                                </div>
                                                <?php  include("model.php"); ?>	
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                            </div>
                                        </div>
											
										 <div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog"
            aria-labelledby="quickModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close modal-close-btn ml-auto" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="product-details-modal">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Product Details Slider Big Image-->
                                <div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
              "slidesToShow": 1,
              "arrows": false,
              "fade": true,
              "draggable": false,
              "swipe": false,
              "asNavFor": ".product-slider-nav"
              }'>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-1.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-2.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-3.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-4.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-5.jpg" alt="">
                                    </div>
                                </div>
                                <!-- Product Details Slider Nav -->
                                <div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two"
                                    data-slick-setting='{
            "infinite":true,
              "autoplay": true,
              "autoplaySpeed": 8000,
              "slidesToShow": 4,
              "arrows": true,
              "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
              "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
              "asNavFor": ".product-details-slider",
              "focusOnSelect": true
              }'>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-1.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-2.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-3.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-4.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 mt--30 mt-lg--30">
                                <div class="product-details-info pl-lg--30 ">
                                    <p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p>
                                    <h3 class="product-title">Beats EP Wired On-Ear Headphone-Black</h3>
                                    <ul class="list-unstyled">
                                        <li>Ex Tax: <span class="list-value"> £60.24</span></li>
                                        <li>Brands: <a href="#" class="list-value font-weight-bold"> Canon</a></li>
                                        <li>Product Code: <span class="list-value"> model1</span></li>
                                        <li>Reward Points: <span class="list-value"> 200</span></li>
                                        <li>Availability: <span class="list-value"> In Stock</span></li>
                                    </ul>
                                    <div class="price-block">
                                        <span class="price-new">£73.79</span>
                                        <del class="price-old">£91.86</del>
                                    </div>
                                    <div class="rating-widget">
                                        <div class="rating-block">
                                            <span class="fas fa-star star_on"></span>
                                            <span class="fas fa-star star_on"></span>
                                            <span class="fas fa-star star_on"></span>
                                            <span class="fas fa-star star_on"></span>
                                            <span class="fas fa-star "></span>
                                        </div>
                                        <div class="review-widget">
                                            <a href="">(1 Reviews)</a> <span>|</span>
                                            <a href="">Write a review</a>
                                        </div>
                                    </div>
                                    <article class="product-details-article">
                                        <h4 class="sr-only">Product Summery</h4>
                                        <p>Long printed dress with thin adjustable straps. V-neckline and wiring under
                                            the Dust with ruffles
                                            at the bottom
                                            of the
                                            dress.</p>
                                    </article>
                                    <div class="add-to-cart-row">
                                        <div class="count-input-block">
                                            <span class="widget-label">Qty</span>
                                            <input type="number" class="form-control text-center" value="1">
                                        </div>
                                        <div class="add-cart-btn">
                                            <a href="" class="btn btn-outlined--primary"><span
                                                    class="plus-icon">+</span>Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="compare-wishlist-row">
                                        <a href="" class="add-link"><i class="fas fa-heart"></i>Add to Wish List</a>
                                        <a href="" class="add-link"><i class="fas fa-random"></i>Add to Compare</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="widget-social-share">
                            <span class="widget-label">Share:</span>
                            <div class="modal-social-share">
                                <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                                <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                        <div class="tab-pane" id="men" role="tabpanel" aria-labelledby="men-tab">
                                            <div class="product-slider multiple-row slider-border-multiple-row  sb-slick-slider"
                                                data-slick-setting='{
                                    "autoplay": true,
                                    "autoplaySpeed": 8000,
                                    "slidesToShow": 3,
                                    "rows":2,
                                    "dots":true
                                    }' data-slick-responsive='[
                            {"breakpoint":992, "settings": {"slidesToShow": 3} },
                            {"breakpoint":768, "settings": {"slidesToShow": 2} },
                            {"breakpoint":480, "settings": {"slidesToShow": 1} },
                            {"breakpoint":320, "settings": {"slidesToShow": 1} }
                        ]'>
                                               
                                                
                                               
                                                
                                               
                                               
                                                
                                              
                                                
                                                
                                                
                                                
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="woman" role="tabpanel" aria-labelledby="woman-tab">
                                            <div class="product-slider multiple-row slider-border-multiple-row  sb-slick-slider"
                                                data-slick-setting='{
                                    "autoplay": true,
                                    "autoplaySpeed": 8000,
                                    "slidesToShow": 3,
                                    "rows":2,
                                    "dots":true
                                }' data-slick-responsive='[
                                        {"breakpoint":992, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                                    ]'>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                               
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><br><br><br>
							
                            
                            <div class="single-block">
                                <div class="home-right-block bg-white">
                                    <div class="sb-custom-tab text-lg-left text-center">
                                        <ul class="nav nav-tabs nav-style-2" id="myTab2" role="tablist">    
										
											<li class="nav-item">
                                                <a class="nav-link active" id="shop-tab2" data-toggle="tab"
                                                    href="index.php?kid=roman" role="tab" aria-controls="shop2" aria-selected="true">
                                                    Roman
                                                </a>
                                            </li>
											<form method="post" action="index.php">
                                            <li class="nav-item">
                                                <a class="nav-link" id="men-tab2" data-toggle="tab" href="#men2"
                                                    role="tab" aria-controls="men2" aria-selected="true">
                                                    Bilim
                                                </a>
                                            </li>
												</form>
                                            <li class="nav-item">
                                                <a class="nav-link" id="woman-tab2" data-toggle="tab" href="#woman2"
                                                    role="tab" aria-controls="woman2" aria-selected="false">
                                                    Edebiyat
                                                </a>
                                            </li>
											
                                        </ul>
                                        <div class="tab-content" id="myTabContent2">
                                            <div class="tab-pane show active" id="shop2" role="tabpanel"
                                                aria-labelledby="shop-tab2">
                                                <div class="product-slider product-list-slider multiple-row slider-border-multiple-row  sb-slick-slider"
                                                    data-slick-setting='{
                                                        "autoplay": true,
                                                        "autoplaySpeed": 8000,
                                                        "slidesToShow": 2,
                                                        "rows":4,
                                                        "dots":true
                                                    }' data-slick-responsive='[
                                                        {"breakpoint":992, "settings": {"slidesToShow": 2,"rows": 3} },
                    
                                                        {"breakpoint":768, "settings": {"slidesToShow": 1} }
                                                    ]'>
                                                    <?php  
							    $query = $db->query("SELECT * FROM kitap where kitap_turu = 'roman'", PDO::FETCH_ASSOC);
                                if ( $query->rowCount() ){
                                foreach( $query as $row ){                               
                                ?>
													<div class="single-slide">
                                                        <div class="product-card card-style-list">
                                                            <div class="card-image">
														 <a href="product-details.php?id=<?php echo $row['id']; ?>" class="hover-image">
                                                                <img src="<?php echo $row['kapak_foto']; ?>" alt="">
                                                            </div>
                                                            <div class="product-card--body">
                                                                <div class="product-header">
                                                                    <a href="" class="author"><?php echo $row['yazar']; ?></a>
                                                                    <h3><a href="product-details.html"><?php echo $row['kitap_adi']; ?></a></h3>
                                                                </div>
																<a href="" class="author">Yıl:<?php echo $row['yili']; ?></a>
                                                                <div class="price-block">
                                                                    <span class="price"><?php echo $row['fiyat']; ?>TL</span>                                                                   
                                                                    <span class="price-discount">20%</span>
                                                                </div>
																<div class="hover-contents">
                                                                   
                                                                   <div class="hover-btns">

                                                                        <a href="ekle.php?id=<?php echo $row['id']; ?>" name="kaydet"  class="single-btn" >
                                                                            <i  class="fas fa-shopping-basket"></i>
                                                                        </a>
                                                                        <a href="wishlist.html" data-id="<?php echo $row['id']; ?>" class="single-btn">
                                                                            <i class="fas fa-heart"></i>
                                                                        </a>
                                                                        <a href="compare.html" class="single-btn">
                                                                            <i class="fas fa-random"></i>
                                                                        </a>
                                                                        <a href="product-details.php?id=<?php echo $row['id']; ?>" data-toggle="modal"
                                                                            data-target="#quickModal"
                                                                            class="single-btn">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php }} ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="men2" role="tabpanel" aria-labelledby="men-tab2">
                                                <div class="product-slider product-list-slider multiple-row slider-border-multiple-row  sb-slick-slider"
                                                    data-slick-setting='{
                                                        "autoplay": true,
                                                        "autoplaySpeed": 8000,
                                                        "slidesToShow": 2,
                                                        "rows":4,
                                                        "dots":true
                                                    }' data-slick-responsive='[
                                                        {"breakpoint":992, "settings": {"slidesToShow": 2,"rows": 3} },
                    
                                                        {"breakpoint":768, "settings": {"slidesToShow": 1} }
                                                    ]'>
                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="woman2" role="tabpanel"
                                                aria-labelledby="woman-tab2">
                                                <div class="product-slider product-list-slider multiple-row slider-border-multiple-row  sb-slick-slider"
                                                    data-slick-setting='{
                                                            "autoplay": true,
                                                            "autoplaySpeed": 8000,
                                                            "slidesToShow": 2,
                                                            "rows":4,
                                                            "dots":true
                                                        }' data-slick-responsive='[
                                                            {"breakpoint":992, "settings": {"slidesToShow": 2,"rows": 3} },
                        
                                                            {"breakpoint":768, "settings": {"slidesToShow": 1} }
                                                        ]'>
                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal -->
       
        <!--=================================
    Footer
===================================== -->
    </div>
    <!--=================================
  Brands Slider
===================================== -->
    <section class="section-margin">
        <h2 class="sr-only">alt bar</h2>
        <div class="container">
            <div class="brand-slider sb-slick-slider border-top border-bottom" >
                
            </div>
        </div>
    </section>
    <!--=================================
    Footer Area
===================================== -->
   <?php include 'footer.php'; ?>
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <script src="js/plugins.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>