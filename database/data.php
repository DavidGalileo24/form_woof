<?php 
	class data{

		public function conexion_data(){
			$pdo = new PDO("mysql: host=localhost; dbname=veterinaria; charset=utf8", "root", "");
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		}

	}//end class
 ?>