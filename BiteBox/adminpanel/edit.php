<?php
include 'header.php';
include 'sidebar.php';
include 'topbar.php';



$id=$_GET['id'];
include "../includes/config.php";
$sql ="SELECT * FROM items WHERE id='$id'";
$tbl = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($tbl);
?>


<style>
    .input{
        margin-left: 2%;
    }
    .card{
        border: 1px solid red;
        box-shadow: 0 0 0.3rem red;
    }
    #first{
        margin-left: -0.3%;
        margin-top: 0.5%;
        width: 100%;
    }
</style>
<div class="container-fluid">
    <div class="card mt-5">
        <h3 class="text-center mt-3">Edit Item <i class="fa-solid fa-pizza-slice"></i></h3>
        <hr>
        <form action="../includes/update.php" method="POST" enctype="multipart/form-data">
            <div class="col-md-10 col-sm-12 input">

                <label>Item Name</label>
                <input type="text" class="form-control mb-3" name="item_n" id="first" value="<?php echo $row['item_name'];?>">

                <label>Original Price</label>
                <input type="number" class="form-control mb-3" name="og_price"value="<?php echo $row['og_price'];?>">

                <label>Discounted Price</label>
                <input type="number" class="form-control mb-3" name="dis_price" value="<?php echo $row['dis_price'];?>">

                <label>Discount (%)</label>
                <input type="number" class="form-control mb-3" name="discount" value="<?php echo $row['discount'];?>">

                <label>Rating</label>
                <input type="number" class="form-control mb-3" name="rating" step="0.1" max="5" min="0" value="<?php echo $row['rating'];?>">

                <label>Image</label>
                <input type="file" class="form-control mb-3" name="fimg"  required>
                
                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
					
					<input type="submit" name="edit" value="Update now" class="btn btn-warning mt-0 mb-2">
            </div>
        </form>
    </div>
</div>
