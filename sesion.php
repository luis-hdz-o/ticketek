<?php 
	session_start();	
	$varsesion = $_SESSION['us'];

	if($varsesion == null || $varsesion = ''){
		echo 'Usted no tiene acceso';
		die();
	}

?>