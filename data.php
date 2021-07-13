<?php 
	
	//variables
	$nombre_usuario = $_POST['nombre_usuario'];
	$correo = $_POST['correo'];
	$descripcion = $_POST['descripcion'];

	//Recepción formal
	$recepcion = "jorge.caballero@imarketing.com.sv";
	$asunto = "Mensaje enviado desde formulario TikTok";

	//Datos de usuario
	$mensaje = "De: $nombre_usuario \n ";
	$mensaje .= "Correo $correo \n";
	$mensaje .= "Descripción $descripcion \n";
	mail($recepcion, $asunto, $mensaje);
	header('Location: envio_exitoso.html');

 ?>