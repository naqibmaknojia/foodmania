<?php
	include('header.php');
	include('check.php');
	include('connection.php');
	$id=$_SESSION['id'];
	$query="Select * from bill where user_id='$id'";
	$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>History</title>
		<link rel="stylesheet" type="text/css" href="css/apnistyling.css">
	</head>
	
	<body>
	<br><br>
	<div class="container">
	<h2>Order history</h2>
	<br>
		<table>
			<tr>
				<th>Bill_number</th>
				<th>ammount</th>
				<th>time_of_order</th>
				<th>recieve_time</th>
				<th>courier_id</th>
				<th>user_id</th>
				<th>address</th>
			</tr>
			<?php 
				if($result->num_rows > 0){
					while($row= $result->fetch_assoc()){
						echo "<tr><td>" . $row["bill_number"] . "</td>";
						echo "<td>" . $row["amount"] . "</td>";
						echo "<td>" . $row["time_of_order"] . "</td>";
						echo "<td>" . $row["recieve_time"] . "</td>";
						echo "<td>" . $row["Courier_id"] . "</td>";
						echo "<td>" . $row["User_id"] . "</td>";
						echo "<td>" . $row["address"] . "</td>";
						}
				}
				else{
					echo"0 results";
				}
			
			?>
		</table>
	</div>
	<br><br>

	</body>
</html>
<?php
	include('footer.php');
?>