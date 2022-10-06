<?php 

try {
     $db = new PDO("mysql:host=localhost;dbname=odev_db", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}

error_reporting(E_ALL & ~E_NOTICE);

if(isset($_GET['id']))
{
    $query = $db->prepare("DELETE FROM sepet WHERE id = :id");
$delete = $query->execute(array(
   'id' => $_GET['id']
));
}
$query = $db->query("SELECT sum(fiyat*adet) as toplam, COUNT(sepet_id) as sepetsayi FROM sepet INNER JOIN kitap ON kitap.id = sepet.id", PDO::FETCH_ASSOC); 
	 if ( $query->rowCount() ){
     foreach( $query as $row ){ $toplamsayi=$row['toplam']; } } 

if(isset($_GET['kaydet']))
{
	$kuponkod=$_GET['kuponkod'];
	$query = $db->query("SELECT * FROM kupon WHERE kuponkod='".$kuponkod."'", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
	$indirimtutar=$row['indirimtutar'];
	$mesaj="Kupon başarıyla Uygulandı";
     }
	 
}
else
	 {
	$mesaj="Kupon Geçersiz."; 
	 }
}

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
		<div class="site-header header-2 mb--20 d-none d-lg-block">
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
								<div class="cart-widget">
									<div class="login-block">
										<input class="buttons buttons2" type="button" onclick="window.location.href='admin/giris.php';" value="Giriş" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               
									</div>
									
								</div>
								<!-- @include('menu.htm') -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-bottom bg-primary">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-3">
							<nav class="category-nav white-nav  ">
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
							<div class="header-phone color-white">
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
								<ul class="main-menu menu-right main-menu--white li-last-0">
									<li class="menu-item has-children">
										<a href="javascript:void(0)">Home <i
												class="fas fa-chevron-down dropdown-arrow"></i></a>
										<ul class="sub-menu">
											<li> <a href="index.php">Home One</a></li>
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
												<h3 class="menu-title"><a href="javascript:void(0)">Blog Details</a>
												</h3>
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
										<a href="contact.html">Contact</a>
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
							<a href="index.php" class="site-brand">
								<img src="image/logo.png" alt="">
							</a>
						</div>
						<div class="col-md-5 order-3 order-md-2">
							<nav class="category-nav   ">
								<div>
									<a href="javascript:void(0)" class="category-trigger"><i
											class="fa fa-bars"></i>Katagoriler </a>
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
										<li> <a href="index.php">Home One</a></li>
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
					<nav class="off-canvas-nav">
						<ul class="mobile-menu menu-block-2">
							<li class="menu-item-has-children">
								<a href="#">Currency - USD $ <i class="fas fa-angle-down"></i></a>
								<ul class="sub-menu">
									<li> <a href="cart.html">USD $</a></li>
									<li> <a href="checkout.html">EUR €</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children">
								<a href="#">Lang - Eng<i class="fas fa-angle-down"></i></a>
								<ul class="sub-menu">
									<li>Eng</li>
									<li>Ban</li>
								</ul>
							</li>
							<li class="menu-item-has-children">
								<a href="#">My Account <i class="fas fa-angle-down"></i></a>
								<ul class="sub-menu">
									<li><a href="">My Account</a></li>
									<li><a href="">Order History</a></li>
									<li><a href="">Transactions</a></li>
									<li><a href="">Downloads</a></li>
								</ul>
							</li>
						</ul>
					</nav>
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
						<a href="index.php" class="site-brand">
							<img src="image/logo1.png" alt=""></br>
								&nbsp;&nbsp;&nbsp Kitap oku geleceği doku.
						</a>
					</div>
					<div class="col-lg-8">
						<div class="main-navigation flex-lg-right">
							<ul class="main-menu menu-right ">
								<li class="menu-item has-children">
									<a href="javascript:void(0)">Home <i
											class="fas fa-chevron-down dropdown-arrow"></i></a>
									<ul class="sub-menu">
										<li> <a href="index.php">Home One</a></li>
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
									<a href="contact.html">Contact</a>
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
							<li class="breadcrumb-item active">Cart</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<!-- Cart Page Start -->
		<main class="cart-page-main-block inner-page-sec-padding-bottom">
			<div class="cart_area cart-area-padding  ">
				<div class="container">
					<div class="page-section-title">
						<h1>Alışveriş Sepetim</h1>
					</div>
					<div class="row">
						<div class="col-12">
							<form action="#" class="">
								<!-- Cart Table -->
								<div class="cart-table table-responsive mb--40">
									<table class="table">
										<!-- Head Row -->
										<thead>
											<tr>
												<th class="pro-remove"></th>
												<th class="pro-thumbnail">Kitap Resim</th>
												<th class="pro-title">Kitap Adı</th>
												<th class="pro-price">Fiyat</th>
												<th class="pro-quantity">Adet</th>
												<th class="pro-subtotal">Toplam</th>
											</tr>
										</thead>
										<tbody>
											<!-- Product Row -->
											<?php  
							    $query = $db->query("SELECT *
FROM sepet
INNER JOIN kitap ON kitap.id = sepet.id", PDO::FETCH_ASSOC);
                                if ( $query->rowCount() ){
                                foreach( $query as $row ){                               
                                ?>
											<tr>
												<td class="pro-remove"><a href="sil.php?pid=<?php echo $row['sepet_id']; ?>"><i class="far fa-trash-alt"></i></a>
												</td>
												<td class="pro-thumbnail"><a href="product-details.php?id=<?php echo $row['id']; ?>"><img src="<?php echo $row['kapak_foto']; ?>" alt="Product"></a></td>
												<td class="pro-title"><a href="product-details.php?id=<?php echo $row['id']; ?>"><?php echo $row['kitap_adi']; ?></a></td>
												<td class="pro-price"><span><?php echo $row['fiyat']; ?></span></td>
												<td class="pro-quantity">
													<div class="pro-qty">
														<div class="count-input-block">
															<input type="number" name="adet" class="form-control text-center"
																value="<?php echo $row['adet']; ?>">
																
														</div>
													</div>
												</td>
												<td class="pro-subtotal"><span><?php echo $row['fiyat']*$row['adet']; ?></span></td>
											</tr>
											<?php $yenitoplam +=  $row['fiyat'] * $row['adet']; ?>
										<?php }}
													?>		
											<tr>
											 <form  action="cart.php" method="post">
												<td colspan="6" class="actions">
													<div class="coupon-block">
														<div class="coupon-text">
															<label for="coupon_code">Kupon :</label>
															<input type="text" name="kuponkod" class="input-text"
																id="coupon_code" placeholder="Kupon Kodu">
																<h5><a> <?php echo $mesaj; ?></a></h5>
														</div>
														
														<div class="coupon-btn">
															<input type="submit" class="btn btn-outlined"
																name="kaydet" value="kupon kullan">
														</div>
													</div>
													
													<div class="update-block text-right">
														
														<input type="submit" class="btn btn-outlined" name="sepetguncelle"
														
															value="Sepet Güncelle">
														<input type="hidden" id="_wpnonce" name="_wpnonce"
															value="05741b501f"><input type="hidden"
															name="_wp_http_referer" value="/petmark/cart/">
															
													</div>
											</form>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="cart-section-2">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-12 mb--30 mb-lg--0">
							<!-- slide Block 5 / Normal Slider -->
							<div class="cart-block-title">
								<h2><a>Sizin İçin Öneriler</a></h2>
							</div>
							<div class="product-slider sb-slick-slider" data-slick-setting='{
							          "autoplay": true,
							          "autoplaySpeed": 8000,
							          "slidesToShow": 2
									  }' data-slick-responsive='[
                {"breakpoint":992, "settings": {"slidesToShow": 2} },
                {"breakpoint":768, "settings": {"slidesToShow": 3} },
                {"breakpoint":575, "settings": {"slidesToShow": 2} },
                {"breakpoint":480, "settings": {"slidesToShow": 1} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>
								<div class="single-slide">
									<div class="product-card">
										<div class="product-header">
											<span class="author">
												Lpple
											</span>
											<h3><a href="product-details.html">Revolutionize Your BOOK With These
													Easy-peasy Tips</a></h3>
										</div>
										<div class="product-card--body">
											<div class="card-image">
												<img src="image/products/product-10.jpg" alt="">
												<div class="hover-contents">
													<a href="product-details.html" class="hover-image">
														<img src="image/products/product-1.jpg" alt="">
													</a>
													<div class="hover-btns">
														<a href="cart.html" class="single-btn">
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
										</div>
									</div>
								</div>
								<div class="single-slide">
									<div class="product-card">
										<div class="product-header">
											<span class="author">
												Jpple
											</span>
											<h3><a href="product-details.html">Turn Your BOOK Into High Machine</a></h3>
										</div>
										<div class="product-card--body">
											<div class="card-image">
												<img src="image/products/product-2.jpg" alt="">
												<div class="hover-contents">
													<a href="product-details.html" class="hover-image">
														<img src="image/products/product-1.jpg" alt="">
													</a>
													<div class="hover-btns">
														<a href="cart.html" class="single-btn">
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
										</div>
									</div>
								</div>
								<div class="single-slide">
									<div class="product-card">
										<div class="product-header">
											<span class="author">
												Wpple
											</span>
											<h3><a href="product-details.html">3 Ways Create Better BOOK With</a></h3>
										</div>
										<div class="product-card--body">
											<div class="card-image">
												<img src="image/products/product-3.jpg" alt="">
												<div class="hover-contents">
													<a href="product-details.html" class="hover-image">
														<img src="image/products/product-2.jpg" alt="">
													</a>
													<div class="hover-btns">
														<a href="cart.html" class="single-btn">
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
										</div>
									</div>
								</div>
								<div class="single-slide">
									<div class="product-card">
										<div class="product-header">
											<span class="author">
												Epple
											</span>
											<h3><a href="product-details.html">What You Can Learn From Bill Gates</a>
											</h3>
										</div>
										<div class="product-card--body">
											<div class="card-image">
												<img src="image/products/product-5.jpg" alt="">
												<div class="hover-contents">
													<a href="product-details.html" class="hover-image">
														<img src="image/products/product-4.jpg" alt="">
													</a>
													<div class="hover-btns">
														<a href="cart.html" class="single-btn">
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
										</div>
									</div>
								</div>
								<div class="single-slide">
									<div class="product-card">
										<div class="product-header">
											<span class="author">
												Hpple
											</span>
											<h3><a href="product-details.html">Simple Things You To Save BOOK</a></h3>
										</div>
										<div class="product-card--body">
											<div class="card-image">
												<img src="image/products/product-6.jpg" alt="">
												<div class="hover-contents">
													<a href="product-details.html" class="hover-image">
														<img src="image/products/product-4.jpg" alt="">
													</a>
													<div class="hover-btns">
														<a href="cart.html" class="single-btn">
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
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Cart Summary -->
						<div class="col-lg-6 col-12 d-flex">
							<div class="cart-summary">
								<div class="cart-summary-wrap">
									<h4><span>Sepet özeti</span></h4>
									<p>Ara toplam <span class="text-primary">₺<?php echo $yenitoplam; ?></span></p>
									<?php if ($toplamsayi>=100){$kucret="0";} else {$kucret="30";} ?>
									<b><?php if ($toplamsayi<=100){$mesaj=100 - $yenitoplam; echo $kargo="Kargo bedava olması için ",$mesaj,$kargo2=" ₺'lik daha ürün ekleyin";} else {} ?></b>
									<?php if ($indirimtutar>0){$yenitoplam=$yenitoplam - $indirimtutar;}else {$indirimtutar="0";} ?>
									<p>İndirim Tutar <span class="text-primary">₺<?php echo $indirimtutar; ?></span></p>
									<p>Kargo Ücreti <span class="text-primary">₺<?php echo $kucret; ?></span></p>
									
									<h2>Genel Toplam <span class="text-primary">₺<?php echo $yenitoplam+$kucret; ?></span></h2>
								</div>
								<div class="cart-summary-button">
									<a href="checkout.html" class="checkout-btn c-btn btn--primary">Ödeme Yap</a>
									<button class="update-btn c-btn btn-outlined">Update Cart</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- Cart Page End -->
	</div>
	<!--=================================
  Brands Slider
===================================== -->
	<section class="section-margin">
		<h2 class="sr-only">Brand Slider</h2>
		<div class="container">
			<div class="brand-slider sb-slick-slider border-top border-bottom" 
			</div>
		</div>
	</section>
	<!--=================================
    Footer
===================================== -->
    </div>
    <!--=================================
  Brands Slider
===================================== -->
    
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