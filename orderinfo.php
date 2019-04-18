
<?php
include('connection.php');
include('header.php');
include('check.php');
//Fetching Order details
$sqlfetch1 = "SELECT * FROM shoper";
$data1 = mysqli_query($conn,$sqlfetch1);

//Fetching Courier details
$sqlfetch2 = "SELECT * FROM courier where courier_id=1";
$data2=mysqli_query($conn,$sqlfetch2);

//fetching Bill details
$sqlfetch3 = "select * from bill where bill_number in(select max(bill_number) from bill)";
$data3=mysqli_query($conn,$sqlfetch3);
?>
	<htmL>
		<head>
			<title>Final Order</title>
		</head>
		<body>
		<div class="container">
			<div class="row">
			<div class="col-md-6">
				<h2>Order Items</h2>
				<table class="table table-striped table-bordered table-hovered">
				   <thead>
					 <tr>
						 <th >ITEM</th>
						 <th>INDIVIDUAL PRICE</th>
						  <th>QUANTITY</th> 
						  <th>TOTAL PRICE</th>
						  <th>TYPE</th>
					 </tr>
				   </thead>
				<?php if (mysqli_num_rows($data1) > 0) {
					
						while($row = mysqli_fetch_assoc($data1)){
							echo "<tr>
							<td>".$row['item']."</td>
							<td>".$row['price']."</td>
							<td>".$row['quantity']."</td>
							 <td>".$row['tprice']."</td>
							 <td>".$row['type']."</td>
							 </tr>";
						}} ?>
						</table>
			</div>
			<div class="col-md-6">
				<h2>Courier Details</h2>
				<table class="table table-striped table-bordered table-hovered">
				   <thead>
					 <tr>
						 <th >Courier_id</th>
						 <th>Name</th>
						  <th>Bike_number</th> 
						  <th>CNIC</th>
						  <th>Telephone #</th>
					 </tr>
				   </thead>
				<?php if (mysqli_num_rows($data2)) {

						while($row = mysqli_fetch_assoc($data2)){
							echo "<tr>
							<td>".$row['courier_id']."</td>
							<td>".$row['name']."</td>
							<td>".$row['bike_number']."</td>
							 <td>".$row['cnic']."</td>";
							 
						}} ?>
						<td>033355054267</td>
						</tr>
				</table>
				<h2>Billing:</h2>
				<table class="table table-striped table-bordered table-hovered">
				   <thead>
					 <tr>
						 <th >BILL_NUMBER</th>
						 <th>GRAND TOTAL</th>
						  <th>DATE OF ORDER</th> 
						  <th>ADDRESS</th>
					 </tr>
				   </thead>
				<?php if (mysqli_num_rows($data3) > 0) {
					
						while($row = mysqli_fetch_assoc($data3)){
							echo "<tr>
							<td>".$row['bill_number']."</td>
							<td>".$row['amount']."</td>
							<td>".$row['time_of_order']."</td>
							 <td>".$row['address']."</td>
							 </tr>";
						}} ?>
						</table>
			</div>
			</div>
			<hr>
			<div class="row">
				<!--<center><div id="map" style="width:600px;height:400px"></div>

					<script>
					/*function myMap() {
					  var mapCanvas = document.getElementById("map");
					  var myCenter = new google.maps.LatLng(24.8568991,67.2646838); 
					  var mapOptions = {center: myCenter, zoom: 15};
					  var map = new google.maps.Map(mapCanvas,mapOptions);
					  var marker = new google.maps.Marker({
						position: myCenter,
						animation: google.maps.Animation.BOUNCE
					  });
					  marker.setMap(map);
					}*/
					</script>

					<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBup8bKGgqC916vHpayZs33rGmbfKZuXBw&callback=myMap"></script>-->
					<div class=col-md-12><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.2034783468725!2d67.2624951149687!3d24.856899084055602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb3316c5276e35b%3A0x823a6a0100195ffd!2sFAST+University+Karachi+Campus!5e0!3m2!1sen!2s!4v1544058984083" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe></div>
			</div></center>
			
		</div>
		<br><br>
		</body>
	</html>
<?php 
include('footer.php');
?>