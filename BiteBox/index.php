<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Food Ordering</title>
  <link rel="stylesheet" href="style.css">
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger px-3 sticky-top">
    <div class="container-fluid">

      <!-- Left: Logo -->
      <a class="navbar-brand d-flex align-items-center fw-bold" href="..">
        <i class="fas fa-bowl-rice me-2 fw-bold"></i> BiteBox
      </a>

      <!-- Hamburger -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Center: Menu Items -->
      <div class="collapse navbar-collapse justify-content-center" id="mainNavbarCollapse">
        <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
          <li class="nav-item mx-4 fw-bold navmenu"><a class="nav-link text-white" href="#home">Home</a></li>
          <li class="nav-item mx-4 fw-bold navmenu"><a class="nav-link text-white" href="#about">About</a></li>
          <li class="nav-item mx-4 fw-bold navmenu"><a class="nav-link text-white" href="dish.php">Menu</a></li>
          <li class="nav-item mx-4 fw-bold navmenu"><a class="nav-link text-white" href="#footer">Contact</a></li>
        </ul>

        <!-- Right-side icons  -->
        <ul class="navbar-nav">
          <li class="nav-item dropdown mx-4">
            <a class="nav-link dropdown-toggle text-white" href="#" id="userDropdown" role="button"
              data-bs-toggle="dropdown">
              <i class="fas fa-user"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="auth/signup.php">Sign Up</a></li>
              <li><a class="dropdown-item" href="auth/login.php">Login</a></li>
              <li><a class="dropdown-item" href="auth/logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!--Slider start-->
  <div class="container-fluid" id="home">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="custom-slide">
            <div class="row custom-row">
              <div class="col-md-5 offset-md-1 text-section">
                <h2>Hot Deals. Hotter Meals</h2>
                <p>From Biryani to Burgers<br>- We Have It All</p>
                <a href="dish.php" class="btn btn-danger btn-lg fw-bold">View Menu</a>
              </div>
              <div class="col-md-6 image-section text-end">
                <img src="assets/slider1.png" alt="burger" class="img-fluid burger-img">
              </div>
            </div>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="custom-slide bg-white">
            <div class="row align-items-center">
              <div class="col-md-5 offset-md-1 text-section">
                <h2>Hungry?</h2>
                <p>Save more on your favorite dishes every day.</p>
                <a href="dish.php" class="btn btn-danger btn-lg fw-bold">View Menu</a>
              </div>
              <div class="col-md-6 image-section text-end">
                <img src="assets/slider2.png" alt="burger" class="img-fluid dosa-img">
              </div>
            </div>
          </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="custom-slide bg-white">
            <div class="row align-items-center">
              <div class="col-md-5 offset-md-1 text-section">
                <h2>Food At Your Fingertips.</h2>
                <p>Order In Seconds.<br>Delivered in Minutes.</p>
                <a href="dish.php" class="btn btn-danger btn-lg fw-bold">View Menu</a>
              </div>
              <div class="col-md-6 image-section text-end">
                <img src="assets/slider3.png" alt="burger" class="img-fluid icecream-img">
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" style="filter: invert(1);" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" style="filter: invert(1);" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!--Slider end-->

  <!--Feature start-->
  <section class="features-section py-5">
    <div class="container text-center">
      <h2 class="mb-4 fw-bold">Why Choose Us?</h2>

      <div class="row g-4">

        <!-- Feature 1 -->
        <div class="col-md-4">
          <div class="card red-border shadow-sm h-100">
            <div class="card-body">
              <i class="fa-solid fa-truck-fast fa-2x text-danger mb-3"></i>
              <h5 class="card-title fw-semibold">Fast Delivery</h5>
              <p class="card-text">Hot and fresh meals delivered to your doorstep in minutes.</p>
            </div>
          </div>
        </div>

        <!-- Feature 2 -->
        <div class="col-md-4">
          <div class="card red-border shadow-sm h-100">
            <div class="card-body">
              <i class="fa-solid fa-utensils fa-2x text-success mb-3"></i>
              <h5 class="card-title fw-semibold">Wide Variety</h5>
              <p class="card-text">Choose from hundreds of dishes across all cuisines.</p>
            </div>
          </div>
        </div>

        <!-- Feature 3 -->
        <div class="col-md-4">
          <div class="card red-border shadow-sm h-100">
            <div class="card-body">
              <i class="fa-solid fa-wallet fa-2x text-primary mb-3"></i>
              <h5 class="card-title fw-semibold">Great Deals</h5>
              <p class="card-text">Enjoy unbeatable offers and discount on every order.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--feature end-->
  <!--About start-->
  <section class="about-section py-5" id="about">
    <div class="container">

      
      <div class="row align-items-center mb-5">
        <div class="col-md-6">
          <img src="assets/about1.jpg" class="img-fluid rounded-sm about-img" alt="About Foodie">
        </div>
        <div class="col-md-6">
          <h2 class="text-center">About BiteBox</h2>
          <p>BiteBox is a simple and smart online food ordering system designed to make your mealtime easier and faster. It lets you explore delicious meals, view menus, and place orders from the comfort of your home. Whether it's a quick snack or a full-course meal, BiteBox connects you with great food in just a few clicks.
           </p>

          <p>
          With a clean interface, wide variety of dishes, and responsive design, BiteBox helps both customers and admins manage food orders efficiently. From adding new dishes to checking placed orders, every feature is built to deliver a smooth experience.
          </p>
        </div>
      </div>

      
      <div class="row align-items-center flex-md-row-reverse">
        <div class="col-md-6">
          <img src="assets/about2.jpg" class="img-fluid rounded-sm about-img" alt="How it works">
        </div>
        <div class="col-md-6">
          <h2 class="text-center">How It Works</h2>
          <p>
           Using BiteBox is easy and user-friendly. Just sign up, log in, and browse the food menu. Add your favorite dishes to the cart, choose a payment option, and place your order in seconds. With BiteBox, great food is never more than a few taps away.It makes BiteBox your go-to solution for online food ordering
          </p>
        </div>
      </div>

    </div>
  </section>
  <!--About End-->
  <!--menu start-->
  <section class="py-5 text-center">
    <div class="container">
      <h2 class="mb-4 fw-bold">Explore Our Menu</h2>
      <div class="row justify-content-center align-items-center g-4">

        <!-- Item Start -->
        <div class="col-4 col-sm-3 col-md-2 mb-4">
          <img src="assets/menu1.png" class="img-fluid rounded-circle " alt="Biryani">
          <p class="mt-2">Biryani</p>
        </div>

        <div class="col-4 col-sm-3 col-md-2 mb-4">
          <img src="assets/menu2.png" class="img-fluid rounded-circle " alt="paratha">
          <p class="mt-2"> Paratha</p>
        </div>

        <div class="col-4 col-sm-3 col-md-2 mb-4">
          <img src="assets/menu3.png" class="img-fluid rounded-circle" alt="Pizza">
          <p class="mt-2">Pizza</p>
        </div>

        <div class="col-4 col-sm-3 col-md-2 mb-4">
          <img src="assets/menu4.png" class="img-fluid rounded-circle  " alt="chinese">
          <p class="mt-2">Chinese</p>
        </div>

        <div class="col-4 col-sm-3 col-md-2 mb-4">
          <img src="assets/menu5.png" class="img-fluid rounded-circle " alt="Dessert">
          <p class="mt-2">Dessert</p>

        </div>
      </div>
    </div>
    <div class="text-center mt-2 mb-0"><a href="dish.php" class="btn btn-outline-danger btn-lg">View More Menu<i
          class="fas fa-arrow-right ms-2"></i>
      </a></div>
  </section>
  <!--menu end-->
  <!--review-->
  <div id="carouselExampleControls" class="carousel slide reviewsection" data-bs-ride="carousel">
    <div class="carousel-inner mt-0">
      <div class="carousel-item active">
        <div class="card text-center border-danger">
          <div class="card-header text-bg-danger title">
            Customer Review
          </div>
          <div class="card-body text-bg-light">
            <h3 class="card-title fw-bold">Rohan Saw</h3>
            <p class="card-text review">"Tried the Pizza for the first time from BiteBox. Loved it !"</p>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
          </div>
          <div class="card-footer text-bg-secondary">
            2 days ago
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card text-center border-danger">
          <div class="card-header  text-bg-danger title">
            Customer Review
          </div>
          <div class="card-body text-bg-light">
            <h3 class="card-title fw-bold">Sneha Jha</h3>
            <p class="card-text review">"Affordable, tasty, and fresh! My go-to for weekend treats"</p>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star-half-alt text-warning"></i>
          </div>
          <div class="card-footer text-bg-secondary">
            3 days ago
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card text-center border-danger">
          <div class="card-header  text-bg-danger title">
            Customer Review
          </div>
          <div class="card-body text-bg-light">
            <h3 class="card-title fw-bold">Aarav Roy</h3>
            <p class="card-text review">"Absolutely delicious! The biriyani was flavorful."</p>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star-half-alt text-warning"></i>
          </div>
          <div class="card-footer text-bg-secondary">
            4 days ago
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!--review end-->
  <!--footer start-->
  <div id="footer">
    <div id="footer-content">
      <ul id="list1">
        <li>Blog</li>
        <li>Privacy Policy</li>
        <li>FAQs</li>
        <li>About Us</li>
      </ul>
      <ul id="list2">
        <li>Blog</li>
        <li>Privacy Policy</li>
        <li>FAQs</li>
        <li>About Us</li>
      </ul>
      <ul id="list3">
        <li>Contact Us</li>
        <li>biteboxsite@gmail.com</li>
        <li>https://BiteBox.com</li>
        <li>
          <!-- Phone -->
          <i class="fas fa-phone fa-lg me-3"></i>
          <!-- Instagram -->
          <i class="fab fa-instagram fa-lg me-3"></i>
          <!-- Facebook -->
          <i class="fab fa-facebook fa-lg"></i>
        </li>
      </ul>
    </div>
    <p id="last">©www.BiteBox.com. All Rights Reserved.</p>
  </div>
  <!--footer end-->
  <!-- Bootstrap 5 JS Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>