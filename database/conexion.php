<?php 

	class conexion{

		public static function conectar(){
			$pdo = new PDO("host=localhost; dbname=veterinaria;","root", "");
			$pdo->setAtribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		}

	}//end class

 ?>