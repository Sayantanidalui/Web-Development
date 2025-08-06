<?php

include 'header.php';
include 'sidebar.php';
include 'topbar.php';

?>
<style>
	.card-f{
		height: 130px;
		background-color: rgb(202, 22, 22);
	}
	.canva{
		display: flex;
		justify-content: center;
		color: black;
	}
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="container-fluid">
	<div class="row mt-4">
		<div class="col-md-3 col-sm-12 mt-4">
			<div class="card-f">
				<h5 class="text-white text-center"><i class="fa-solid fa-arrow-trend-up"></i> Total Orders</h5>
				<p class="text-white text-center"><b> 100 </b></p>
			</div>
		</div>

		<div class="col-md-3 col-sm-12 mt-4">
			<div class="card-f">
				<h5 class="text-white text-center"><i class="fa-solid fa-user-group"></i> Users</h5>
				<p class="text-white text-center"><b> 140 </b></p>
			</div>
		</div>

		<div class="col-md-3 col-sm-12 mt-4">
			<div class="card-f">
				<h5 class="text-white text-center"><i class="fa-solid fa-burger"></i> Items</h5>
				<p class="text-white text-center"><b> 300 </b></p>
			</div>
		</div>

		<div class="col-md-3 col-sm-12 mt-4">
			<div class="card-f">
				<h5 class="text-white text-center"><i class="fa-solid fa-money-bill-1-wave"></i> Payment</h5>
				<p class="text-white text-center"><b> 20,560 </b></p>
			</div>
		</div>

	</div>
</div>
<div style="width: 820px; height:450px; margin-top: 1rem; margin-left: 12rem;" class="canva">
<canvas id="myChart"></canvas>
</div>
<script>
	const ctx = document.getElementById("myChart").getContext("2d");
new Chart(ctx, {
  type: "bar",
  data: {
    labels: ["Pizza", "Burger", "Chinese", "Snacks", "Biryani"],
    datasets: [{
      label: "Item sold",
      data: [10, 15, 6, 9, 12],
      backgroundColor: "#8B0000" ,
      barThickness: 60 
    }]
  },
  options: {
    responsive: false,
    plugins: {
      legend: {
        labels: {
          color: "black"  
        }
      }
    },
    scales: {
      x: {
        title: {
          display: true,
          text: "Food Items",
          color: "black"
        },
        ticks: {
          color: "black"
        }
      },
      y: {
        title: {
          display: true,
          text: "Quantity Sold",
          color: "black"
        },
        ticks: {
          color: "black"
        }
      }
    }
  }
});
</script>