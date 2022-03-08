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
<form METHOD="POST" ACTION="consulta.php">
ingrese numero de ticket<br>
<INPUT TYPE="text" NAME="id"><br>
<INPUT TYPE="SUBMIT">
</FORM>
</body>
</html>