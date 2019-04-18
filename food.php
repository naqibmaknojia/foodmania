<?php 
	class food{
		//table name 
		private $table_name="food";
		
		//table properties
		public $food_id;
		public $name;
		public $cost;
		public $category;
		
		//read maincourse items
		public function getmain(){
			require_once 'connection.php';
			$query="SELECT * FROM food WHERE category='main'";
			$result=mysqli_query($conn,$query);
			return $result;
		}
			
		//read starter items
		public function getstarter(){
			require_once 'connection.php';
			$query="SELECT * FROM food WHERE category='starter'";
			$result=mysqli_query($conn,$query);
			return $result;
		}

		//read desert items
		public function getdesert(){
			require_once 'connection.php';
			$query="SELECT * FROM food WHERE category='desert'";
			$result=mysqli_query($conn,$query);
			return $result;
		}

	}

?>