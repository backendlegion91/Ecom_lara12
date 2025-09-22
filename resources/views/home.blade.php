@extends('layouts.app')

@section('title', 'Home')

@section('content')

	<!--Swiper Banner Start -->
	@include('pages.home_banner')	
	<!--Swiper Banner End-->
		
	<!-- abouts-Secthion Start -->
@include('pages.dlcollection')
	<!-- abouts-Secthion End -->

	<!-- Products  Section Start-->
@include('pages.mproducts')
	<!-- Products Section Start-->
	
	<!-- Collection Section Start -->
@include('pages.summersale')
	<!-- Collection Section End-->
		
	<!-- About Section Start-->
  @include('pages.allproducts')
	<!-- About Section End-->
	
	<!-- Offer Section Start-->
  @include('pages.featureoffer')
	<!-- Product End-->
		
		<!-- company-box Start-->
	 @include('pages.sponsored')
		<!-- company-box End-->

		<!-- Blog Start -->
  @include('pages.blog')
		<!-- Blog End -->



@endsection
