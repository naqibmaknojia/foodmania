<?php 
		$name= $_POST['name'];
		$pass= $_POST['password'];
		require_once 'connection.php';
		$sql="INSERT INTO users(name, password) VALUES('$name','$pass')";
		$result= mysqli_query($conn, $sql);
		if($result){
			header("Location: login.php");
		}
		else{
			echo"<div class='alert alert-danger'>UnSuccesfull Registeration</div>";
		}
?>