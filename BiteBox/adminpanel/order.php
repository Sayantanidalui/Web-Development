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


$sql = "SELECT * FROM orders";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Orders</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<style>
    
    table tr{
        border: 1px solid black;
        text-align: center;
    }
    h1 {
        text-align: center;
       
    }
    table{
        box-shadow: 0 0 0.5rem rgba(10, 187, 31, 0.93);
    }

</style>
<body>
<div class="container mt-5">
    <h1 class="mb-4"> <i class="fa-solid fa-truck"></i> All Orders</h1>
    <table class="table table-bordered">
        <thead class="table-info">
            <tr>
                <th>ID</th>
                <th>Item_Name</th>
                <th>Price</th>
                <th>Order_Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['item'] ?></td>
                    <td><?= $row['price'] ?></td>
                    <td><?= $row['order_time'] ?></td>
                    <td>
                    <a href="../includes/del_orders.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>