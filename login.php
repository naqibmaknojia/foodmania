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
			header("Location: login.php");
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
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Hello, world!</title>
  </head>
  <body>
    


<nav class="navbar navbar-default"> FOOD MANIA
    
</nav>
<br><br>
<div class="wthree-form">
    <!--728x90-->
    <h2>LOGIN TO HAVE SOME FLOOD OF FOOD</h2>
    <div class="w3l-login form">
    <!--728x90-->
      <!--<form action="" method="post">
        <div class="form-sub-w3">
          <input type="text" name="Username" placeholder="Username" required=""/>
        </div>
          <div class="form-sub-w3">
          <input type="password" name="Password" placeholder="Password" required=""/>
        </div>
        
        <div class="submit-agileits">
          <input type="submit" value="Login" name="login">
        </div>
        
      </form>-->
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
  
  



    <!-- Optional JavaScript -->
    jQuery first, then Popper.js, then Bootstrap JS 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
