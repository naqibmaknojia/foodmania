<?php 
	class food_types{
		//table name
		private $table_name="food_types";
		
		//table properties
		public $category;
		
		//retrieving data from table
		public function view{
			require_once 'connection.php';
				$query="SELECT * FROM food_types";
				$result=($conn, $query);
				return $result;
		}
		
	}
?>