<?php
	include('header.php');
	require_once('connection.php');
	include('check.php');
	//session_start();
	$name= $_SESSION['name'];
	$id= $_SESSION['id'];	
?>
 <!DOCTYPE html>
 <html>
	<head>
		<title>User profile</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap4.min.css">
		<link rel="stylesheet" type="text/css" href="css/apnistyling.css">
	</head>
	<body>
		<div class="alert alert-secondary" role="alert">
			<center><em><h2>Hello <?php echo$name?></h2></em></center></div>
		<div class="container">
			<div class="row">
				<div class="san" style="margin-left:150px;">
				<center><img src="img\dummychef.jpg" height="300" width="300">
				<div>
					<h2>Select items</h2>
					<p>Go ahead!!! Stack your perfect platter</p>
					<a href="placeorder.php" class="btn btn-primary">PlaceOrder</a>
				</div></center>
				</div>
				<div class="san" style="margin-left:150px;">
				<center><img src="img\dummychef.jpg" height="300" width="300">
				<div>
					<h2>Order logs</h2>
					<p>See your previous Orders</p>
					<a href="billlog.php" class="btn btn-primary">GO!!</a>
				</div></center>
				</div>
			</div>
			<br>
		</div>
		
	</body>
 </html>

<?php
	include('footer.php');
?>