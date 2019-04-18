<?php
	class chef{
		
		//Db table name
		private $table_name= "chef"; 
		
		//objetc properties
		public $name; 
		public $cnic; 
		public $chef_id; 
		
		//Retrieving list from database
		public function read(){
			require'connection.php';
			$query="SELECT * FROM chef ORDER BY chef_id";
			$result= mysqli_query($conn, $query);
			return $result;
		}
		
		//creating a new record 
		public function create(){
			require'connection.php';
			$query="INSERT INTO chef(name, cnic) VALUES('$this->name','$this->cnic')";
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