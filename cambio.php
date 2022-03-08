<?php 
require'sesion.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido a TickeTek</title>
	<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/diseño.css">
</head>
<?php require 'Encabezado/header.php' ?>
 
<nav>
  <a href="menu.php">Return</a>
</nav>
<form METHOD="POST" ACTION="validar3.php">
ingrese numero de ticket que desea editar<br>
<INPUT TYPE="text" NAME="id"><br>
Seleccione status nuevo<br>
<select id="status" name="status">
  <option value="Abierto">Abierto</option>
  <option value="En proceso">En proceso</option>
  <option value="Cerrado">Cerrado</option>
  </select><br><br>
<INPUT TYPE="SUBMIT">
</FORM>
</body>
</html>