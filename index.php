<?php 
include_once('database/conexion.php');
include_once('controller/main_controller.php');
$main_controller = new main_controller();

if(!isset($_REQUEST['s'])){
	$main_controller->index();
}else{
	$_REQUEST['s'] = $action;
	call_user_func(array($main_controller, $action));
}


 ?>