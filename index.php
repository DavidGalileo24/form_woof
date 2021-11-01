<?php 
	
	require_once 'database/data.php';
	require_once 'controller/controller1.php';
	$object = new controller1();

	if(!isset($_REQUEST['s'])){
		$object->index();
	}else{
		$action = $_REQUEST['s'];
		call_user_func(array($object, $action));
	}


 ?>