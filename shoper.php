<?php 
	class shoper{
		//table name
		private $table_name="shoper";
		
		//table properties
		public $item;
		public $price;
		public $quantity;
		public $tprice;
		
		//retrieving from table
		public function read(){
			require 'connection.php';
			$query="SELECT * FROM shoper";
			$result=mysqli_query($conn,$query);
			return $result;
		}
		//Inserting data in table
		public function create(){
			require 'connection.php';
			$query="INSERT INTO shoper(item,price,quantity,tprice) VALUES('$this->item','$this->price','$this->quantity','$this->tprice')";
			
			$result=mysqli_query($conn,$query);
			if($result){
				return true;
			}
			else{
				return false;
			}
		}
	}
?>