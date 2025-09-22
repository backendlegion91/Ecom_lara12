@extends('layouts.app')

@section('title', 'Home')

@section('content')

 <section class="bg-light py-5">
  <div class="container">
    <div class="row">
      <!-- Left Side: Category Listing with Dropdowns -->
      <div class="col-lg-4 mb-4">
        <h5 class="fw-bold mb-3">Categories</h5>
        <ul class="list-unstyled">
          <li class="mb-2">
            <a class="text-dark text-decoration-none d-flex justify-content-between align-items-center" 
               data-bs-toggle="collapse" href="#electronicsSub" role="button" aria-expanded="false" aria-controls="electronicsSub">
              Electronics <i class="bi bi-chevron-down"></i>
            </a>
            <ul class="collapse list-unstyled ps-3 mt-2" id="electronicsSub">
              <li><a href="#" class="text-dark text-decoration-none d-block mb-1">Mobiles</a></li>
              <li><a href="#" class="text-dark text-decoration-none d-block mb-1">Laptops</a></li>
              <li><a href="#" class="text-dark text-decoration-none d-block mb-1">Cameras</a></li>
            </ul>
          </li>

          <li class="mb-2">
            <a class="text-dark text-decoration-none d-flex justify-content-between align-items-center" 
               data-bs-toggle="collapse" href="#fashionSub" role="button" aria-expanded="false" aria-controls="fashionSub">
              Fashion <i class="bi bi-chevron-down"></i>
            </a>
            <ul class="collapse list-unstyled ps-3 mt-2" id="fashionSub">
              <li><a href="#" class="text-dark text-decoration-none d-block mb-1">Men</a></li>
              <li><a href="#" class="text-dark text-decoration-none d-block mb-1">Women</a></li>
              <li><a href="#" class="text-dark text-decoration-none d-block mb-1">Kids</a></li>
            </ul>
          </li>

          <li class="mb-2">
            <a class="text-dark text-decoration-none d-flex justify-content-between align-items-center" 
               data-bs-toggle="collapse" href="#homeSub" role="button" aria-expanded="false" aria-controls="homeSub">
              Home & Garden <i class="bi bi-chevron-down"></i>
            </a>
            <ul class="collapse list-unstyled ps-3 mt-2" id="homeSub">
              <li><a href="#" class="text-dark text-decoration-none d-block mb-1">Furniture</a></li>
              <li><a href="#" class="text-dark text-decoration-none d-block mb-1">Decor</a></li>
              <li><a href="#" class="text-dark text-decoration-none d-block mb-1">Garden</a></li>
            </ul>
          </li>

          <li class="mb-2">
            <a class="text-dark text-decoration-none d-flex justify-content-between align-items-center" 
               data-bs-toggle="collapse" href="#sportsSub" role="button" aria-expanded="false" aria-controls="sportsSub">
              Sports <i class="bi bi-chevron-down"></i>
            </a>
            <ul class="collapse list-unstyled ps-3 mt-2" id="sportsSub">
              <li><a href="#" class="text-dark text-decoration-none d-block mb-1">Fitness</a></li>
              <li><a href="#" class="text-dark text-decoration-none d-block mb-1">Outdoor</a></li>
            </ul>
          </li>
        </ul>
      </div>

      <!-- Right Side: Banners -->
      <div class="col-lg-8">
        <div class="row g-3">
          <div class="col-md-6">
            <img src="https://via.placeholder.com/600x200?text=Banner+1" class="img-fluid rounded" alt="Banner 1">
          </div>
          <div class="col-md-6">
            <img src="https://via.placeholder.com/600x200?text=Banner+2" class="img-fluid rounded" alt="Banner 2">
          </div>
          <div class="col-md-6">
            <img src="https://via.placeholder.com/600x200?text=Banner+3" class="img-fluid rounded" alt="Banner 3">
          </div>
          <div class="col-md-6">
            <img src="https://via.placeholder.com/600x200?text=Banner+4" class="img-fluid rounded" alt="Banner 4">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection
