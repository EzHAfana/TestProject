<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail</title>
    <link rel="shortcut icon" type="image/x-icon" href="asset/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
   
    <link rel="stylesheet"href="{{ asset('asset/js/calendar/bootstrap_calendar.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/color-01.css') }}">
</head>
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/color-01.css') }}">

<body class=" detail page ">

	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">	
				<div class="nav-section header-sticky">
					<div class="primary-nav-section">
						<div class="container">
						<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="{{ URL('publicwebsite') }}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="{{ URL('search') }}" class="link-term mercado-item-title">Search</a>
								</li>
								<li class="menu-item">
									<a href="#" class="link-term mercado-item-title">SHOP</a>
								</li>
								<li class="menu-item">
									<a href="#" class="link-term mercado-item-title">Contact Us</a>
								</li>	
								<li class="menu-item">
									<a href="#" class="link-term mercado-item-title">ABOUT US</a>
								</li>		
								<li class="menu-item">
									<a href="#" class="link-term mercado-item-title">CART</a>
								</li>																		
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<style>
	.color-g {
		color:#e6e6e6 !important;
	}
	</style>
	<!--main area-->
	<main id="main" class="main-site">
		<div class="container">
			<div class="row">   
			@foreach ($store as $store)	
				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
					<div class="wrap-product-detail">
						<div class="detail-media">
							<div class="product-gallery">
							    <li data-thumb="asset/images/products/digital_18.jpg">
                                <img src="{{ asset('/upload/product/'.$store->image) }}" alt="product thumbnail">
							    </li>
							</div>
						</div>
					
						<div class="detail-info">
          				 <h5>{{ $store->name }} </h5> 
							<div class="product-rating">
							@php
							 $xx = number_format($avg)
							 @endphp
							@for($i=1; $i<=5; $i++)
								@if($i <= $xx )
								<i class="fa fa-star" aria-hidden="true"></i>
								@else
								<i class="fa fa-star color-g" aria-hidden="true"></i>
								@endif
							@endfor
                                <a href="#" class="count-review">({{$count}} REVIEWS COUNT)</a>
                            </div>
                            <h2 class="product-name">{{ $store->name }} </h2>
                            <div class="short-desc">
                                <ul>
                                    <li> {{ $store->name }} </li>
									<li> {{ $store->address }}</li>
                                    <li> {{ $store->phone }}</li>
                                </ul>
                            </div>
                            
                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                            <div class="stock-info in-stock">
                                <p class="availability">Availability: <b>In Stock</b></p>
                            </div>
                            <div class="quantity">
                            	<span>Quantity:</span>
								<div class="quantity-input">
									<input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >
									
									<a class="btn btn-reduce" href="#"></a>
									<a class="btn btn-increase" href="#"></a>
								</div>
							</div>
							@endforeach
							<div class="wrap-butons">
								<a href="#" class="btn add-to-cart">Add to Cart</a>
                                <div class="wrap-btn">
                                    <a href="#" class="btn btn-compare">Add Compare</a>
                                    <a href="#" class="btn btn-wishlist">Add Wishlist</a>
                                </div>
							</div>
						</div>
						@if (session()->has('s'))
						<div class="col-lg-12">
							@if (session('s'))
								<div class="alert alert-success">The product has been successfully evaluated </div>
							@else
								<div class="alert alert-danger">You cant rate because its already rated</div>
							@endif
						</div>
						@endif	
						<div class="advance-info">
							<div class="tab-control normal">
								<a href="#description" class="tab-control-item active">Description</a>
								<a href="#review" class="tab-control-item ">Reviews</a>
							</div>
							<div class="tab-contents">
								<div class="tab-content-item active" id="description">
									<p>Lorem ipsum dolor sit amet, an munere tibique consequat mel, congue albucius no qui, a t everti meliore erroribus sea. ro cum. Sea ne accusata voluptatibus. Ne cum falli dolor voluptua, duo ei sonet choro facilisis, labores officiis torquatos cum ei.</p>
									<p>Cum altera mandamus in, mea verear disputationi et. Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique. Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum eque. Est cu nibh clita. Sed an nominavi, et stituto, duo id rebum lucilius. Te eam iisque deseruisse, ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus taria . </p>
									<p>experian soleat maluisset per. Has eu idque similique, et blandit scriptorem tatibus mea. Vis quaeque ocurreret ea.cu bus  scripserit, modus voluptaria ex per.</p>
								</div>
								<div class="tab-content-item " id="review">
										<div id="review_form_wrapper">
											<div id="review_form">
												<div id="respond" class="comment-respond"> 				
													<form action="{{ URL('rating/store/' . $store->id) }}" method="post" id="commentform" class="comment-form" novalidate="">
													<input type="hidden" name="_token" value="{{ csrf_token() }}">
													<div class="comment-form-rating">
															<span>Your rating</span>
															<p class="stars">
																<label for="rated-1"></label>
																<input type="radio" id="rated-1" name="rating" value="1">
																<label for="rated-2"></label>
																<input type="radio" id="rated-2" name="rating" value="2">
																<label for="rated-3"></label>
																<input type="radio" id="rated-3" name="rating" value="3">
																<label for="rated-4"></label>
																<input type="radio" id="rated-4" name="rating" value="4">
																<label for="rated-5"></label>
																<input type="radio" id="rated-5" name="rating" value="5" checked="checked">
															</p>
														</div>
														<p class="form-submit">
														<button type="submit" class="submit">Submit</button>
														</p>
													</form>
												</div><!-- .comment-respond-->
											</div><!-- #review_form -->
										</div><!-- #review_form_wrapper -->
									</div>
								</div>
							</div>
						</div>
					</div>
               
				
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget widget-our-services ">
						<div class="widget-content">
							<ul class="our-services">

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-truck" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Free Shipping</b>
											<span class="subtitle">On Oder Over $99</span>
											<p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
										</div>
									</a>
								</li>

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-gift" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Special Offer</b>
											<span class="subtitle">Get a gift!</span>
											<p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
										</div>
									</a>
								</li>

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-reply" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Order Return</b>
											<span class="subtitle">Return within 7 days</span>
											<p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div><!-- Categories widget-->

					<div class="widget mercado-widget widget-product">
						<h2 class="widget-title">Popular Products</h2>
						<div class="widget-content">
							<ul class="products">
								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="asset/images/products/digital_01.jpg" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="asset/images/products/digital_17.jpg" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="asset/images/products/digital_18.jpg" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="asset/images/products/digital_20.jpg" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

							</ul>
						</div>
					</div>

				</div><!--end sitebar-->
			</div><!--end row-->
		</div><!--end container-->
	</main>
	<!--main area-->
	<!--footer area-->
	<footer id="footer">
	    <div class="wrap-footer-content footer-style-1">

	        <div class="wrap-function-info">
	            <div class="container">
	                <ul>
	                    <li class="fc-info-item">
	                        <i class="fa fa-truck" aria-hidden="true"></i>
	                        <div class="wrap-left-info">
	                            <h4 class="fc-name">Free Shipping</h4>
	                            <p class="fc-desc">Free On Oder Over $99</p>
	                        </div>

	                    </li>
	                    <li class="fc-info-item">
	                        <i class="fa fa-recycle" aria-hidden="true"></i>
	                        <div class="wrap-left-info">
	                            <h4 class="fc-name">Guarantee</h4>
	                            <p class="fc-desc">30 Days Money Back</p>
	                        </div>

	                    </li>
	                    <li class="fc-info-item">
	                        <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
	                        <div class="wrap-left-info">
	                            <h4 class="fc-name">Safe Payment</h4>
	                            <p class="fc-desc">Safe your online payment</p>
	                        </div>

	                    </li>
	                    <li class="fc-info-item">
	                        <i class="fa fa-life-ring" aria-hidden="true"></i>
	                        <div class="wrap-left-info">
	                            <h4 class="fc-name">Online Suport</h4>
	                            <p class="fc-desc">We Have Support 24/7</p>
	                        </div>

	                    </li>
	                </ul>
	            </div>
	        </div>
	        <!--End function info-->

	        <div class="main-footer-content">

	            <div class="container">

	                <div class="row">

	                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
	                        <div class="wrap-footer-item">
	                            <h3 class="item-header">Contact Details</h3>
	                            <div class="item-content">
	                                <div class="wrap-contact-detail">
	                                    <ul>
	                                        <li>
	                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
	                                            <p class="contact-txt">45 Grand Central Terminal New York,NY 1017 United State USA</p>
	                                        </li>
	                                        <li>
	                                            <i class="fa fa-phone" aria-hidden="true"></i>
	                                            <p class="contact-txt">(+123) 456 789 - (+123) 666 888</p>
	                                        </li>
	                                        <li>
	                                            <i class="fa fa-envelope" aria-hidden="true"></i>
	                                            <p class="contact-txt">Contact@yourcompany.com</p>
	                                        </li>	                                        
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

	                        <div class="wrap-footer-item">
	                            <h3 class="item-header">Hot Line</h3>
	                            <div class="item-content">
	                                <div class="wrap-hotline-footer">
	                                    <span class="desc">Call Us toll Free</span>
	                                    <b class="phone-number">(+123) 456 789 - (+123) 666 888</b>
	                                </div>
	                            </div>
	                        </div>

	                        <div class="wrap-footer-item footer-item-second">
	                            <h3 class="item-header">Sign up for newsletter</h3>
	                            <div class="item-content">
	                                <div class="wrap-newletter-footer">
	                                    <form action="#" class="frm-newletter" id="frm-newletter">
	                                        <input type="email" class="input-email" name="email" value="" placeholder="Enter your email address">
	                                        <button class="btn-submit">Subscribe</button>
	                                    </form>
	                                </div>
	                            </div>
	                        </div>

	                    </div>

	                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
	                        <div class="row">
	                            <div class="wrap-footer-item twin-item">
	                                <h3 class="item-header">My Account</h3>
	                                <div class="item-content">
	                                    <div class="wrap-vertical-nav">
	                                        <ul>
	                                            <li class="menu-item"><a href="#" class="link-term">My Account</a></li>
	                                            <li class="menu-item"><a href="#" class="link-term">Brands</a></li>
	                                            <li class="menu-item"><a href="#" class="link-term">Gift Certificates</a></li>
	                                            <li class="menu-item"><a href="#" class="link-term">Affiliates</a></li>
	                                            <li class="menu-item"><a href="#" class="link-term">Wish list</a></li>
	                                        </ul>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="wrap-footer-item twin-item">
	                                <h3 class="item-header">Infomation</h3>
	                                <div class="item-content">
	                                    <div class="wrap-vertical-nav">
	                                        <ul>
	                                            <li class="menu-item"><a href="#" class="link-term">Contact Us</a></li>
	                                            <li class="menu-item"><a href="#" class="link-term">Returns</a></li>
	                                            <li class="menu-item"><a href="#" class="link-term">Site Map</a></li>
	                                            <li class="menu-item"><a href="#" class="link-term">Specials</a></li>
	                                            <li class="menu-item"><a href="#" class="link-term">Order History</a></li>
	                                        </ul>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>

	                </div>

	                <div class="row">

	                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
	                        <div class="wrap-footer-item">
	                            <h3 class="item-header">We Using Safe Payments:</h3>
	                            <div class="item-content">
	                                <div class="wrap-list-item wrap-gallery">
										<img src="asset/images/payment.png" style="max-width: 260px;">
									</div>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
	                        <div class="wrap-footer-item">
	                            <h3 class="item-header">Social network</h3>
	                            <div class="item-content">
	                                <div class="wrap-list-item social-network">
	                                    <ul>
	                                        <li><a href="#" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
	                                        <li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
	                                        <li><a href="#" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
	                                        <li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
	                                        <li><a href="#" class="link-to-item" title="vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
	                        <div class="wrap-footer-item">
	                            <h3 class="item-header">Dowload App</h3>
	                            <div class="item-content">
	                                <div class="wrap-list-item apps-list">
	                                    <ul>
	                                        <li><a href="#" class="link-to-item" title="our application on apple store"><figure><img src="asset/images/brands/apple-store.png" alt="apple store" width="128" height="36"></figure></a></li>
	                                        <li><a href="#" class="link-to-item" title="our application on google play store"><figure><img src="asset/images/brands/google-play-store.png" alt="google play store" width="128" height="36"></figure></a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                    </div>

	                </div>
	            </div>

	            <div class="wrap-back-link">
	                <div class="container">
	                    <div class="back-link-box">
	                        <h3 class="backlink-title">Quick Links</h3>
	                        <div class="back-link-row">
	                            <ul class="list-back-link" >
	                                <li><span class="row-title">Mobiles:</span></li>
	                                <li><a href="#" class="redirect-back-link" title="mobile">Mobiles</a></li>
	                                <li><a href="#" class="redirect-back-link" title="yphones">YPhones</a></li>
	                                <li><a href="#" class="redirect-back-link" title="Gianee Mobiles GL">Gianee Mobiles GL</a></li>
	                                <li><a href="#" class="redirect-back-link" title="Mobiles Karbonn">Mobiles Karbonn</a></li>
	                                <li><a href="#" class="redirect-back-link" title="Mobiles Viva">Mobiles Viva</a></li>
	                                <li><a href="#" class="redirect-back-link" title="Mobiles Intex">Mobiles Intex</a></li>
	                                <li><a href="#" class="redirect-back-link" title="Mobiles Micrumex">Mobiles Micrumex</a></li>
	                                <li><a href="#" class="redirect-back-link" title="Mobiles Bsus">Mobiles Bsus</a></li>
	                                <li><a href="#" class="redirect-back-link" title="Mobiles Samsyng">Mobiles Samsyng</a></li>
	                                <li><a href="#" class="redirect-back-link" title="Mobiles Lenova">Mobiles Lenova</a></li>
	                            </ul>

	                            <ul class="list-back-link" >
	                                <li><span class="row-title">Tablets:</span></li>
	                                <li><a href="#" class="redirect-back-link" title="Plesc YPads">Plesc YPads</a></li>
	                                <li><a href="#" class="redirect-back-link" title="Samsyng Tablets" >Samsyng Tablets</a></li>
	                                <li><a href="#" class="redirect-back-link" title="Qindows Tablets" >Qindows Tablets</a></li>
	                                <li><a href="#" class="redirect-back-link" title="Calling Tablets" >Calling Tablets</a></li>
	                                <li><a href="#" class="redirect-back-link" title="Micrumex Tablets" >Micrumex Tablets</a></li>
	                                <li><a href="#" class="redirect-back-link" title="Lenova Tablets Bsus" >Lenova Tablets Bsus</a></li>
	                                <li><a href="#" class="redirect-back-link" title="Tablets iBall" >Tablets iBall</a></li>
	                                <li><a href="#" class="redirect-back-link" title="Tablets Swipe" >Tablets Swipe</a></li>
	                                <li><a href="#" class="redirect-back-link" title="Tablets TVs, Audio" >Tablets TVs, Audio</a></li>
	                            </ul>

	                            <ul class="list-back-link" >
	                                <li><span class="row-title">Fashion:</span></li>
	                                <li><a href="#" class="redirect-back-link" title="Sarees Silk" >Sarees Silk</a></li>
	                                <li><a href="#" class="redirect-back-link" title="sarees Salwar" >sarees Salwar</a></li>
	                                <li><a href="#" class="redirect-back-link" title="Suits Lehengas" >Suits Lehengas</a></li>
	                                <li><a href="#" class="redirect-back-link" title="Biba Jewellery" >Biba Jewellery</a></li>
	                                <li><a href="#" class="redirect-back-link" title="Rings Earrings" >Rings Earrings</a></li>
	                                <li><a href="#" class="redirect-back-link" title="Diamond Rings" >Diamond Rings</a></li>
	                                <li><a href="#" class="redirect-back-link" title="Loose Diamond Shoes" >Loose Diamond Shoes</a></li>
	                                <li><a href="#" class="redirect-back-link" title="BootsMen Watches" >BootsMen Watches</a></li>
	                                <li><a href="#" class="redirect-back-link" title="Women Watches" >Women Watches</a></li>
	                            </ul>

	                        </div>
	                    </div>
	                </div>
	            </div>

	        </div>

	        <div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright © 2020 Surfside Media. All rights reserved</p>
					</div>
					<div class="coppy-right-item item-right">
						<div class="wrap-nav horizontal-nav">
							<ul>
								<li class="menu-item"><a href="about-us.html" class="link-term">About us</a></li>								
								<li class="menu-item"><a href="privacy-policy.html" class="link-term">Privacy Policy</a></li>
								<li class="menu-item"><a href="terms-conditions.html" class="link-term">Terms & Conditions</a></li>
								<li class="menu-item"><a href="return-policy.html" class="link-term">Return Policy</a></li>								
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
	    </div>
	</footer>

	<script src="{{ asset('asset/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('asset/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('asset/js/jquery.flexslider.js') }}"></script>
	<script src="{{ asset('asset/js/chosen.jquery.min.js') }}"></script>
	<script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('asset/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('asset/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('asset/js/functions.js') }}"></script>

</body>
</html>