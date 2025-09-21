@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Hero Carousel -->
<section class="carousel" id="carousel">
    <div class="slides">
        <div class="slide" style="background-image: url('https://source.unsplash.com/1600x600/?nature,water');">Welcome</div>
        <div class="slide" style="background-image: url('https://source.unsplash.com/1600x600/?city,night');">Explore</div>
        <div class="slide" style="background-image: url('https://source.unsplash.com/1600x600/?technology');">Innovate</div>
    </div>
    <button class="prev">&#10094;</button>
    <button class="next">&#10095;</button>
</section>

<!-- Features Section -->
<section class="features" id="features">
    <div class="feature">
        <h3>Fast</h3>
        <p>Optimized for lightning speed on all devices.</p>
        <button class="btn" onclick="featureAlert('Fast')">Learn More</button>
    </div>
    <div class="feature">
        <h3>Secure</h3>
        <p>Your data is protected with top-notch security.</p>
        <button class="btn" onclick="featureAlert('Secure')">Learn More</button>
    </div>
    <div class="feature">
        <h3>Responsive</h3>
        <p>Works perfectly on desktops, tablets, and phones.</p>
        <button class="btn" onclick="featureAlert('Responsive')">Learn More</button>
    </div>
</section>

@endsection
