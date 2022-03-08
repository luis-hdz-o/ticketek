<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

//conexion a la bd
$conexion = mysqli_connect("Localhost", "root", "", "ticketekbd");
$consulta = "SELECT * FROM users WHERE user = '$username' AND password ='$password'";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);
if($filas>0) {	
	$_SESSION['us'] = $username;
	$_SESSION['ps'] = $password;
	header("Location: menu.php");
}else if(empty($username)){
		echo '<script>alert("Ingresa el usuario"); history.back();</script>';
	} else if(empty($password)) {
		echo '<script>alert("Ingresa la contraseña"); history.back();</script>';
	}else {
	echo '<script>alert("Falla de autenticación"); history.back();</script>';
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>	