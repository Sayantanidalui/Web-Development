<?php
include 'header.php';
include 'sidebar.php';
include 'topbar.php';
session_start();
include '../includes/config.php';

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin.php ");
    exit();
}

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
        <h3 class="text-center mt-3">Add Item <i class="fa-solid fa-pizza-slice"></i></h3>
        <hr>
        <form action="../includes/itemadd.php" method="POST" enctype="multipart/form-data">
            <div class="col-md-10 col-sm-12 input">

                <label>Item Name</label>
                <input type="text" class="form-control mb-3" name="item_n" id="first" required>

                <label>Original Price</label>
                <input type="number" class="form-control mb-3" name="og_price" required>

                <label>Discounted Price</label>
                <input type="number" class="form-control mb-3" name="dis_price" required>

                <label>Discount (%)</label>
                <input type="number" class="form-control mb-3" name="discount" required>

                <label>Rating</label>
                <input type="number" class="form-control mb-3" name="rating" step="0.1" max="5" min="0" required>

                <label>Image</label>
                <input type="file" class="form-control mb-3" name="fimg"  required>

                <input type="submit" name="ok" value="Add Item" class="btn btn-danger mt-1 mb-2">
                <a href="view.php" class="btn btn-warning mt-2 mb-2">View Item</a>
            </div>
        </form>
    </div>
</div>
