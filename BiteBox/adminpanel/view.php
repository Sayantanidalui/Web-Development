<?php

include 'header.php';
include 'sidebar.php';
include 'topbar.php';

?>
<div class="container-fluid card mt-5">
    <div class="row">
        <div class="col-12 table-responsive">
<table class="table table-bordered text-center mt-2">
    <tr>
        <th>Id</th>
        <th>Item Name</th>
        <th>Original Price</th>
        <th>Discounted Price</th>
        <th>Discount (%)</th>
        <th>Rating</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    <?php
        include "../includes/config.php";
        
        $sql="SELECT * FROM items";
        $tbl= mysqli_query($conn,$sql);
        $i=1;
        if(mysqli_num_rows($tbl)>0){
            while($row = mysqli_fetch_array($tbl)){
                ?>
                <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['item_name'];?></td>
        <td><?php echo $row['og_price'];?></td>
        <td><?php echo $row['dis_price'];?></td>
        <td><?php echo $row['discount'];?></td>
        <td><?php echo $row['rating'];?></td>
        <td>
            <img src="../img/<?php echo $row['img'];?>" alt='...' height="50px" width="100px">
        </td>
        <td>
            <a href="edit.php?id=<?php echo $row['id'];?>" class="badge bg-primary">Edit</a>
             <a href="../includes/del_item.php?id=<?php echo $row['id'];?>" class="badge bg-danger">Delete</a>
        </td>
    </tr>
            <?php

            }
        }

    ?>

</table>
</div>
        </div>
    </div>


<style>
    .card1{
        height: 450px;
        background-color: #fff;
    }
    
</style>