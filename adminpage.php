<?php
	include('header.php');
	include('check.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin Page</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap4.min.css">
		<link rel="stylesheet" type="text/css" href="css/apnistyling.css">
	</head>
	<body>
		<em><h1 class="inner text-center logo-name">Admin Page</h1></em>
		<br><br>
		<div class="container">
			<div class="row">
				<div class="san">
					<center><img  src="img\dummychef.jpg" height="300" width="300" >
					  <div>
						<h2 class="card-title">Manage Chefs</h2>
						<p class="card-text">Add or Remove chefs and Edit details </p>
						<a href="cheflist.php" class="btn btn-primary">Manage</a>
					  </div></center>
				</div>
	
				<div class="san">
					<center><img  src="img\dummyguy.png" height="300" width="300" >
					  <div>
						<h2 class="card-title">Manage Couriers</h2>
						<p class="card-text">Add or Remove Couriers and Edit details </p>
						<a href="courierlist.php" class="btn btn-primary">Manage</a>
					  </div></center>
				</div>
				
				<div class="san">
					<center><img  src="img\dummy.jpg" height="300" width="300" >
					  <div>
						<h2 class="card-title">Employee History</h2>
						<p class="card-text">Check employement History Of Foodmania</p>
						<a href="emphistory.php" class="btn btn-primary">Manage</a>
					  </div></center>
				</div>
			</div>
		</div>
		<br>
	</body>
</html>
<?php
	include('footer.php');
?>