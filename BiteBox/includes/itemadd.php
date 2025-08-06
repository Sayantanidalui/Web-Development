<?php

if(isset($_POST['ok'])){
    include 'config.php';

    $item_name = $_POST['item_n'];
    $original_price = $_POST['og_price'];
    $discounted_price = $_POST['dis_price'];
    $discount = $_POST['discount'];
    $rating = $_POST['rating'];
    $image = $_FILES['fimg']['name'];


    move_uploaded_file($_FILES['fimg']['tmp_name'],'../img/'.$_FILES['fimg']['name']);

    $sql= "INSERT INTO items (item_name,og_price,rating,img,discount,dis_price) VALUES('$item_name','$original_price','$rating','$image','$discount','$discounted_price')";

    if(mysqli_query($conn,$sql)){
        echo "<script>
        window.location ='../adminpanel/item.php';
        alert('Item added successfully');
        </script>";

    }
    else{
        echo "error".mysqli_error($conn);
    }
}

?>