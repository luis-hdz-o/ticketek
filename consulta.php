	
<!DOCTYPE html>
<html>
<head>
	<title>Consulta</title>
	<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/diseño.css">
</head>

<?php require 'Encabezado/header.php' ?>
<h1>Consulta de ticket</h1>
<body>

<br>

	<table border="1">

		<thead>
			<th>Id</th>
			<th>Fecha</th>
			<th>Correo</th>
			<th>Nombre</th>
			<th>Departamento</th>
			<th>Equipo</th>
			<th>Mensaje</th>
			<th>Status</th>

		</thead>

<?php 
require'sesion.php';
$username = $_SESSION['us'];
$password = $_SESSION['ps'];

// Create connection
$conexion = mysqli_connect("Localhost", "root", "", "ticketekbd");
// Check connection

$id = $_POST['id'];

echo "<br>Tu folio es:<br> ".$id. "<br> ";

		$sql="SELECT * from tickets WHERE id = '$id'";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['fecha'] ?></td>
			<td><?php echo $mostrar['correo'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['departamento'] ?></td>
			<td><?php echo $mostrar['equipo'] ?></td>
			<td><?php echo $mostrar['mensaje'] ?></td>
			<td><?php echo $mostrar['status'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table> 
	<nav>
  <a href="Menu.php">Menu principal</a>
  <a href="login2.php">Consultar nuevo</a>
  <a href="cambio.php">Modificar</a>
</nav>

</body>
</html>