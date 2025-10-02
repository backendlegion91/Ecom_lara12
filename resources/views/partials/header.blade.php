	<header class="site-header mo-left header style-1 header-transparent">		
		<!-- Main Header -->
		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="main-bar clearfix">
				<div class="container-fluid clearfix d-lg-flex d-block">
					<!-- Website Logo -->
					<div class="logo-header logo-dark me-md-5">
						<a href="index.html"><img src="images/logo.svg" alt="logo"></a>
					</div>
					
					<!-- Nav Toggle Button -->
				
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button"
					data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
					aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
					
				<!-- Main Nav -->
				<div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
					<div class="logo-header logo-dark">
						<a href="index.html"><img src="images/logo.svg" alt=""></a>
					</div>
					<ul class="nav navbar-nav">
						<li class="has-mega-menu sub-menu-down">
							<a href="javascript:void(0);"><span>Home</span><i class="fas fa-chevron-down tabindex" ></i></a>
						</li>
						<li class="has-mega-menu sub-menu-down">
							<a href="javascript:void(0);"><span>Shop</span><i class="fas fa-chevron-down tabindex" ></i></a>
						</li>
						<li class="has-mega-menu sub-menu-down"><a href="javascript:void(0);"><span>Blog</span><i class="fas fa-chevron-down tabindex"></i></a>
						</li>
						<li class="has-mega-menu sub-menu-down"><a href="javascript:void(0);"><span>Portfolio</span><i class="fas fa-chevron-down tabindex"></i></a>
						</li>
						<li class="has-mega-menu sub-menu-down"><a href="javascript:void(0);"><span>Pages</span><i class="fas fa-chevron-down tabindex"></i></a>
						</li>
						{{-- <li class="sub-menu-down"><a href="javascript:void(0);" class="after-remover">My Account <span class="badge badge-sm badge-success ms-1">New</span><i class="fas fa-chevron-down tabindex"></i></a>
							<ul class="sub-menu">						
								<li><a href="account-dashboard.html">Dashboard</a></li>
								<li><a href="account-orders.html">Orders</a></li>
								<li><a href="account-order-details.html">Orders Details</a></li>
								<li><a href="account-order-confirmation.html">Orders Confirmation</a></li>
								<li><a href="account-downloads.html">Downloads</a></li>
								<li><a href="account-return-request.html">Return Request</a></li>
								<li><a href="account-return-request-detail.html">Return Request Detail</a></li>
								<li><a href="account-refund-requests-confirmed.html">Return Request Confirmed</a></li>
								<li><a href="account-profile.html">Profile</a></li>
								<li><a href="account-address.html">Address</a></li>
								<li><a href="account-shipping-methods.html">Shipping methods</a></li>
								<li><a href="account-payment-methods.html">Payment Methods</a></li>
								<li><a href="account-review.html">Review</a></li>
								<li><a href="account-billing-address.html">Billing address</a></li>
								<li><a href="account-shipping-address.html">Shipping address</a></li>
								<li><a href="account-cancellation-requests.html">Cancellation Requests</a></li>
								
							</ul>
						</li> --}}
					</ul>
					
					<div class="dz-social-icon">
						<ul>
							<li><a class="fab fa-facebook-f" target="_blank" href="https://www.facebook.com/dexignzone"></a></li>
							<li><a class="fab fa-twitter" target="_blank" href="https://twitter.com/dexignzones"></a></li>
							<li><a class="fab fa-linkedin-in" target="_blank" href="https://www.linkedin.com/showcase/3686700/admin/"></a></li>
							<li><a class="fab fa-instagram" target="_blank" href="https://www.instagram.com/dexignzone/"></a></li>
						</ul>
					</div>
				</div>
				<!-- EXTRA NAV -->
				<div class="extra-nav">
					<div class="extra-cell">						
						<ul class="header-right">
							<li class="nav-item login-link">
								<a class="nav-link" href="shop-my-account.html">
									Login / Register
								</a>
							</li>
							<li class="nav-item search-link">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
									<i class="iconly-Light-Search"></i>
								</a>
							</li>
							<li class="nav-item wishlist-link">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
									<i class="iconly-Light-Heart2"></i>
								</a>
							</li>
							<li class="nav-item cart-link">
								<a href="javascript:void(0);" class="nav-link cart-btn"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
									<i class="iconly-Broken-Buy"></i>
									<span class="badge badge-circle">5</span>
								</a>
							</li>
							<li class="nav-item filte-link">
								<a href="javascript:void(0);" class="nav-link filte-btn"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft">
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 13" fill="none">
										<rect y="11" width="30" height="2" fill="black"/>
										<rect width="30" height="2" fill="black"/>
									</svg>
								</a>
							</li>
						</ul>
					</div>
				</div>
				</div>
			</div>
		</div>
		<!-- Main Header End -->
		@include('partials.sidebar')
		

	</header>