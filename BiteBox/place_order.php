<?php
include 'includes/config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cart_data'])) {
    $cartData = json_decode($_POST['cart_data'], true);
   

    foreach ($cartData as $item) {
        $name = $item['name'];
        $price = $item['price'];

        $sql = "INSERT INTO orders (item, price) VALUES ('$name', '$price')";
        mysqli_query($conn, $sql);
    }

    echo "<script>
        alert('Order placed successfully!');
        localStorage.removeItem('cart'); 
        window.location.href = 'dish.php';
    </script>";
}
?>