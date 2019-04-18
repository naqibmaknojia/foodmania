<?php  $connect = mysqli_connect("localhost","root","","foodmania"); 
include('header.php');
	include('check.php');
	include_once 'food.php';
	include_once 'shoper.php';
	$food= new food();
	$shoper= new shoper();
$id= $_SESSION['id'];
?>
<?php 

//Fetching categories
$sql = "SELECT * FROM food where category='starter'";
$data = mysqli_query($connect,$sql);

$sql1 = "SELECT * FROM food where category='main'";
$data1 = mysqli_query($connect,$sql1);

$sql2 = "SELECT * FROM food where category='desert'";
$data2 = mysqli_query($connect,$sql2);

//fetching shopers
$sqlfetch1 = "SELECT * FROM shoper WHERE type='starter'";
$list1= mysqli_query($connect,$sqlfetch1);

$sqlfetch2 = "SELECT * FROM shoper WHERE type='main'";
$list2= mysqli_query($connect,$sqlfetch2);

$sqlfetch3 = "SELECT * FROM shoper WHERE type='desert'";
$list3= mysqli_query($connect,$sqlfetch3);

if(isset($_POST['submit1']) && ($_POST['qauntity'] > 0)) {
	
  $item=$_POST['fooditem'];
  $quantity=$_POST['qauntity'];
  
  //retrieving price
  $queryp="SELECT cost FROM food where name='$item'";
  $result=mysqli_query($connect,$queryp);
  $temp= mysqli_fetch_array($result,MYSQLI_BOTH);
  foreach($temp as $key => $value){
	  $hsp_a = explode(' ', trim($value));
      $hsp_b[$hsp_a[1]] = $hsp_a[0];                
      $price = implode(' ', $hsp_b);
  }
  echo $price;
  echo $quantity;
  $tprice= $price * $quantity;
  echo $tprice;
  $query="INSERT INTO shoper(item,price,quantity,tprice,type) VALUES('$item','$price','$quantity','$tprice','starter')";
  mysqli_query($connect,$query);
  header("Refresh:0");
}

if(isset($_POST['submit2']) && ($_POST['mqauntity'] > 0) ){
	
  $item=$_POST['fooditem'];
  $quantity=$_POST['mqauntity'];
  
  //retrieving price
  $queryp="SELECT cost FROM food where name='$item'";
  $result=mysqli_query($connect,$queryp);
  $temp= mysqli_fetch_array($result,MYSQLI_BOTH);
  foreach($temp as $key => $value){
	  $hsp_a = explode(' ', trim($value));
      $hsp_b[$hsp_a[1]] = $hsp_a[0];                
      $price = implode(' ', $hsp_b);
  }
  echo $price;
  echo $quantity;
  $tprice= $price * $quantity;
  echo $tprice;
  $query="INSERT INTO shoper(item,price,quantity,tprice,type) VALUES('$item','$price','$quantity','$tprice','main')";
  mysqli_query($connect,$query);
  header("Refresh:0");
}

if(isset($_POST['submit3']) && ($_POST['dqauntity'] > 0)){
	
  $item=$_POST['fooditem'];
  $quantity=$_POST['dqauntity'];
  
  //retrieving price
  $queryp="SELECT cost FROM food where name='$item'";
  $result=mysqli_query($connect,$queryp);
  $temp= mysqli_fetch_array($result,MYSQLI_BOTH);
  foreach($temp as $key => $value){
	  $hsp_a = explode(' ', trim($value));
      $hsp_b[$hsp_a[1]] = $hsp_a[0];                
      $price = implode(' ', $hsp_b);
  }

  $tprice= $price * $quantity;
  $query="INSERT INTO shoper(item,price,quantity,tprice,type) VALUES('$item','$price','$quantity','$tprice','desert')";
  mysqli_query($connect,$query);
  header("Refresh:0");
}

if(isset($_POST['finalsubmit'])){
	$adress= $_POST['adress'];
	$ordertime= date('Y-m-d H:i:s');
	
	$courierid=1;
	$chefid=1;
	//retrieving total amount 
	$queryam="select sum(tprice) from shoper";
	$result=mysqli_query($connect,$queryam);
	$temp= mysqli_fetch_array($result,MYSQLI_BOTH);
	foreach($temp as $key => $value){
	  $hsp_a = explode(' ', trim($value));
      $hsp_b[$hsp_a[1]] = $hsp_a[0];                
      $amount = implode(' ', $hsp_b);
	}
	
	echo $amount;
	
	//Adding bill
	$query="INSERT INTO bill(amount,time_of_order,Courier_id,User_id,address) values('$amount','$ordertime','$courierid','$id','$adress')";
	mysqli_query($connect,$query);
	header("Location: orderinfo.php");

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
    
  </head>
  <body>
   <div class="container">

    <div class="page-header">
      <h1>ORDER INFO</h1>
      <p class="lead">you have selected the following </p>
    </div>
	
	<!--Starter-->
	<h2> Starter </h2>
     <table class="table table-striped table-bordered table-hovered">
       <thead>
         <tr>
             <th >ITEM</th>
             <th>INDIVIDUAL PRICE</th>
              <th>QUANTITY</th> 
              <th>TOTAL PRICE</th>
         </tr>
       </thead>
          <tbody>
              <?php
              if (mysqli_num_rows($list1) > 0) {

                    while($row = mysqli_fetch_assoc($list1)){
                        echo "<tr>
                        <td>".$row['item']."</td>
                        <td>".$row['price']."</td>
                        <td>".$row['quantity']."</td>
                         <td>".$row['tprice']."</td>
                         </tr>";
                    }}
                    ?>
            <br>
            <form action="" method="post" >
			<tr>
              <td>
                <select name="fooditem" id="item" onchange="gets_price(this.value)">
					<option>Select Items...</option>
                  <?php 
                  if (mysqli_num_rows($data) > 0) {

                    while($rowdata = mysqli_fetch_assoc($data)){
                        echo "<option>".$rowdata['name']."</option>";
                    }}
                  ?>
                  <option></option>
                </select></td>

              <td><input type="number" value="0" disabled="" name="pric" id="price" /></td>
              <td>
                <select name="qauntity" id="quantity" onchange="gets_quantity(this.value)">
				<option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
              </td>
              <td> <input value="0" disabled="" type="number" name="tpric"  id="tprice" ></td>
			  </tr>
              <button name="submit1" type="submit" class="btn btn-primary">ADD SELECTED</button>
            </form> 
          </tbody>
     </table>
	 <hr>
	<!--Main-->
	<h2>Main</h2>
     <table class="table table-striped table-bordered table-hovered">
       <thead>
         <tr>
             <th >ITEM</th>
             <th>INDIVIDUAL PRICE</th>
              <th>QUANTITY</th> 
              <th>TOTAL PRICE</th>
         </tr>
       </thead>
          <tbody>
              <?php
              if (mysqli_num_rows($list2) > 0) {

                    while($row = mysqli_fetch_assoc($list2)){
                        echo "<tr>
                        <td>".$row['item']."</td>
                        <td>".$row['price']."</td>
                        <td>".$row['quantity']."</td>
                         <td>".$row['tprice']."</td>
                         </tr>";
                    }}
                    ?>
            <br>
            <form action="" method="post" >
			<tr>
              <td>
                <select name="fooditem" id="item" onchange="getm_price(this.value)">
					<option>Select Items...</option>
                  <?php 
                  if (mysqli_num_rows($data1) > 0) {

                    while($rowdata1 = mysqli_fetch_assoc($data1)){
                        echo "<option>".$rowdata1['name']."</option>";
                    }}
                  ?>
                  <option></option>
                </select></td>

              <td><input type="number" value="0" disabled="" name="mpric" id="mprice" /></td>
              <td>
                <select name="mqauntity" id="mquantity" onchange="getm_quantity(this.value)">
				<option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
              </td>
              <td> <input value="0" disabled="" type="number" name="mtpric"  id="mtprice" ></td>
			  </tr>
              <button name="submit2" type="submit" class="btn btn-primary">ADD SELECTED</button>
            </form> 
          </tbody>
     </table>
	 <hr>
	 <!--Desert-->
	 <h2> Desert </h2>
     <table class="table table-striped table-bordered table-hovered">
       <thead>
         <tr>
             <th >ITEM</th>
             <th>INDIVIDUAL PRICE</th>
              <th>QUANTITY</th> 
              <th>TOTAL PRICE</th>
         </tr>
       </thead>
          <tbody>
              <?php
              if (mysqli_num_rows($list3) > 0) {

                    while($row = mysqli_fetch_assoc($list3)){
                        echo "<tr>
                        <td>".$row['item']."</td>
                        <td>".$row['price']."</td>
                        <td>".$row['quantity']."</td>
                         <td>".$row['tprice']."</td>
                         </tr>";
                    }}
                    ?>
            <br>
            <form action="" method="post" >
			<tr>
              <td>
                <select name="fooditem" id="item" onchange="getd_price(this.value)">
					<option>Select Items...</option>
                  <?php 
                  if (mysqli_num_rows($data2) > 0) {

                    while($rowdata2 = mysqli_fetch_assoc($data2)){
                        echo "<option>".$rowdata2['name']."</option>";
                    }}
                  ?>
                  <option></option>
                </select></td>

              <td><input type="number" value="0" disabled="" name="dpric" id="dprice" /></td>
              <td>
                <select name="dqauntity" id="dquantity" onchange="getd_quantity(this.value)">
				<option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
              </td>
              <td> <input value="0" disabled="" type="number" name="dtpric"  id="dtprice" ></td>
			  </tr>
              <button name="submit3" type="submit" class="btn btn-primary">ADD SELECTED</button>
            </form> 
          </tbody>
     </table>
				<center><h2>Add delievery Address</h2>
				<form action="" method="post">
				<input type="text" placeholder="Your Address" name="adress" id="adress" required />
				<br><br>
				<button name="finalsubmit" type="submit" class="btn btn-primary">Confrim Order</button></form></center>
				<br><br>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<script type="text/javascript">

//for starters
function gets_price(val){
  if (val == 'salad') {
    document.getElementById("price").value = 30; 
  }
  if (val== 'potato salad') {
    document.getElementById("price").value = 50; 
  }
  if(val == 'chicken corn soupe'){
    document.getElementById("price").value = 50; 
  }
  if(val == 'chicken hotnsour soupe '){
    document.getElementById("price").value = 50; 
  }
  if(val == 'cheese balls'){
    document.getElementById("price").value = 70; 
  }
  
  
}

function gets_quantity(q){
  var price = Number(document.getElementById("price").value);
  
  document.getElementById("tprice").value=price*q;

}
//for starter ends here 

//for mainCourse
function getm_price(val){
  if (val == 'chicken biryani' || val == 'mutton biryani') {
    document.getElementById("mprice").value = 100; 
  }
  if (val== 'chicken karahi') {
    document.getElementById("mprice").value = 150; 
  }
  if(val == 'chicken tandoori' || val == 'chicken special karahi' || val == 'mutton karahi' || val == 'malai boti'){
    document.getElementById("mprice").value = 180; 
  }
  if(val == 'chicken 65' || val == 'chicken bbq'){
    document.getElementById("mprice").value = 200; 
  }
  if(val == 'mutton bbq'){
    document.getElementById("mprice").value = 220; 
  }
  
  
}

function getm_quantity(q){
  var price = Number(document.getElementById("mprice").value);
  
  document.getElementById("mtprice").value=price*q;

}
//for starter ends here 

//for desert 
function getd_price(val){
  if (val == 'falooda' || val == 'halwa') {
    document.getElementById("dprice").value = 100; 
  }
  if (val== 'gulab jamun' || val== 'rabri kheer' || val== 'ice cream') {
    document.getElementById("dprice").value = 150; 
  }
 
}

function getd_quantity(q){
  var price = Number(document.getElementById("dprice").value);
  
  document.getElementById("dtprice").value=price*q;

}
//for desert ends here

</script>
<?php
	include('footer.php');
?>