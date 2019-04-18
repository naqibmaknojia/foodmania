<?php 

session_start();
$id= $_SESSION['id'];
$name= $_SESSION['name'];
?>
<!DCOTYPE html>
<html>
	<head>

		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <title>Delicious</title>
		  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
		  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

		  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
		  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		  <link rel="stylesheet" type="text/css" href="css/bootstrap4.min.css">
		  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		  <link rel="stylesheet" type="text/css" href="css/style.css"> 
		   <!--=======================================================
			Theme Name: Delicious
			Theme URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
			Author: BootstrapMade.com
			Author URL: https://bootstrapmade.com
		  ======================================================= -->
	</head>
	<body>
	<!--Header starts here-->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
		  <a class="navbar-brand" href="index.html">FoodMania</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <!--<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
				<a class="nav-link" href="#">Home</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">About</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Contact</a>
			  </li>
			</ul>
			<ul class="navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fas fa-user-plus"></i> Sign Up</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fas fa-user"></i> LogIn</a>
				</li>
			</ul>
		  </div>-->
		  <ul class="navbar-nav navbar-right">
				<li class="nav-item">
					<a href="logout.php"><button class="btn btn-primary">LOGOUT</button></a>
				</li>
				
			</ul
		  </div>
		</nav>
		<!--Header Ends here-->
	</body>

</html>	