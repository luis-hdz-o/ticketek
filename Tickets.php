<?php 
require'sesion.php';
?>	
<!DOCTYPE html>
<html>
<head>
	<title>TickeTek</title>
</head>
<body>
<?php require 'Encabezado/header.php' ?>
<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/diseño.css">
<h1>Ingrese los datos del TickeTek</h1>

<nav>
  <a href="menu.php">Return</a>
</nav>

<form METHOD="POST" ACTION="validar2.php">
Fecha<br>
<INPUT TYPE="TEXT" NAME="fecha"><br>
Correo<br>
<INPUT TYPE="TEXT" NAME="correo"><br>
Nombre<br>
<INPUT TYPE="TEXT" NAME="nombre"><br>
Departamento<br>
<INPUT TYPE="TEXT" NAME="departamento"><br>
Equipo<br>
<INPUT TYPE="TEXT" NAME="equipo"><br>
Mensaje<br>
<INPUT TYPE="TEXT" NAME="mensaje"><br>
Status<br>
<!-- Reemplazamos el input status por select JUAN MEDINA -->
<select id="status" name="status">
  <option value="Abierto">Abierto</option>
  </select><br><br>
  
<INPUT TYPE="SUBMIT">
</FORM>
</body>
</html>
