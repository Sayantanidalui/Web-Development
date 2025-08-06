<?php
session_start();
include 'includes/config.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bitebox Menu</title>
  <link rel="stylesheet" href="dishstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger px-3 sticky-top">
    <div class="container-fluid">

      <!-- Left: Logo -->
      <a class="navbar-brand d-flex align-items-center fw-bold" href="#">
        <i class="fas fa-bowl-rice me-2 fw-bold"></i> BiteBox
      </a>

      <!-- Hamburger -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Center: search -->
      <div class="collapse navbar-collapse justify-content-center" id="mainNavbarCollapse">
        <form class="d-flex mx-auto my-2 my-lg-0" role="search" style="width: 40%;">
          <input class="form-control me-2" type="search" placeholder="Search Your Dishes Here" aria-label="search"
            id="search">
          <button class="btn bg-light fw-bold" type="submit" style="color:rgb(148, 13, 13);">Search</button>
        </form>

        <!--cart icon-->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="cart.php">
              <i class="fas fa-shopping-cart fs-4"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->
  <!--Top dishes start-->
  <h2 class="mb-3 fw-bold text-center mt-3">Our Top Dishes</h2>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <p style="font-size: 20px;"><strong><br>Great Deals!</strong> Get Exciting Offers on Our Top Dishes.</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php

$sql = "SELECT * FROM items";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '<div class="row row-cols-1 row-cols-md-3 g-4 mx-4">';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="col">';
        echo '  <div class="card" data-ingredients="'.$row['Ingredients'].'">';
        echo '    <img src="img/' . $row['img'] . '" class="card-img-top" height="400px" alt="dish">';
        echo '    <div class="card-body">';
        echo '      <div class="text-center">';
        echo '        <h3 class="card-title fw-bold">' . $row['item_name'] . '</h3>';
        echo '        <p class="price"><s>₹' . $row['og_price'] . '</s> ₹' . $row['dis_price'] . 
             ' <span style="color: rgb(177, 110, 10);">(' . $row['discount'] . '% off)</span></p>';
        echo '        <p class="fw-semibold"><i class="fas fa-star" style="color: green;"></i> ' . $row['rating'] . '</p>';
        echo '        <button class="btn btn-danger btn-lg" onclick="addToCart(\'' . $row['item_name'] . '\',' . $row['dis_price'] . ')">Add to Cart</button>';
        echo '      </div>';
        echo '    </div>';
        echo '  </div>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "<p class='text-center'>No items found</p>";
}
?>
  <!--Top dishes end-->
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const searchInput = document.getElementById("search");
    const form = searchInput.closest("form");
    const cards = document.querySelectorAll(".card");

    form.addEventListener("submit", (e) => {
      e.preventDefault();
      const query = searchInput.value.toLowerCase().trim();

      cards.forEach(card => {
        const ingredients = card.dataset.ingredients.toLowerCase().split(",");
        const col = card.closest(".col");

        if (query === "" || ingredients.includes(query)) {
          col.style.display = "block";
        } else {
          col.style.display = "none";
        }
      });
    });

    function addToCart(name, price) {
      let cart = JSON.parse(localStorage.getItem("cart")) || [];
      cart.push({ name, price });
      localStorage.setItem("cart", JSON.stringify(cart));
      Swal.fire({
        icon: 'success',
        title: 'Item Added to Cart!',
        showConfirmButton: false,
        timer: 1200
      });
    }
  </script>
  <!-- SweetAlert2 CDN -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>