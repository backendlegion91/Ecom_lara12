@extends('layouts.app')

@section('title', 'Home')

@section('content')

	<!--Swiper Banner Start -->
	<div class="main-slider style-3"> 
		<div class="container">
			<div class="banner-content">
				<div class="row gx-0">
					<div class="col-md-12 col-lg-8 align-self-center">
						<div class="inner-content">
							<div class="content-info">
								<h1 class="title mb-4 wow flipInX animated" data-wow-delay="0.5s">Make your fashion look mire <span>charming</span></h1>
								<p class="text" data-swiper-parallax="-40">Sell globally in minutes with localized currencies, languages, 
									and experiences in every market.  </p>
								<div class="content-btn m-b30 wow fadeInUp" data-wow-delay="0.8s" data-swiper-parallax="-60">
									<a class="btn btn-secondary btn-lg  me-xl-3 me-2 btnhover20" href="shop-cart.html">ADD TO CART</a>
									<a class="btn btn-outline-secondary btn-lg btnhover20" href="shop-standard.html">VIEW DETAILS</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-5 mb-3 wow fadeInUp" data-wow-delay="0.1s">
								<div class="product-card">
									<div class="dz-media">
										<img src="images/shop/small/pic1.png" alt="/">									
									</div>
									<div class="dz-content">
										<h5 class="dz-title"><a href="shop-standard.html">Collar Casual Shirt</a></h5>
										<span class="price">
											$18
											<del>$27</del>
										</span>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
								<div class="product-card">
									<div class="dz-media">
										<img src="images/shop/small/pic2.png" alt="/">									
									</div>
									<div class="dz-content">
										<h5 class="dz-title"><a href="shop-standard.html">Collar Casual Shirt</a></h5>
										<span class="price">
											$18
											<del>$27</del>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="banner-media">
							<div class="img-preview wow slideInRight" data-wow-delay="0.1s" data-wow-duration="1.5s">
								<img src="images/banner/banner-media3.png" alt="banner-media">
							</div>
							<a class="icon-button popup-youtube" href="https://www.youtube.com/watch?v=YwYoyQ1JdpQ">
								<div class="text-row word-rotate-box c-black blur">
									<span class="word-rotate">More Collection Explore </span>
									<i class="fa-solid fa-play text-dark badge__emoji" ></i>
								</div>
							</a>
							<div class="star">
								<svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" viewBox="0 0 68 68" fill="none">
								<path d="M34 0L43.6167 24.3833L68 34L43.6167 43.6167L34 68L24.3833 43.6167L0 34L24.3833 24.3833L34 0Z" fill="black"/>
							  </svg>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="collection1"><img src="images/collection/1.png" alt=""></div>
		<div class="collection2"><img src="images/collection/2.png" alt=""></div>
		<div class="collection3"><img src="images/collection/3.png" alt=""></div>

	</div>		
	<!--Swiper Banner End-->
		
	<!-- abouts-Secthion Start -->
	<section class="content-inner overflow-hidden bg-light-dark">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-4 col-md-12 m-b30">
					<div class="dz-media style-2 wow fadeInUp" data-wow-delay="0.2s">
						<img src="images/about/pic8.jpg" alt="image">
					</div>
				</div>
				<div class="col-lg-8 col-md-12 m-b30">
					<div class="about-wraper   position-relative">
						<div class="section-head style-1 wow fadeInUp d-lg-flex justify-content-between align-items-center" data-wow-delay="0.4s">
							<h3 class="title ">Discover latest collection</h3>
							<a class="service-btn-2 wow fadeInUp position-relative light  d-md-flex  d-none" data-wow-delay="0.6s" href="about-us.html">
								<span class="icon-wrapper">
									<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.832 31.1663L31.1654 12.833" stroke="var(--title)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M12.832 12.833H31.1654V31.1663" stroke="var(--title)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
								</span>
							</a>
						</div>
						
						<div class="swiper testimonial-swiper about-swiper m-b30">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="about-box">	
										<div class="about-img">
											<img src="images/shop/product-2/1.png" alt="image">
										</div>
										<div class="about-btn"><a class="btn btn-white btn-md" href="shop-list.html">Man Shoes</a></div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="about-box">	
										<div class="about-img">
											<img src="images/shop/product-2/2.png" alt="image">
										</div>
										<div class="about-btn"><a class="btn btn-white btn-md" href="shop-list.html">Woman Shoes</a></div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="about-box">	
										<div class="about-img">
											<img src="images/shop/product-2/3.png" alt="image">
										</div>
										<div class="about-btn"><a class="btn btn-white btn-md" href="shop-list.html">Kid Shoes</a></div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="about-box">	
										<div class="about-img">
											<img src="images/shop/product-2/1.png" alt="image">
										</div>
										<div class="about-btn"><a class="btn btn-white btn-md" href="shop-list.html">Man Shoes</a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-between align-items-center">
							<div class="d-flex gap-3">
								<div class="testimonial-button-prev">
									<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
										<path d="M36.8751 19.372H4.6659L12.288 11.9623C12.8705 11.3965 12.0066 10.4958 11.4164 11.0663C11.4164 11.0663 2.68932 19.5502 2.68932 19.5502C2.43467 19.7821 2.45495 20.2007 2.68935 20.4462C2.68932 20.4462 11.4164 28.9337 11.4164 28.9337C12.0038 29.4974 12.8725 28.6135 12.288 28.0377C12.288 28.0377 4.66308 20.622 4.66308 20.622H36.8751C37.6738 20.6144 37.7149 19.3872 36.8751 19.372Z" fill="black"/>
									</svg>
								</div>
								<div class="testimonial-button-next">
									<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
									<path d="M3.12489 19.372H35.3341L27.712 11.9623C27.1295 11.3965 27.9934 10.4958 28.5836 11.0663L37.3107 19.5502C37.5653 19.7821 37.5451 20.2007 37.3107 20.4462L28.5836 28.9337C27.9962 29.4973 27.1275 28.6135 27.712 28.0377L35.3369 20.622H3.12489C2.32618 20.6144 2.28506 19.3872 3.12489 19.372Z" fill="black"/>
									</svg>
								</div>
							</div>	
							<div class="swiper-pagination style-1 text-end swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
								<span class="swiper-pagination-bullet" tabindex="0">01</span>
								<span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" aria-current="true">02</span>
								<span class="swiper-pagination-bullet" tabindex="0">03</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- abouts-Secthion End -->

	<!-- Products  Section Start-->
	<section class="content-inner">
		<div class="container">
			<div class=" row justify-content-md-between align-items-start">
				<div class="col-lg-6 col-md-12">
					<div class="section-head style-1 m-b30  wow fadeInUp" data-wow-delay="0.2s">
						<div class="left-content">
							<h2 class="title">Most popular products</h2>
						</div>
					</div>	
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="site-filters clearfix style-1 align-items-center wow fadeInUp ms-lg-auto" data-wow-delay="0.4s">
						<ul class="filters" data-bs-toggle="buttons">
							<li class="btn active">
								<input type="radio">
								<a href="javascript:void(0);">ALL</a> 
							</li>
							<li data-filter=".Dresses" class="btn">
								<input type="radio">
								<a href="javascript:void(0);">Dresses</a> 
							</li>
							<li data-filter=".Tops" class="btn">
								<input type="radio">
								<a href="javascript:void(0);">Tops</a> 
							</li>
							<li data-filter=".Outerwear" class="btn">
								<input type="radio">
								<a href="javascript:void(0);">Outerwear</a> 
							</li>
							<li data-filter=".Jacket" class="btn">
								<input type="radio">
								<a href="javascript:void(0);">Jacket</a> 
							</li>
						</ul>			
					</div>
				</div>
			</div>
			<div class="clearfix">
				<ul id="masonry" class="row g-xl-4 g-3">
					<li class="card-container col-6 col-xl-3 col-lg-3 col-md-4 col-sm-6 Tops wow fadeInUp" data-wow-delay="0.6s">
						<div class="shop-card">
							<div class="dz-media">
								<img src="images/shop/product/1.png" alt="image">
								<div class="shop-meta">
									<a href="javascript:void(0);" class="btn btn-secondary btn-md btn-rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<i class="fa-solid fa-eye d-md-none d-block"></i>
										<span class="d-md-block d-none">Quick View</span>
									</a>
									<div class="btn btn-primary meta-icon dz-wishicon">
										<i class="icon feather icon-heart dz-heart"></i>
										<i class="icon feather icon-heart-on dz-heart-fill"></i>
									</div>
									<div class="btn btn-primary meta-icon dz-carticon">
										<i class="flaticon flaticon-basket"></i>
										<i class="flaticon flaticon-basket-on dz-heart-fill"></i>
									</div>
								</div>							
							</div>
							<div class="dz-content">
								<h5 class="title"><a href="shop-list.html">Cozy Knit Cardigan Sweater</a></h5>
								<h5 class="price">$80</h5>
							</div>
							<div class="product-tag">
								<span class="badge ">Get 20% Off</span>
							</div>
						</div>
					</li>
					<li class="card-container col-6 col-xl-3 col-lg-3 col-md-4 col-sm-6 Dresses Jacket wow fadeInUp" data-wow-delay="0.8s">
						<div class="shop-card">
							<div class="dz-media">
								<img src="images/shop/product/2.png" alt="image">
								<div class="shop-meta">
									<a href="javascript:void(0);" class="btn btn-secondary btn-md btn-rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<i class="fa-solid fa-eye d-md-none d-block"></i>
										<span class="d-md-block d-none">Quick View</span>
									</a>
									<div class="btn btn-primary meta-icon dz-wishicon">
										<i class="icon feather icon-heart dz-heart"></i>
										<i class="icon feather icon-heart-on dz-heart-fill"></i>
									</div>
									<div class="btn btn-primary meta-icon dz-carticon">
										<i class="flaticon flaticon-basket"></i>
										<i class="flaticon flaticon-basket-on dz-heart-fill"></i>
									</div>
								</div>								
							</div>
							<div class="dz-content">
								<h5 class="title"><a href="shop-list.html">Sophisticated Swagger Suit</a></h5>
								<h5 class="price">$80</h5>
							</div>
							<div class="product-tag">
								<span class="badge ">Get 20% Off</span>
							</div>
						</div>
					</li>
					<li class="card-container col-6 col-xl-3 col-lg-3 col-md-4 col-sm-6 Dresses wow fadeInUp" data-wow-delay="1.0s">
						<div class="shop-card">
							<div class="dz-media">
								<img src="images/shop/product/3.png" alt="image">
								<div class="shop-meta">
									<a href="javascript:void(0);" class="btn btn-secondary btn-md btn-rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<i class="fa-solid fa-eye d-md-none d-block"></i>
										<span class="d-md-block d-none">Quick View</span>
									</a>
									<div class="btn btn-primary meta-icon dz-wishicon">
										<i class="icon feather icon-heart dz-heart"></i>
										<i class="icon feather icon-heart-on dz-heart-fill"></i>
									</div>
									<div class="btn btn-primary meta-icon dz-carticon">
										<i class="flaticon flaticon-basket"></i>
										<i class="flaticon flaticon-basket-on dz-heart-fill"></i>
									</div>
								</div>									
							</div>
							<div class="dz-content">
								<h5 class="title"><a href="shop-list.html">Classic Denim Skinny Jeans</a></h5>
								<h5 class="price">$80</h5>
							</div>
							<div class="product-tag">
								<span class="badge ">Get 20% Off</span>
							</div>
						</div>
					</li>
					<li class="card-container col-6 col-xl-3 col-lg-3 col-md-4 col-sm-6 Tops Jacket wow fadeInUp" data-wow-delay="1.2s">
						<div class="shop-card">
							<div class="dz-media">
								<img src="images/shop/product/4.png" alt="image">
								<div class="shop-meta">
									<a href="javascript:void(0);" class="btn btn-secondary btn-md btn-rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<i class="fa-solid fa-eye d-md-none d-block"></i>
										<span class="d-md-block d-none">Quick View</span>
									</a>
									<div class="btn btn-primary meta-icon dz-wishicon">
										<i class="icon feather icon-heart dz-heart"></i>
										<i class="icon feather icon-heart-on dz-heart-fill"></i>
									</div>
									<div class="btn btn-primary meta-icon dz-carticon">
										<i class="flaticon flaticon-basket"></i>
										<i class="flaticon flaticon-basket-on dz-heart-fill"></i>
									</div>
								</div>									
							</div>
							<div class="dz-content">
								<h5 class="title"><a href="shop-list.html">Athletic Mesh Sports Leggings</a></h5>
								<h5 class="price">$80</h5>
							</div>
							<div class="product-tag">
								<span class="badge ">Get 20% Off</span>
							</div>
						</div>
					</li>
					<li class="card-container col-6 col-xl-3 col-lg-3 col-md-4 col-sm-6 Dresses wow fadeInUp" data-wow-delay="0.2s">
						<div class="shop-card">
							<div class="dz-media">
								<img src="images/shop/product/5.png" alt="image">
								<div class="shop-meta">
									<a href="javascript:void(0);" class="btn btn-secondary btn-md btn-rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<i class="fa-solid fa-eye d-md-none d-block"></i>
										<span class="d-md-block d-none">Quick View</span>
									</a>
									<div class="btn btn-primary meta-icon dz-wishicon">
										<i class="icon feather icon-heart dz-heart"></i>
										<i class="icon feather icon-heart-on dz-heart-fill"></i>
									</div>
									<div class="btn btn-primary meta-icon dz-carticon">
										<i class="flaticon flaticon-basket"></i>
										<i class="flaticon flaticon-basket-on dz-heart-fill"></i>
									</div>
								</div>								
							</div>
							<div class="dz-content">
								<h5 class="title"><a href="shop-list.html">Vintage Denim Overalls Shorts</a></h5>
								<h5 class="price">$80</h5>
							</div>
							<div class="product-tag">
								<span class="badge ">Get 20% Off</span>
							</div>
						</div>
					</li>
					<li class="card-container col-6 col-xl-3 col-lg-3 col-md-4 col-sm-6 Outerwear wow fadeInUp" data-wow-delay="0.4s">
						<div class="shop-card">
							<div class="dz-media">
								<img src="images/shop/product/6.png" alt="image">
								<div class="shop-meta">
									<a href="javascript:void(0);" class="btn btn-secondary btn-md btn-rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<i class="fa-solid fa-eye d-md-none d-block"></i>
										<span class="d-md-block d-none">Quick View</span>
									</a>
									<div class="btn btn-primary meta-icon dz-wishicon">
										<i class="icon feather icon-heart dz-heart"></i>
										<i class="icon feather icon-heart-on dz-heart-fill"></i>
									</div>
									<div class="btn btn-primary meta-icon dz-carticon">
										<i class="flaticon flaticon-basket"></i>
										<i class="flaticon flaticon-basket-on dz-heart-fill"></i>
									</div>
								</div>								
							</div>
							<div class="dz-content">
								<h5 class="title"><a href="shop-list.html">Satin Wrap Party Blouse</a></h5>
								<h5 class="price">$80</h5>
							</div>
							<div class="product-tag">
								<span class="badge ">Get 20% Off</span>
							</div>
						</div>
					</li>
					<li class="card-container col-6 col-xl-3 col-lg-3 col-md-4 col-sm-6 Dresses wow fadeInUp" data-wow-delay="0.6s">
						<div class="shop-card">
							<div class="dz-media">
								<img src="images/shop/product/7.png" alt="image">
								<div class="shop-meta">
									<a href="javascript:void(0);" class="btn btn-secondary btn-md btn-rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<i class="fa-solid fa-eye d-md-none d-block"></i>
										<span class="d-md-block d-none">Quick View</span>
									</a>
									<div class="btn btn-primary meta-icon dz-wishicon">
										<i class="icon feather icon-heart dz-heart"></i>
										<i class="icon feather icon-heart-on dz-heart-fill"></i>
									</div>
									<div class="btn btn-primary meta-icon dz-carticon">
										<i class="flaticon flaticon-basket"></i>
										<i class="flaticon flaticon-basket-on dz-heart-fill"></i>
									</div>
								</div>									
							</div>
							<div class="dz-content">
								<h5 class="title"><a href="shop-list.html">Plaid Wool Winter Coat</a></h5>
								<h5 class="price">$80</h5>
							</div>
							<div class="product-tag">
								<span class="badge ">Get 20% Off</span>
							</div>
						</div>
					</li>
					<li class="card-container col-6 col-xl-3 col-lg-3 col-md-4 col-sm-6 Tops wow fadeInUp" data-wow-delay="2.0s">
						<div class="shop-card">
							<div class="dz-media">
								<img src="images/shop/product/8.png" alt="image">
								<div class="shop-meta">
									<a href="javascript:void(0);" class="btn btn-secondary btn-md btn-rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<i class="fa-solid fa-eye d-md-none d-block"></i>
										<span class="d-md-block d-none">Quick View</span>
									</a>
									<div class="btn btn-primary meta-icon dz-wishicon">
										<i class="icon feather icon-heart dz-heart"></i>
										<i class="icon feather icon-heart-on dz-heart-fill"></i>
									</div>
									<div class="btn btn-primary meta-icon dz-carticon">
										<i class="flaticon flaticon-basket"></i>
										<i class="flaticon flaticon-basket-on dz-heart-fill"></i>
									</div>
								</div>								
							</div>
							<div class="dz-content">
								<h5 class="title"><a href="shop-list.html">Water-Resistant Windbreaker Jacket</a></h5>
								<h5 class="price">$80</h5>
							</div>
							<div class="product-tag">
								<span class="badge ">Get 20% Off</span>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- Products Section Start-->
	
	<!-- Collection Section Start -->
	<section class=" adv-area">
		<div class="container-fluid px-0">
			<div class="row product-style2 g-0">
				<div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
					<div class="product-box style-4">
						<div class="product-media" style="background-image: url('images/shop/large/product1.png');"></div>
						<div class="sale-box">
							<div class="badge style-1 mb-1">Sale Up to 50% Off</div>	
							<h2 class="sale-name">Summer<span>2023</span></h2>
							<a href="shop-list.html" class="btn btn-outline-secondary btn-lg text-uppercase">Shop Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
					<div class="product-box style-4">
						<div class="product-media" style="background-image: url('images/shop/large/product2.png');"></div>
						<div class="product-content">
							<div class="main-content">
								<div class="badge style-1 mb-3">Sale Up to 50% Off</div>
								<h2 class="product-name">New Summer Collection</h2>
							</div>
							<a href="shop-list.html" class="btn btn-secondary btn-lg text-uppercase">Shop Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Collection Section End-->
		
	<!-- About Section Start-->
	<section class="content-inner-2 overflow-hidden">
		<div class="container">
			<div class="row  align-items-xl-center align-items-start">
				<div class=" col-lg-5 col-md-12 m-b30 align-self-center">
					<div class="dz-media style-1 img-ho1 wow fadeInUp" data-wow-delay="0.2s">
						<img src="images/about/pic3.jpg" alt="image">
					</div>
				</div>	
				<div class="col-lg-7 col-md-12 col-sm-12">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-8 col-md-8 col-sm-12">
							<div class="section-head style-1 wow fadeInUp" data-wow-delay="0.4s">
								<div class="left-content">
									<h2 class="title">Users Who Viewed This Also Checked Out These Similar Profiles</h2>
								</div>
							</div>	
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 text-md-end wow fadeInUp" data-wow-delay="0.6s">	
							<a class="icon-button d-md-block d-none ms-md-auto m-b30" href="shop-standard.html">
								<div class="text-row word-rotate-box c-black">
									<span class="word-rotate">all products - all products - </span>
									<svg class="badge__emoji" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
										<g clip-path="url(#clip0_85_1327)">
											<path d="M31.3072 10.7239L39.5891 19.0059C39.8523 19.2696 40.0001 19.627 40.0001 19.9995C40.0001 20.3721 39.8523 20.7295 39.5891 20.9932L31.3072 29.2752C31.1236 29.4582 30.8748 29.5608 30.6156 29.5606C30.3564 29.5604 30.1078 29.4573 29.9245 29.274C29.7412 29.0907 29.6381 28.8422 29.6379 28.5829C29.6377 28.3237 29.7404 28.075 29.9234 27.8913L36.8368 20.9781L0.978516 20.9781C0.718997 20.9781 0.470108 20.875 0.2866 20.6915C0.103093 20.508 -1.17109e-07 20.2591 -1.14015e-07 19.9995C-1.1092e-07 19.74 0.103093 19.4911 0.2866 19.3076C0.470108 19.1241 0.718997 19.021 0.978516 19.021L36.8368 19.021L29.9234 12.1077C29.7404 11.9241 29.6377 11.6754 29.6379 11.4162C29.6381 11.1569 29.7412 10.9084 29.9245 10.7251C30.1078 10.5418 30.3564 10.4387 30.6156 10.4385C30.8748 10.4383 31.1236 10.5409 31.3072 10.7239Z" fill="black"/>
										</g>
										<defs>
											<clipPath id="clip0_85_1327">
											<rect width="40" height="40" fill="white" transform="matrix(-1.19249e-08 1 1 1.19249e-08 0 0)"/>
											</clipPath>
										</defs>
									</svg>
								</div>
							</a>
						</div>	
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 m-b15">
							<div class="shop-card style-5 wow fadeInUp" data-wow-delay="0.8s">
								<div class="dz-media">
									<img src="images/shop/product-2/1.png" alt="image">
								</div>
								<div class="dz-content">
									<div>
										<span class="sale-title">up to 79% off</span>
										<h6 class="title"><a href="shop-list.html">Cozy Knit Cardigan Sweater</a></h6>
									</div>
									<h6 class="price">
										$80
										<del>$95</del>
									</h6>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 m-b15">
							<div class="shop-card style-5 wow fadeInUp" data-wow-delay="1.0s">
								<div class="dz-media">
									<img src="images/shop/product-2/2.png" alt="image">
								</div>
								<div class="dz-content">
									<div>
										<span class="sale-title">up to 79% off</span>
										<h6 class="title"><a href="shop-list.html">Sophisticated Swagger Suit</a></h6>
									</div>
									<h6 class="price">
										$80
										<del>$95</del>
									</h6>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 m-b15">
							<div class="shop-card style-5 wow fadeInUp" data-wow-delay="1.2s">
								<div class="dz-media">
									<img src="images/shop/product-2/3.png" alt="image">
								</div>
								<div class="dz-content">
									<div>
										<span class="sale-title">up to 79% off</span>
										<h6 class="title"><a href="shop-list.html">Classic Denim Skinny Jeans</a></h6>
									</div>
									<h6 class="price">
										$80
										<del>$95</del>
									</h6>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- About Section End-->
	
	<!-- Offer Section Start-->
	<section class="content-inner-2">
		<div class="container">	
			<div class="section-head style-1 wow fadeInUp d-flex justify-content-between m-b30" data-wow-delay="0.2s">
				<div class="left-content">
					<h2 class="title">Featured offer for you</h2>
				</div>
				<a href="shop-list.html" class="text-secondary font-14 d-flex align-items-center gap-1">See All 
					<i class="icon feather icon-chevron-right font-18"></i>
				</a>			
			</div>
		</div>
	
		<div class="container-fluid px-3">
			<div class="swiper swiper-product">
				<div class="swiper-wrapper product-style2">
					<div class="swiper-slide">
						<div class="product-box style-2 wow fadeInUp" data-wow-delay="0.4s">
							<div class="product-media" style="background-image: url('images/clothes/1.png');"></div>
							<div class="product-content">
								<div class="main-content">
									<span class="offer">20% Off</span>
									<h2 class="product-name">Luxury Bras</h2>
									<a href="shop-list.html" class="btn btn-outline-secondary btn-rounded btn-lg">Collect Now</a>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="product-box style-2 wow fadeInUp" data-wow-delay="0.6s">
							<div class="product-media" style="background-image: url('images/clothes/2.png');"></div>
							<div class="product-content">
								<div class="main-content">
									<span class="offer">Sale Up to 50% Off</span>
									<h2 class="sub-title1">Summer <span class="year">2024</span></h2>
									<a href="shop-list.html" class="btn btn-outline-secondary btn-rounded btn-lg">Collect Now</a>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="product-box style-2 wow fadeInUp" data-wow-delay="0.8s">
							<div class="product-media" style="background-image: url('images/clothes/3.png');"></div>
							<div class="product-content">
								<div class="main-content">
									<span class="offer">20% Off</span>
									<h2 class="sub-title2">Swimwear<span class="bg-title">Sale</span></h2>
									<a href="shop-list.html" class="btn btn-outline-secondary btn-rounded btn-lg">Collect Now</a>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="product-box style-2 wow fadeInUp" data-wow-delay="1.0s">
							<div class="product-media" style="background-image: url('images/clothes/1.png');"></div>
							<div class="product-content">
								<div class="main-content">
									<span class="offer">20% Off</span>
									<h2 class="product-name">Luxury Bras</h2>
									<a href="shop-list.html" class="btn btn-outline-secondary btn-rounded btn-lg">Collect Now</a>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="product-box style-2 wow fadeInUp" data-wow-delay="1.2s">
							<div class="product-media" style="background-image: url('images/clothes/2.png');"></div>
							<div class="product-content">
								<div class="main-content">
									<span class="offer">Sale Up to 50% Off</span>
									<h2 class="sub-title1">Summer <span class="year">2024</span></h2>
									<a href="shop-list.html" class="btn btn-outline-secondary btn-rounded btn-lg">Collect Now</a>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="product-box style-2 wow fadeInUp" data-wow-delay="1.4s">
							<div class="product-media" style="background-image: url('images/clothes/3.png');"></div>
							<div class="product-content">
								<div class="main-content">
									<span class="offer">20% Off</span>
									<h2 class="sub-title2">Swimwear<span class="bg-title">Sale</span></h2>
									<a href="shop-list.html" class="btn btn-outline-secondary btn-rounded btn-lg">Collect Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Product End-->
		
		<!-- company-box Start-->
		<section class="content-inner-2">
			<div class="container">	
				<div class="section-head style-1 wow fadeInUp d-flex  justify-content-between" data-wow-delay="0.2s">
					<div class="left-content">
						<h2 class="title">Sponsored</h2>
					</div>
					<a href="shop-list.html" class="text-secondary font-14 d-flex align-items-center gap-1">See All 
						<i class="icon feather icon-chevron-right font-18"></i>
					</a>			
				</div>
				<div class="swiper swiper-company">
					<div class="swiper-wrapper ">
						<div class="swiper-slide">
							<div class="company-box style-1 wow fadeInUp" data-wow-delay="0.4s">
								<div class="dz-media">
									<img src="images/company/1.jpg" alt="image" class="company-img">
									<img src="images/company/logo/logo1.png" alt="image" class="logo">
								</div>
								<div class="dz-content">
									<h6 class="title">Outdoor Shoes	</h6>
									<span class="sale-title">Min. 30% Off</span>
								</div>		
							</div>
						</div>
						<div class="swiper-slide">
							<div class="company-box style-1 wow fadeInUp" data-wow-delay="0.6s">
								<div class="dz-media">
									<img src="images/company/2.jpg" alt="image" class="company-img">
									<img src="images/company/logo/logo2.png" alt="image" class="logo">
									<span class="sale-badge">in Store</span>	
								</div>
								<div class="dz-content">
									<h6 class="title">Best Cloths</h6>
									<span class="sale-title">Up To 20% Off</span>
								</div>		
							</div>
						</div>
						<div class="swiper-slide">
							<div class="company-box style-1 wow fadeInUp" data-wow-delay="0.8s">
								<div class="dz-media">
									<img src="images/company/1.jpg" alt="image" class="company-img">
									<img src="images/company/logo/logo3.png" alt="image" class="logo">
								</div>
								<div class="dz-content">
									<h6 class="title">Sports Shoes</h6>
									<span class="sale-title">up to 30% Off</span>
								</div>		
							</div>
						</div>
						<div class="swiper-slide">
							<div class="company-box style-1 wow fadeInUp" data-wow-delay="1.0s">
								<div class="dz-media">
									<img src="images/company/3.jpg" alt="image" class="company-img">
									<img src="images/company/logo/logo4.png" alt="image" class="logo">
									<span class="sale-badge">in Store</span>
								</div>
								<div class="dz-content">
									<h6 class="title">modern jewellery</h6>
									<span class="sale-title">Min. 30% Off</span>
								</div>		
							</div>
						</div>
						<div class="swiper-slide">
							<div class="company-box style-1 wow fadeInUp" data-wow-delay="1.2s">
								<div class="dz-media">
									<img src="images/company/1.jpg" alt="image" class="company-img">
									<img src="images/company/logo/logo1.png" alt="image" class="logo">
								</div>
								<div class="dz-content">
									<h6 class="title">Outdoor Shoes	</h6>
									<span class="sale-title">Min. 30% Off</span>
								</div>		
							</div>
						</div>
						<div class="swiper-slide">
							<div class="company-box style-1 wow fadeInUp" data-wow-delay="1.4s">
								<div class="dz-media">
									<img src="images/company/2.jpg" alt="image" class="company-img">
									<img src="images/company/logo/logo2.png" alt="image" class="logo">
									<span class="sale-badge">in Store</span>	
								</div>
								<div class="dz-content">
									<h6 class="title">Best Cloths</h6>
									<span class="sale-title">Up To 20% Off</span>
								</div>		
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- company-box End-->

		<!-- Blog Start -->
		<section class="content-inner ">
			<div class="container">
				<div class="section-head style-1 wow fadeInUp d-md-flex justify-content-between align-items-center" data-wow-delay="0.1s">
					<div class="left-content">
						<h2 class="title">latest Post</h2>
						<p>Discover the most trending products in Pixio.</p>
					</div>
					<a class="btn btn-secondary " href="blog-archive.html">View All</a>			
				</div>
				<div class="row blog-shap">
					<div class="col-lg-6 col-md-12 col-sm-12 m-lg-b30 m-b50 wow fadeInUp" data-wow-delay="0.1s">
						<div class="dz-card style-1 light">
							<div class="dz-media">
								<img src="images/blog/blogpost-3/pic1.jpg" alt="/">
							</div>
							<div class="dz-info bg-white">
								<div class="dz-meta">
									<ul>
										<li class="post-date">17 May 2023</li>
									</ul>
								</div>
								<h3 class="dz-title">
									<a href="post-standard.html">Trendsetter Chronicles: Unveiling the Latest in Fashion</a>
								</h3>
								<a href="post-standard.html" class="font-14 mt-auto read-btn">Read More 
									<i class="icon feather icon-chevron-right"></i>
								</a>
							</div>
						</div>
					</div> 
					<div class="col-lg-6 col-md-12 col-sm-12 m-lg-b30 m-b50 wow fadeInUp" data-wow-delay="0.1s">
						<div class="row">
							<div class="col-lg-12 col-md-6 m-b30">
								<div class="dz-card blog-half style-7">
									<div class="dz-media">
										<img src="images/blog/blogpost-4/pic2.jpg" alt="/">
									</div>
									<div class="dz-info">
										<div class="dz-meta">
											<ul>
												<li class="post-date">17 May 2022</li>
											</ul>
										</div>
										<h4 class="dz-title">
											<a href="blog-both-sidebar.html">Dress to Impress: Elevate Your Everyday Style</a>
										</h4>
										<a href="post-standard.html" class="font-14 mt-auto read-btn">Read More 
											<i class="icon feather icon-chevron-right"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-6 m-b30">
								<div class="dz-card blog-half style-7">
									<div class="dz-media">
										<img src="images/blog/blogpost-4/pic3.jpg" alt="/">
									</div>
									<div class="dz-info">
										<div class="dz-meta">
											<ul>
												<li class="post-date">17 May 2022</li>
											</ul>
										</div>
										<h4 class="dz-title">
											<a href="blog-both-sidebar.html">Chic & Unique: Personalized Fashion Finds</a>
										</h4>
										<a href="post-standard.html" class="font-14 mt-auto read-btn">Read More 
											<i class="icon feather icon-chevron-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div> 
				</div>	
			</div>
		</section>
		<!-- Blog End -->



@endsection
