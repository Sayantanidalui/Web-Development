<?php

if(isset($_POST['edit'])){
     include 'config.php';
     

    $id= $_POST['id'];
    $item_name = $_POST['item_n'];
    $original_price = $_POST['og_price'];
    $discounted_price = $_POST['dis_price'];
    $discount = $_POST['discount'];
    $rating = $_POST['rating'];
    $image = $_FILES['fimg']['name'];


 move_uploaded_file($_FILES['fimg']['tmp_name'],'../img/'.$_FILES['fimg']['name']);

 $qlr ="UPDATE items SET item_name ='$item_name',og_price='$original_price',dis_price='$discounted_price',discount='$discount',rating='$rating',img='$image' WHERE  id ='$id'";

 if(mysqli_query($conn,$qlr)){
    echo "<script>
        window.location='../adminpanel/view.php';
        alert('data updated');
    </script>";
}
else{
    echo "error" .mysqli_error($conn);
}

     

}
?>