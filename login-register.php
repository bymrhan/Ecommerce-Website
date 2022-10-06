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
	<title>Pustok - Book Store HTML Template</title>
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
									<p>Free Support 24/7</p>
									<p class="font-weight-bold number">+01-202-555-0181</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
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
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active">Login</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<!--=============================================
    =            Login Register page content         =
    =============================================-->
		<main class="page-section inner-page-sec-padding-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb--30 mb-lg--0">
						<!-- Login Form s-->
						<form action="#">
							<div class="login-form">
								<h4 class="login-title">Kayıt Ol</h4>
								<p><span class="font-weight-bold">Ben yeni bir müşteriyim</span></p>
								<div class="row">
									<div class="col-md-12 col-12 mb--15">
										<label for="email">Ad Soyad</label>
										<input class="mb-0 form-control" type="text" id="name"
											placeholder="Enter your full name">
									</div>
									<div class="col-12 mb--20">
										<label for="email">E - mail</label>
										<input class="mb-0 form-control" type="email" id="email" placeholder="E-posta Adresinizi Buraya Girin...">
									</div>
									<div class="col-lg-6 mb--20">
										<label for="password">Parola</label>
										<input class="mb-0 form-control" type="password" id="password" placeholder="Parolanızı Buraya Girin...">
									</div>
									<div class="col-lg-6 mb--20">
										<label for="password">Tekrar Parola</label>
										<input class="mb-0 form-control" type="password" id="repeat-password" placeholder="Şifrenizi tekrarlayın">
									</div>
									<div class="col-md-12">
										<a href="#" class="btn btn-outlined">Kayıt Ol</a>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
						<form action="./">
							<div class="login-form">
								<h4 class="login-title">Giriş Yap</h4>
								<p><span class="font-weight-bold"></span></p>
								<div class="row">
									<div class="col-md-12 col-12 mb--15">
										<label for="email">E-posta Adresinizi Buraya Girin...</label>
										<input class="mb-0 form-control" type="email" id="email1"
											placeholder="Enter you email address here...">
									</div>
									<div class="col-12 mb--20">
										<label for="password">Parola</label>
										<input class="mb-0 form-control" type="password" id="login-password" placeholder="Enter your password">
									</div>
									<div class="col-md-12">
										<a href="#" class="btn btn-outlined">Giriş Yap</a>
									</div>
								</div>
							</div>
						</form>
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