<?php

include "config.php";

$id= $_GET['id'];

$qr="DELETE FROM items WHERE id='$id'";

if(mysqli_query($conn,$qr)){
    echo "<script>
        window.location='../adminpanel/view.php';
        alert('data delete');
    </script>";
}
else{
    echo "error" .mysqli_error($conn);
}