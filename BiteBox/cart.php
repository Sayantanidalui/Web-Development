<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Your Cart</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="cartstyle.css">
</head>

<body class="bg-light">

  <div class="container py-5">
    <h2 class="text-center mb-4">🛒 Your Cart</h2>

    <div id="cart-items" class="mb-4"></div>

    <h5 class="text-end fw-bold">Total: ₹ <span id="total-price">0</span></h5>

    <div class="form-check">
      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
      <label class="form-check-label" for="exampleRadios1">
        Pay Online
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
      <label class="form-check-label" for="exampleRadios2">
         Cash On Delivery
      </label>
    </div>
  

  <form id="orderForm" method="POST" action="place_order.php">
    <input type="hidden" name="cart_data" id="cartData">
    <button type="submit" class="btn btn-success mt-3" onclick="placeorder()">Place Order</button>
  </form>

  </div>
  </div>

  <script>
    function loadCart() {
      const cart = JSON.parse(localStorage.getItem("cart")) || [];
      const cartItems = document.getElementById("cart-items");
      const totalPrice = document.getElementById("total-price");

      cartItems.innerHTML = "";
      let total = 0;

      if (cart.length === 0) {
        cartItems.innerHTML = "<p class='text-center text-muted'>Your cart is empty.</p>";
        totalPrice.textContent = '0';
        return;
      }

      cart.forEach(item => {
        total += item.price;
        const line = document.createElement("p");
        line.className = "mb-2";
        line.textContent = `${item.name} — ₹${item.price}`;
        cartItems.appendChild(line);
      });

      totalPrice.textContent = total;
    }

    function placeOrder() {
      localStorage.removeItem("cart");
      loadCart();
    }
    loadCart();


   
    const cart = JSON.parse(localStorage.getItem("cart")) || [];

    
    document.getElementById('orderForm').addEventListener('submit', function () {
      document.getElementById('cartData').value = JSON.stringify(cart);
    });


  </script>
</body>

</html>