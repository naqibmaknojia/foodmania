<?php
	include('header.php');
	include('check.php');
	include('connection.php');
	
	$query="Select * from employee_history";
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
	<h2>Employee History</h2>
	<br>
		<table>
			<tr>
				<th>Name</th>
				<th>Position</th>
				<th>DateOfHiring</th>
				<th>DateOfLeaving</th>
			</tr>
			<?php 
				if($result->num_rows > 0){
					while($row= $result->fetch_assoc()){
						echo "<tr><td>" . $row["name"] . "</td>";
						echo "<td>" . $row["dateofhiring"] . "</td>";
						echo "<td>" . $row["position"] . "</td>";
						echo "<td>" . $row["dateofleaving"] . "</td>";
						echo"<td></td>";
						echo"<td></td></tr>";
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