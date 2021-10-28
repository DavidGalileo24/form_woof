<?php 
include_once('database/conexion.php');

    class main_model{

        //variables
        public $db = "";


        public function __construct(){
            try {
                $this->db = conexion::conectar();
            } catch (Exception $e) {
                die($e->getMessage);
            }
        }









    }//end class



 ?>