<!DOCTYPE html>
<?php 

try {
     $db = new PDO("mysql:host=localhost;dbname=odev_db", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}
$db->query("SET CHARACTER SET utf8");
date_default_timezone_set('Europe/Istanbul');
setlocale(LC_TIME, 'tr_TR.UTF-8');

$id=$_GET['id'];
$query = $db->query("SELECT * FROM kitap WHERE id='".$id."'", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
	$kitap_adi = $row['kitap_adi'];
	$kitap_turu=$row['kitap_turu'];
	$yazar=$row['yazar'];
	$sayfa=$row['sayfa'];
	$yili=$row['yili'];
	$dili=$row['dili'];
	$fiyat=$row['fiyat'];
	$aciklama=$row['aciklama'];
	$barkod=$row['barkod'];
	$kapak_foto=$row['kapak_foto'];

     }
}

if(isset($_POST['kaydet']))
{	
$vote=$_POST['vote'];
if ($vote == '5') {
				$_POST['vote'] = '1'; 
                include("yorumkaydet.php"); 
  }
  else if  ($vote == '4') {
				$_POST['vote'] = '2'; 
                 include("yorumkaydet.php"); 
          }
		else  if ($vote == '3') {
			  $_POST['vote'] = '3'; 
                 include("yorumkaydet.php"); 
          }
		else  if ($vote == '2') {
			  $_POST['vote'] = '4'; 
                 include("yorumkaydet.php"); 
          }
		else  if ($vote == '1') {
			  $_POST['vote'] = '5'; 
                 include("yorumkaydet.php"); 
          }

}
$query = $db->query("SELECT count(k_id) as adetyorum FROM yorum WHERE k_id='".$id."'", PDO::FETCH_ASSOC);
	 if ( $query->rowCount() ){
     foreach( $query as $row ){ $adetyorum=$row['adetyorum']; } } 
	 
	   $query = $db->query("SELECT * FROM yorum WHERE k_id ='".$id."'", PDO::FETCH_ASSOC);
                                if ( $query->rowCount() ){
                                foreach( $query as $row ){  
									$yildiz=$row['vote'];     }}
?>

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
        .price-discount {
    color: #fff;
    font-weight: 700;
    text-align: center;
    line-height: 24px;
    padding: 0 7px;
    min-width: 80px;
    background: #bd0018;
    text-transform: uppercase;
    font-size: 14px;
    margin-left: 5px;
    z-index: 3;
    border-radius: 3px; }
	
	.product-details-slider .single-slide img {
  width: 67%; 
  border-style: solid;
  border-radius: 10px;
  border-width: 1px;}
  
  .card-image{
  width: 90%; 
  border-style: solid;
  border-radius: 5px;
  border-width: 1px;}
  
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
    </style>
</head>

<body>
    <div class="site-wrapper" id="top">
        <div class="site-header d-none d-lg-block">
            <div class="header-middle pt--10 pb--10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 ">
                            <a href="index.php" class="site-brand">
                                <img src="image/logo1.png" alt=""></br>
								&nbsp;&nbsp;&nbsp Kitap oku geleceği doku.
                            </a>
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
                                <ul class="main-menu menu-right ">
                                    <li class="menu-item has-children">
                                        <a href="index.php">Ana Sayfa <i ></i></a>
                                        
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
                                        <a href="javascript:void(0)">Pages <i
                                                class="fas fa-chevron-down dropdown-arrow"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="cart.html">Cart</a></li>
											<li><a href="checkout.html">Checkout</a></li>
											<li><a href="compare.html">Compare</a></li>
											<li><a href="wishlist.html">Wishlist</a></li>
											
											<li><a href="my-account.html">My Account</a></li>
											<li><a href="order-complete.html">Order Complete</a></li>
											<li><a href="faq.html">Faq</a></li>
											<li><a href="contact-2.html">contact 02</a></li>
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
            <div class="header-bottom pb--10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <nav class="category-nav   ">
                                <div>
                                    <a href="javascript:void(0)" class="category-trigger"><i
                                            class="fa fa-bars"></i>Katagoriler</a>
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
                                <div class="cart-widget">
                                    <div class="login-block">
                                        <input class="buttons buttons2" type="button" onclick="window.location.href='admin/giris.php';" value="Giriş" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       			<?php  
							    			$query = $db->query("SELECT sum(fiyat*adet) as toplam, SUM(adet) as adetsayi FROM sepet INNER JOIN kitap ON kitap.id = sepet.id", PDO::FETCH_ASSOC); 
	 if ( $query->rowCount() ){
     foreach( $query as $row ){ $toplamsayi=$row['toplam'];  
							 
                                                                                               
                                ?>
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
												<?php   }}  ?>
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
                                                        <a href="sil.php?pid=<?php echo $row['sepet_id']; ?>" data-toggle="tooltip" title="Delete" class="cross-btn"><i class="fa fa-times"></i></a>
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
                        <div class="col-md-3 col-5  order-md-3 text-right">
                            <div class="mobile-header-btns header-top-widget">
                                <ul class="header-links">
                                    <li class="sin-link">
                                        <a href="cart.html" class="cart-link link-icon"><i class="ion-bag"></i></a>
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
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav class="off-canvas-nav">
                            <ul class="mobile-menu main-mobile-menu">
                                <li class="menu-item-has-children">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li> <a href="index.html">Home One</a></li>
                                        <li> <a href="index-2.html">Home Two</a></li>
                                        <li> <a href="index-3.html">Home Three</a></li>
                                        <li> <a href="index-4.html">Home Four</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Blog Grid</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Full Widh (Default)</a></li>
                                                <li><a href="blog-left-sidebar.html">left Sidebar</a></li>
                                                <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Blog List</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-list.html">Full Widh (Default)</a></li>
                                                <li><a href="blog-list-left-sidebar.html">left Sidebar</a></li>
                                                <li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Blog Details</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-details.html">Image Format (Default)</a></li>
                                                <li><a href="blog-details-gallery.html">Gallery Format</a></li>
                                                <li><a href="blog-details-audio.html">Audio Format</a></li>
                                                <li><a href="blog-details-video.html">Video Format</a></li>
                                                <li><a href="blog-details-left-sidebar.html">left Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Grid</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop-grid.html">Fullwidth</a></li>
                                                <li><a href="shop-grid-left-sidebar.html">left Sidebar</a></li>
                                                <li><a href="shop-grid-right-sidebar.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop List</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop-list.html">Fullwidth</a></li>
                                                <li><a href="shop-list-left-sidebar.html">left Sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Details 1</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.html">Product Details Page</a></li>
                                                <li><a href="product-details-affiliate.html">Product Details
                                                        Affiliate</a></li>
                                                <li><a href="product-details-group.html">Product Details Group</a></li>
                                                <li><a href="product-details-variable.html">Product Details
                                                        Variables</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Details 2</a>
                                            <ul class="sub-menu">
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
                                <li class="menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="cart.html">Cart</a></li>
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
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->
                    
                    <div class="off-canvas-bottom">
                        <div class="contact-list mb--10">
                            <a href="" class="sin-contact"><i class="fas fa-mobile-alt"></i>(12345) 78790220</a>
                            <a href="" class="sin-contact"><i class="fas fa-envelope"></i>examle@handart.com</a>
                        </div>
                        <div class="off-canvas-social">
                            <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="single-icon"><i class="fas fa-rss"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </aside>
            <!--Off Canvas Navigation End-->
        </div>
        <div class="sticky-init fixed-header common-sticky">
            <div class="container d-none d-lg-block">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <a href="index.html" class="site-brand">
                            <img src="image/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-lg-8">
                        <div class="main-navigation flex-lg-right">
                            <ul class="main-menu menu-right ">
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0)">Home <i
                                            class="fas fa-chevron-down dropdown-arrow"></i></a>
                                    <ul class="sub-menu">
                                        <li> <a href="index.html">Home One</a></li>
                                        <li> <a href="index-2.html">Home Two</a></li>
                                        <li> <a href="index-3.html">Home Three</a></li>
                                        <li> <a href="index-4.html">Home Four</a></li>
                                    </ul>
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
                                        <li><a href="cart.html">Cart</a></li>
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
                               
                                <li class="menu-item">
                                    <a href="contact.php">İletişim</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="breadcrumb-section">
            <h2 class="sr-only">Site Breadcrumb</h2>
            <div class="container">
                <div class="breadcrumb-contents">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <a href="product-details.html?pid=<?php echo $id;?>" class="breadcrumb-item active"><?php echo $kitap_adi; ?></a>
                    </nav>
                </div>
            </div>
        </section>
        <main class="inner-page-sec-padding-bottom">
            <div class="container">
                <div class="row  mb--60">
                    <div class="col-lg-5 mb--30">
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
                                <img src="<?php echo $kapak_foto; ?>" alt="">
                            </div>
                            
                        </div>
                        <!-- Product Details Slider Nav -->
                        
                    </div>
                    <div class="col-lg-7">
                        <div class="product-details-info pl-lg--30 ">
                            <p class="tag-block">katagoriler : <a href="kategori.php?kid=<?php echo $kitap_turu; ?>"><?php echo $kitap_turu; ?></p>
                            <h3 class="product-title"><?php echo $kitap_adi; ?></h3>
                            <ul class="list-unstyled">
                                <li>Yazar : <span class="list-value font-weight-bold"><?php echo $yazar; ?></span></li>                          
                                <li>Sayfa Sayısı : <span class="list-value"> <?php echo $sayfa; ?></span></li>
                                <li>Dili : <span class="list-value"><?php echo $dili; ?></span></li>
								<li>Barkod : <span class="list-value"><?php echo $barkod; ?></span></li>
                                <li>Standart Teslimat:<span class="list-value"> <?php echo date(' d '); ?><?php echo strftime('%A '); ?> - <?php echo date(' d ',strtotime('+5 days')),strftime(' %A ',strtotime('+5 days')); ?></span></li>
                            </ul>
                            <div class="price-block">
								<del class="price-old"><?php echo $eskifiyat=$fiyat+ rand(25,70); ?>TL</del>
                                <span class="price-new"><?php echo $fiyat; ?>TL</span>
                                
								 <span class="price-discount">%<?php echo ceil($oran=$fiyat/$eskifiyat * 100 -100); ?></br>indirim</span>
								
                            </div>
							<?php  
							    $query = $db->query("SELECT AVG(vote) as ortvote ,count(k_id) as voteadet FROM yorum WHERE k_id ='".$id."'", PDO::FETCH_ASSOC);
                                if ( $query->rowCount() ){
                                foreach( $query as $row ){     $ortvote=$row['ortvote'];                       
                                ?>
                            <div class="rating-widget">
                                <div class="rating-block">
								<?php for($i=0;$i<$ortvote; $i++){?>
										<span class="fas fa-star star_on"></span>
								<?php }
													?>	
										<?php if ($ortvote <= 0){$unyildiz="5";} else {$unyildiz= 5 - $ortvote;} ?>
										<?php for($i=0;$i<$unyildiz; $i++){?>
										<span class="fas fa-star"></span>
										<?php }?>
                                </div>
								<?php }}
													?>	
                                <div class="review-widget">
                                    <a href="">(<?php echo $adetyorum; ?> Yorum)</a> <span>|</span>
									
                                    
                                </div>
                            </div>
                            
                            <div class="add-to-cart-row">
                                <div class="count-input-block">
                                    <span class="widget-label">Adet</span>
                                    <input type="number" class="form-control text-center" value="1">
                                </div>
                                <div class="add-cart-btn">
                                    <a href="ekle.php?id=<?php echo $id; ?>" class="btn btn-outlined--primary"><span class="plus-icon">+</span>Sepete Ekle</a>
                                </div>
                            </div>
                            <div class="compare-wishlist-row">
                                <a href="" class="add-link"><i class="fas fa-heart"></i>Favorilerime Ekle</a>
                                <a href="" class="add-link"><i class="fas fa-random"></i>Karşılaştır</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sb-custom-tab review-tab section-padding">
                    <ul class="nav nav-tabs nav-style-2" id="myTab2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab"
                                aria-controls="tab-1" aria-selected="true">
                               <?php echo $kitap_adi; ?>  Kitap Açıklaması
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab2" data-toggle="tab" href="#tab-2" role="tab"
                                aria-controls="tab-2" aria-selected="true">
                                İncelemeler (<?php echo $adetyorum; ?>)
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content space-db--20" id="myTabContent">
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                            <article class="review-article">
                                <h1 class="sr-only">Tab Article</h1>
                                <p><?php echo $aciklama; ?></p>
                            </article>
                        </div>
						
                        <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
                            <div class="review-wrapper">
                                <h1 class="title-lg mb--20">Yorumlar</h1>
                                <?php  
							    $query = $db->query("SELECT * FROM yorum WHERE k_id ='".$id."'", PDO::FETCH_ASSOC);
                                if ( $query->rowCount() ){
                                foreach( $query as $row ){  
									$yildiz=$row['vote'];  								
                                ?>
								<div class="review-comment mb--20">
                                    <div class="avatar">
                                        <img src="image/icon/author-logo.png" alt="">
                                    </div>
                                    <div class="text">
                                        <div class="rating-block mb--15">
										<?php for($i=0;$i<$yildiz; $i++){?>
										<span class="ion-android-star-outline star_on"></span>
										<?php }?>
										<?php if ($yildiz < 5){$unyildiz= 5 - $yildiz;} else {$un="0";} ?>
										<?php for($i=0;$i<$unyildiz; $i++){?>
										<span class="ion-android-star-outline star_of"></span>
										<?php }?>
                                           
                                            
                                        </div>
                                        <h6 class="author"><?php echo $row['ad']; ?> – <span class="font-weight-400">March 23, 2015</span>
                                        </h6>
                                        <p><?php echo $row['yorum']; ?></p>
                                    </div>
                                </div>
								<?php }}
													?>	
                                <h2 class="title-lg mb--20 pt--15">Yorum Ekle</h2>
                                 <form id="İletişim-form" action="product-details.php?id=<?php echo $id; ?>" method="post" class="İletişim-form">
								<div class="rating-row pt-2">
                                    <p class="d-block">Puan</p>
                                    <span class="rating-widget-block">
                                        <input type="radio" name="vote" value="1" id="star1">
                                        <label for="star1"></label>
                                        <input type="radio" name="vote" value="2" id="star2">
                                        <label for="star2"></label>
                                        <input type="radio" name="vote" value="3" id="star3">
                                        <label for="star3"></label>
                                        <input type="radio" name="vote" value="4" id="star4">
                                        <label for="star4"></label>
                                        <input type="radio" name="vote" value="5" id="star5">
                                        <label for="star5"></label>
                                    </span>
                                   
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>İsim<span class="required">*</span></label>
                                            <input type="text" id="con_name" name="ad" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>E-mail<span class="required">*</span></label>
                                            <input type="email" id="con_email" name="mail" class="form-control"
                                                required>
                                        </div>
                                    </div>
                          
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Mesajınız</label>
                                            <textarea id="con_message" name="yorum"
                                                class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-btn">
                                            <button type="submit" value="submit" id="submit" class="btn btn-black"
                                                name="kaydet">GÖNDER</button>
                                        </div>
                                        <div class="form__output"></div>
                                    </div>
                                </div>
                            </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="tab-product-details">
  <div class="brand">
    <img src="image/others/review-tab-product-details.jpg" alt="">
  </div>
  <h5 class="meta">Reference <span class="small-text">demo_5</span></h5>
  <h5 class="meta">In stock <span class="small-text">297 Items</span></h5>
  <section class="product-features">
    <h3 class="title">Data sheet</h3>
    <dl class="data-sheet">
      <dt class="name">Compositions</dt>
      <dd class="value">Viscose</dd>
      <dt class="name">Styles</dt>
      <dd class="value">Casual</dd>
      <dt class="name">Properties</dt>
      <dd class="value">Maxi Dress</dd>
    </dl>
  </section>
</div> -->
            </div>
            <!--=================================
    RELATED PRODUCTS BOOKS
===================================== -->
            <section class="">
                <div class="container">
                    <div class="section-title section-title--bordered">
                        <h2>Sizin İçin Seçtiklerimiz</h2>
                    </div>
                    <div class="product-slider sb-slick-slider slider-border-single-row" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 4,
                "dots":true
            }' data-slick-responsive='[
                {"breakpoint":1200, "settings": {"slidesToShow": 4} },
                {"breakpoint":992, "settings": {"slidesToShow": 3} },
                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                {"breakpoint":480, "settings": {"slidesToShow": 1} }
            ]'>
                        <?php  
							    $query = $db->query("SELECT * FROM kitap ORDER BY RAND() LIMIT 5", PDO::FETCH_ASSOC);
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
                                                                        <a href="ekle.php?id=<?php echo $row['id']; ?>" data-id="<?php echo $row['id']; ?>" class="single-btn" >
                                                                            <i  class="fas fa-shopping-basket"></i>
                                                                        </a>
                                                                        <a href="wishlist.html" data-id="<?php echo $row['id']; ?>" class="single-btn">
                                                                            <i class="fas fa-heart"></i>
                                                                        </a>
                                                                        <a href="compare.html" class="single-btn">
                                                                            <i class="fas fa-random"></i>
                                                                        </a>
                                                                        <a href="#" data-toggle="modal"
                                                                            data-target="#quickModal"
                                                                            class="single-btn">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
															<h3><a href="product-details.php?pid=<?php echo $row['id']; ?>"><?php echo $row['kitap_adi']; ?></a></h3>
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
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Modal -->
            <div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog"
                aria-labelledby="quickModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="close modal-close-btn ml-auto" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="product-details-modal">
                            <div class="row">
                                <div class="col-lg-5">
                                    <!-- Product Details Slider Big Image-->
                                    <div class="product-details-slider sb-slick-slider arrow-type-two"
                                        data-slick-setting='{
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
                                        <p class="tag-block">Katagori : <a href="#"><?php echo $row['kitap_turu']; ?></a></p>
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
                                            <p>Long printed dress with thin adjustable straps. V-neckline and wiring
                                                under the Dust with ruffles at the bottom
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
        </main>
    </div>
    <!--=================================
  Brands Slider
===================================== -->
    <section class="section-margin">
        <h2 class="sr-only">alt bar</h2>
        <div class="container">
            <div class="brand-slider sb-slick-slider border-top border-bottom" 
            ]'>
                
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