<?php 
	class courier{
		//Db table name 
		private $table_name="courier";
		
		//Table properties
		public $name;
		public $bike_number;
		public $courier_id;
		public $cnic;
		
		//Retrieving list from data base
		public function read(){
			require 'connection.php';
			$query="SELECT * FROM courier ORDER BY courier_id";
			$result=mysqli_query($conn,$query);
			return $result;
		}
		
		//creating a new record 
		public function create(){
			require 'connection.php';
			$query="INSERT INTO courier(bike_number,name,cnic) VALUES('$this->bike_number','$this->name','$this->cnic')";
			
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