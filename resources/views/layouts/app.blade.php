<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Title -->
	<title>Legion</title>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">
	<meta name="format-detection" content="telephone=no">
	
	<meta name="keywords" content="template, ui kit, clothing, delivery, ecommerce, fashion, order, shopping, store, fashion design, fashion store, responsive design, fashion showcase, modern design, fashion technology, e-shop, ecommerce web, eCommerce Website, minimal shop, online shop, online shopping, pixio, user experience, Design Elements, Trendy, Stylish, User-Friendly, Navigation, Product Display, Branding, Development, Visual Design, UI/UX, Website, Web Design">
	<meta name="description" content="Elevate your online retail presence with Pixio Shop & eCommerce HTML Template. Crafted with precision, this responsive and feature-rich template provides a seamless and visually stunning shopping experience. Explore a world of possibilities with modern design elements, intuitive navigation, and customizable features. Transform your website into a dynamic online storefront with Pixio, where style meets functionality for a captivating and user-friendly eCommerce journey.">
	
	<meta property="og:title" content="Pixio: Shop & eCommerce Bootstrap HTML Template | DexignZone">
	<meta property="og:description" content="Elevate your online retail presence with Pixio Shop & eCommerce HTML Template. Crafted with precision, this responsive and feature-rich template provides a seamless and visually stunning shopping experience. Explore a world of possibilities with modern design elements, intuitive navigation, and customizable features. Transform your website into a dynamic online storefront with Pixio, where style meets functionality for a captivating and user-friendly eCommerce journey.">
	<meta property="og:image" content="https://pixio.dexignzone.com/xhtml/social-image.png">
	
	<!-- TWITTER META -->
	<meta name="twitter:title" content="Pixio: Shop & eCommerce Bootstrap HTML Template | DexignZone">
	<meta name="twitter:description" content="Elevate your online retail presence with Pixio Shop & eCommerce HTML Template. Crafted with precision, this responsive and feature-rich template provides a seamless and visually stunning shopping experience. Explore a world of possibilities with modern design elements, intuitive navigation, and customizable features. Transform your website into a dynamic online storefront with Pixio, where style meets functionality for a captivating and user-friendly eCommerce journey.">
	<meta name="twitter:image" content="https://pixio.dexignzone.com/xhtml/social-image.png">
	<meta name="twitter:card" content="summary_large_image">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" type="image/x-icon" href="images/favicon.png">
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- STYLESHEETS -->
	
	<link rel="stylesheet" type="text/css" href="icons/iconly/index.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/magnific-popup/magnific-popup.min.css">	
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/nouislider/nouislider.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/lightgallery/dist/css/lightgallery.css" >
    <link rel="stylesheet" type="text/css" href="vendor/lightgallery/dist/css/lg-thumbnail.css">
    <link rel="stylesheet" type="text/css" href="vendor/lightgallery/dist/css/lg-zoom.css">
	
	<!-- Custom Stylesheet -->
	<link class="main-css" rel="stylesheet" type="text/css" href="css/style.css">
	<link class="skin" type="text/css" rel="stylesheet" href="css/skin/skin-1.css">
	
	<!-- GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

</head>	
<body id="bg">

<div class="page-wraper">

	<div id="loading-area"  class="preloader-wrapper-3">
		<div class="loader">
			<div class="ball"></div>
		</div>
	</div>	

	<!-- Header Star -->
    @include('partials.header');

	<!-- Header End -->
	
	<div class="page-content bg-light">
	
  @yield('content')
	</div>
	
	<!-- Footer -->
  @include('partials.footer');
	<!-- Footer End -->

	<div class="scroltop-progress2"></div>
	<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
	
	<!-- Quick Modal Start -->
		<div class="modal quick-view-modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="icon feather icon-x"></i>
					</button>
					<div class="modal-body">
						<div class="row g-xl-4 g-3">
							<div class="col-xl-6 col-md-6">
								<div class="dz-product-detail mb-0">
									<div class="swiper-btn-center-lr">
										<div class="swiper quick-modal-swiper2">
											<div class="swiper-wrapper" id="lightgallery">
												<div class="swiper-slide">
													<div class="dz-media DZoomImage">
														<a class="mfp-link lg-item" href="images/products/lady-1.png" data-src="images/products/lady-1.png">
															<i class="feather icon-maximize dz-maximize top-right"></i>
														</a>
														<img src="images/products/lady-1.png" alt="image">
													</div>
												</div>
												<div class="swiper-slide">
													<div class="dz-media DZoomImage">
														<a class="mfp-link lg-item" href="images/products/lady-2.png" data-src="images/products/lady-2.png">
															<i class="feather icon-maximize dz-maximize top-right"></i>
														</a>
														<img src="images/products/lady-2.png" alt="image">
													</div>
												</div>
												<div class="swiper-slide">
													<div class="dz-media DZoomImage">
														<a class="mfp-link lg-item" href="images/products/lady-3.png" data-src="images/products/lady-3.png">
															<i class="feather icon-maximize dz-maximize top-right"></i>
														</a>
														<img src="images/products/lady-3.png" alt="image">
													</div>
												</div>
											</div>
										</div>
										<div class="swiper quick-modal-swiper thumb-swiper-lg thumb-sm swiper-vertical">
											<div class="swiper-wrapper">
												<div class="swiper-slide">
													<img src="images/products/thumb-img/lady-1.png" alt="image">
												</div>
												<div class="swiper-slide">
													<img src="images/products/thumb-img/lady-2.png" alt="image">
												</div>
												<div class="swiper-slide">
													<img src="images/products/thumb-img/lady-3.png" alt="image">
												</div>
											</div>
										</div>
									</div>	
								</div>	
							</div>
							<div class="col-xl-6 col-md-6">
								<div class="dz-product-detail style-2 ps-xl-3 ps-0 pt-2 mb-0">
									<div class="dz-content">
										<div class="dz-content-footer">
											<div class="dz-content-start">
												<span class="badge bg-secondary mb-2">SALE 20% Off</span>
												<h4 class="title mb-1"><a href="shop-list.html">Cozy Knit Cardigan Sweater</a></h4>
												<div class="review-num">
													<ul class="dz-rating me-2">
														<li class="star-fill">
															<i class="flaticon-star-1"></i>
														</li>										
														<li class="star-fill">
															<i class="flaticon-star-1"></i>
														</li>
														<li class="star-fill">
															<i class="flaticon-star-1"></i>
														</li>
														<li>
															<i class="flaticon-star-1"></i>
														</li>
														<li>
															<i class="flaticon-star-1"></i>
														</li>
													</ul>
													<span class="text-secondary me-2">4.7 Rating</span>
													<a href="javascript:void(0);">(5 customer reviews)</a>
												</div>
											</div>
										</div>
										<p class="para-text">
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.
										</p>
										<div class="meta-content m-b20 d-flex align-items-end">
											<div class="me-3">
												<span class="form-label">Price</span>
												<span class="price">$125.75 <del>$132.17</del></span>
											</div>
											<div class="btn-quantity light me-0">
												<label class="form-label">Quantity</label>
												<input  type="text" value="1" name="demo_vertical2">
											</div>
										</div>
										<div class=" cart-btn">
											<a href="shop-cart.html" class="btn btn-secondary text-uppercase">Add To Cart</a>
											<a href="shop-wishlist.html" class="btn btn-md btn-outline-secondary btn-icon">
												<svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M9.24805 16.9986C8.99179 16.9986 8.74474 16.9058 8.5522 16.7371C7.82504 16.1013 7.12398 15.5038 6.50545 14.9767L6.50229 14.974C4.68886 13.4286 3.12289 12.094 2.03333 10.7794C0.815353 9.30968 0.248047 7.9162 0.248047 6.39391C0.248047 4.91487 0.755203 3.55037 1.67599 2.55157C2.60777 1.54097 3.88631 0.984375 5.27649 0.984375C6.31552 0.984375 7.26707 1.31287 8.10464 1.96065C8.52734 2.28763 8.91049 2.68781 9.24805 3.15459C9.58574 2.68781 9.96875 2.28763 10.3916 1.96065C11.2292 1.31287 12.1807 0.984375 13.2197 0.984375C14.6098 0.984375 15.8885 1.54097 16.8202 2.55157C17.741 3.55037 18.248 4.91487 18.248 6.39391C18.248 7.9162 17.6809 9.30968 16.4629 10.7792C15.3733 12.094 13.8075 13.4285 11.9944 14.9737C11.3747 15.5016 10.6726 16.1001 9.94376 16.7374C9.75136 16.9058 9.50417 16.9986 9.24805 16.9986ZM5.27649 2.03879C4.18431 2.03879 3.18098 2.47467 2.45108 3.26624C1.71033 4.06975 1.30232 5.18047 1.30232 6.39391C1.30232 7.67422 1.77817 8.81927 2.84508 10.1066C3.87628 11.3509 5.41011 12.658 7.18605 14.1715L7.18935 14.1743C7.81021 14.7034 8.51402 15.3033 9.24654 15.9438C9.98344 15.302 10.6884 14.7012 11.3105 14.1713C13.0863 12.6578 14.6199 11.3509 15.6512 10.1066C16.7179 8.81927 17.1938 7.67422 17.1938 6.39391C17.1938 5.18047 16.7858 4.06975 16.045 3.26624C15.3152 2.47467 14.3118 2.03879 13.2197 2.03879C12.4197 2.03879 11.6851 2.29312 11.0365 2.79465C10.4585 3.24179 10.0558 3.80704 9.81975 4.20255C9.69835 4.40593 9.48466 4.52733 9.24805 4.52733C9.01143 4.52733 8.79774 4.40593 8.67635 4.20255C8.44041 3.80704 8.03777 3.24179 7.45961 2.79465C6.811 2.29312 6.07643 2.03879 5.27649 2.03879Z" fill="black"></path>
												</svg>
												Add To Wishlist
											</a>
										</div>
										<div class="dz-info mb-0">
											<ul>
												<li><strong>SKU:</strong></li>
												<li>PRT584E63A</li>
											</ul>
											<ul>
												<li><strong>Category:</strong></li>
												<li><a href="shop-standard.html">Dresses,</a></li>												
												<li><a href="shop-standard.html">Jeans,</a></li>												
												<li><a href="shop-standard.html">Swimwear,</a></li>												
												<li><a href="shop-standard.html">Summer,</a></li>												
												<li><a href="shop-standard.html">Clothing</a></li>												
											</ul>
											<ul>
												<li><strong>Tags:</strong></li>
												<li><a href="shop-standard.html">Casual</a></li>												
												<li><a href="shop-standard.html">Athletic,</a></li>												
												<li><a href="shop-standard.html">Workwear,</a></li>												
												<li><a href="shop-standard.html">Accessories</a></li>												
											</ul>
											<div class="dz-social-icon">
												<ul>
													<li><a target="_blank" class="text-dark" href="https://www.facebook.com/dexignzone">
														<i class="fab fa-facebook-f"></i>
													</a></li>
													<li><a target="_blank" class="text-dark" href="https://twitter.com/dexignzones">	
														<i class="fab fa-twitter"></i>
													</a></li>
													<li><a target="_blank" class="text-dark" href="https://www.youtube.com/@dexignzone1723">
														<i class="fa-brands fa-youtube"></i>
													</a></li>
													<li><a target="_blank" class="text-dark" href="https://www.linkedin.com/showcase/3686700/admin/">
														<i class="fa-brands fa-linkedin-in"></i>
													</a></li>
													<li><a target="_blank" class="text-dark" href="https://www.instagram.com/dexignzone/">
														<i class="fab fa-instagram"></i>
													</a></li>
												</ul>
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
	<!-- Quick Modal End -->
	
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY MIN JS -->
<script src="vendor/wow/wow.min.js"></script><!-- WOW JS -->
<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT MIN JS -->
<script src="vendor/bootstrap-touchspin/bootstrap-touchspin.js"></script><!-- BOOTSTRAP TOUCHSPIN JS -->
<script src="vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="vendor/swiper/swiper-bundle.min.js"></script><!-- SWIPER JS -->
<script src="vendor/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="vendor/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED-->
<script src="vendor/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED-->
<script src="vendor/masonry/masonry-4.2.2.js"></script><!-- MASONRY -->
<script src="vendor/masonry/isotope.pkgd.min.js"></script><!-- ISOTOPE -->
<script src="vendor/countdown/jquery.countdown.js"></script><!-- COUNTDOWN FUCTIONS  -->
<script src="vendor/wnumb/wNumb.js"></script><!-- WNUMB -->
<script src="vendor/nouislider/nouislider.min.js"></script><!-- NOUSLIDER MIN JS-->
<script src="js/dz.carousel.js"></script><!-- DZ CAROUSEL JS -->
<script src="vendor/lightgallery/dist/lightgallery.min.js"></script>
<script src="vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.min.js"></script>
<script src="vendor/lightgallery/dist/plugins/zoom/lg-zoom.min.js"></script>
<script src="js/dz.ajax.js"></script><!-- AJAX -->
<script src="vendor/skrollr/skrollr.js"></script><!-- OWL SLIDER -->
<script src="js/custom.js"></script><!-- CUSTOM JS -->

<script>

//var s = skrollr.init({
//	edgeStrategy: 'set',
//	forceHeight: false,
//	easing: {
//		WTF: Math.random,
//		inverted: function(p) {
//			return 1-p;
//		}
//	}
//});
//console.log(s);


var s = skrollr.init({
	edgeStrategy: 'set',
	forceHeight: false,
	easing: {
		WTF: Math.random,
		inverted: function(p) {
			return 1-p;
		}
	}
});

// disable skrollr if the window is resized below 960px wide
jQuery(window).on('load resize', function () {
	//skrollr.init({
			//forceHeight: false
		//});
	
	if (jQuery(window).width() > 300) {
		//skrollr.init({
		//	forceHeight: false
		//});
	}
	else
	{
		//skrollr.init().destroy(); // skrollr.init() returns the singleton created above
	}
	
	jQuery('.skrollr-mobile, .skrollr-mobile  > body').removeAttr('style');
});

</script>
</body>
</html>