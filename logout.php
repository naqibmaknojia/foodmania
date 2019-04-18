<?php 
	include('connection.php');
	session_start();
	session_destroy();
	$query="delete from shoper";
	$result=mysqli_query($conn,$query);
	header("Location: login.php");
	
?>