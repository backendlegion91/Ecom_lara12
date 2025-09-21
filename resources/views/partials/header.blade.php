<!-- Top Info Bar -->
<div class="top-bar">
  <div class="container d-flex justify-content-between">
    <div>
      <span>Free Shipping on orders over $50!</span>
      <a href="#">Contact Us</a>
      <a href="#">Help</a>
    </div>
    <div>
      <a href="#">Login</a>
      <a href="#">Register</a>
    </div>
  </div>
</div>

<!-- Main Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand fw-bold fs-5" href="#">ShopLogo</a>

    <!-- Hamburger menu -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
      aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar content -->
    <div class="collapse navbar-collapse" id="navbarContent">
      <!-- Navigation Links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Electronics</a></li>
            <li><a class="dropdown-item" href="#">Fashion</a></li>
            <li><a class="dropdown-item" href="#">Home & Garden</a></li>
            <li><a class="dropdown-item" href="#">Sports</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      </ul>

      <!-- Action Icons -->
      <div class="d-flex align-items-center action-icons mt-2 mt-lg-0 mb-2 mb-lg-0">
        <a href="#" class="btn me-3">
          <i class="bi bi-bar-chart fs-5" aria-label="Compare"></i>
          {{-- <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">2</span> --}}
        </a>
        <a href="#" class="btn me-3">
          <i class="bi bi-heart fs-5" aria-label="Wishlist"></i>
          {{-- <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">4</span> --}}
        </a>
        <a href="#" class="btn me-3">
          <i class="bi bi-cart fs-5" aria-label="Cart"></i>
          {{-- <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">5</span> --}}
        </a>
        <div class="dropdown">
          <a href="#" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle" aria-label="Account"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#">Login</a></li>
            <li><a class="dropdown-item" href="#">Register</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>
