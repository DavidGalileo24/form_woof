<?php 
	
	require_once 'model/model1.php';
	class controller1{

		public $var_controller;

		public function __construct(){
			$this->var_controller = new model1();
		}

		public function index(){
			require_once 'view/inicio.php';
		}

		public function citas(){
			require_once 'view/citas.php';
		}



	}//end class

 ?>