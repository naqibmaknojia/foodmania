<?php 
	
		if(isset($_POST['login'])){

		
		$formUser = $_POST['name'];
		echo "$formUser";
		$formpw = $_POST['pass'];
		echo "$formpw";
		include('connection.php');
		
		$query="select user_id, name, password, role from users where name='$formUser' and password='$formpw'";
		
		$result= mysqli_query($conn, $query);
		
		if(mysqli_num_rows($result)>0){
			
			while($row= mysqli_fetch_assoc($result)){
				$id=$row["user_id"];
				$name=$row["name"];
				$role=$row["role"];
				session_start();
				$_SESSION['id'] = $id;
				$_SESSION['role'] = $role;
				$_SESSION['name'] = $name;
				
			}
			if($role=="Admin"){
					header("Location: adminpage.php");
			}
			else{
				header("Location: userprofile.php");
			}
	
		}
		else{
			header("Location: home.php");
			echo "invalid login password";
		}
		
	
	}

	/*elseif(isset($_POST['register'])){
		
		$name= $_POST['name'];
		$pass= $_POST['password'];
		require_once 'connection.php';
		$sql="INSERT INTO users(name, password) VALUES('$name','$pass')";
		$result= mysqli_query($conn, $sql);
		if($result){
			echo "<div class='alert alert-success'>Registered Successfully.</div>";
		}
		else{
			echo"<div class='alert alert-danger'>UnSuccesfull Registeration</div>";
		}
	}*/
	
?>
<?php
	include('header.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<!--================================================================-->
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
		  <!-- =======================================================
			Theme Name: Delicious
			Theme URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
			Author: BootstrapMade.com
			Author URL: https://bootstrapmade.com
		  ======================================================= -->
		<!--Picture Fonts Font Awesome-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<title>Home</title>
	</head>
	<body>
	
	<section id="banner">
		
		<div class="bg-color">
		  <div class="continer">
			<div class="row">
			  <div class="inner text-center">
				<h1 class="logo-name">Delicious</h1>
				<h2>Food To fit your lifestyle & health.</h2>
				<p>Specialized in Indian Cuisine!!</p>
			  </div>
			  <div class="inner text-center loginpos" id="contact">
					<h2>SignIn<h2>
					<form action="" method="post" role="form" class="LoginForm">
					
						<div class="col-lg-12 col-md-12 col-sm-12 contact-form pad-form">
							  <div class="form-group label-floating is-empty">
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" autocomplete="off"/>
								<div class="validation"></div>
							  </div>

						</div>
						
						<div class="col-lg-12 col-md-12 col-sm-12 contact-form pad-form">
						  <div class="form-group label-floating is-empty">
							<input type="password" name="pass" class="form-control" id="password" placeholder="Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation"></div>
						  </div>

						</div>
						
						<div class="col-md-12 btnpad">
						  <div class="contacts-btn-pad">
							<button type="submit" name="login" class="contacts-btn">Login</button>
						  </div>
						</div>
						
					</form>
				</div>
			</div>
		  </div>
		</div>
	</section>
		<!-- contact -->
	  <section id="contact" class="section-padding">
		<div class="container">
		  <div class="row">
			<div class="col-md-12 text-center">
			  <h1 class="header-h">Register Now Its Free!!</h1>
			  <p class="header-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
				<br>nibh euismod tincidunt ut laoreet dolore magna aliquam. </p>
			</div>
		  </div>
		  <div class="row msg-row">
			<div class="col-md-4 col-sm-4 mr-15">
			  <div class="media-2">
				<div class="media-left">
				  <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
				</div>
				<div class="media-body">
				  <h4 class="dark-blue regular">Phone Numbers</h4>
				  <p class="light-blue regular alt-p">+440 875369208 - <span class="contacts-sp">Phone Booking</span></p>
				</div>
			  </div>
			  <div class="media-2">
				<div class="media-left">
				  <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
				</div>
				<div class="media-body">
				  <h4 class="dark-blue regular">Opening Hours</h4>
				  <p class="light-blue regular alt-p"> Monday to Friday 09.00 - 24:00</p>
				  <p class="light-blue regular alt-p">
					Friday and Sunday 08:00 - 03.00
				  </p>
				</div>
			  </div>
			</div>
			<div class="col-md-8 col-sm-8">
			
			<!-- Registeration form
			  
			   Registeration from ends here-->
			   <form action="register.php" method="post" role="form" >
					
						<div class="col-lg-12 col-md-12 col-sm-12 contact-form pad-form">
							  <div class="form-group label-floating is-empty">
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" autocomplete="off"/>
								<div class="validation"></div>
							  </div>

						</div>
						
						<div class="col-lg-12 col-md-12 col-sm-12 contact-form pad-form">
						  <div class="form-group label-floating is-empty">
							<input type="email" name="email" class="form-control" id="email" placeholder="email" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation"></div>
						  </div>

						</div>
						
						<div class="col-lg-12 col-md-12 col-sm-12 contact-form pad-form">
						  <div class="form-group label-floating is-empty">
							<input type="password" name="password" class="form-control" id="password" placeholder="Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation"></div>
						  </div>

						</div>
						
						<div class="col-md-12 btnpad">
						  <div class="contacts-btn-pad">
							<button type="submit" name="register" class="contacts-btn">register</button>
						  </div>
						</div>
						
				</form>
			</div>
		  </div>
		</div>
	  </section>
	  <!-- / contact -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>

	</body>
</html>
<?php
	include('footer.php');
?>