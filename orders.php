<?php
	class orders{
		//table name 
		private $table_name="orders";
		
		//object Properties
		public $orderdate;
		public $food_id;
		public $chef_id;
		public $user_id;
		public $amount;
		
		//creating a new order
		public function create(){
			require'connection.php';
			$query="INSERT INTO chef(orderdate,food_id,chef_id,user_id,amount) VALUES('$this->orderdate','$this->food_id','$this->chef_id','$this->user_id','$this->amount')";
			$result=mysqli_query($conn,$query);
			if($result){
			return true;
			}
			else{
				return false;
			}
		}
		
		//retrieving orders list
		public function view(){
			require 'connection.php';
			$query="SELECT * FROM order  where user_id= $user_id ORDER BY orderdate";
			$result=mysqli_query($conn,$query);
			return $result;
		
		}
		
		
	}
?>