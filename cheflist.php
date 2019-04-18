<?php
	include('header.php');
	include('check.php');
	include_once 'chef.php';
	$chef= new chef();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Cheflist</title>
		<link rel="stylesheet" type="text/css" href="css/apnistyling.css">
	</head>
	
	<body>
	<br><br>
	<div class="container">
		<table>
			<tr>
				<th>Chef_id</th>
				<th>Name</th>
				<th>CNIC</th>
				<th></th>
				<th></th>
			</tr>
			<?php 
				$result= $chef->read();
				if($result->num_rows >0){
					while($row= $result->fetch_assoc()){
						echo "<tr><td>" . $row["chef_id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["cnic"] . "</td></tr>";
					}
				}
				else{
					echo "0 results";
				}
			?>
		</table>
	</div>
	<br><br>
	<section id="contact" class="section-padding">
		<div class="container">
		  <div class="row">
			<div class="col-md-12 text-center">
			  <h1 class="header-h">Add a Chef!!</h1>
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
				<form action="" method="post" role="form" >
					
						<div class="col-lg-12 col-md-12 col-sm-12 contact-form pad-form">
							  <div class="form-group label-floating is-empty">
								<input required type="text" name="name" class="form-control" id="name" placeholder="Chef's Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" autocomplete="off"/>
								<div class="validation"></div>
							  </div>

						</div>
						
						<div class="col-lg-12 col-md-12 col-sm-12 contact-form pad-form">
						  <div class="form-group label-floating is-empty">
							<input required type="email" name="email" class="form-control" id="email" placeholder="email" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation"></div>
						  </div>

						</div>
						
						<div class="col-lg-12 col-md-12 col-sm-12 contact-form pad-form">
						  <div class="form-group label-floating is-empty">
							<input required type="text" name="cnic" class="form-control" id="cnic" placeholder="Chef's CNIC" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
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
			<?php 
				if($_POST){
					require_once 'connection.php';
					$chef->name = $_POST['name'];
					$chef->cnic = $_POST['cnic'];
					if($chef->create()){
						echo"<div class='col-md-12 col-sm-12 alert alert-success'>Chef Added!!</div>";
					}
					else{
						echo"<div class='col-md-12 col-sm-12 alert alert-danger'>Unable to add chef!!</div>";
					}
				}
			
			?>
		  </div>
		</div>
	  </section>
	</body>
</html>
<?php
	include('footer.php');
?>