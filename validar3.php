<!DOCTYPE html>
<html>
<head>
	<title>Informacion</title>
	<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/diseño.css">
</head>
<body>
<?php
require 'Encabezado/header.php';
session_start();
$username = $_SESSION['us'];
$password = $_SESSION['ps'];


//conexion a la bd
$conexion = mysqli_connect("Localhost", "root", "", "ticketekbd");
$consulta = "SELECT * FROM users WHERE user = '$username' AND password ='$password'";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);
if($filas>0) {


$id = $_POST['id'];
$status = $_POST['status'];




$sql = "UPDATE tickets SET status = '$status' WHERE id = '$id' ";

if (mysqli_query($conexion, $sql)) {
      echo "<bNew record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);

}else {
	echo "Falla de autentificación";
}
mysqli_free_result($resultado);

?>

<br>

	<table border="1" >
		<thead>
			<th>Id</th>
			<th>Fecha</th>
			<th>Correo</th>
			<th>Nombre</th>
			<th>Departamento</th>
			<th>Equipo</th>	
			<th>Mensaje</th>
			<th>Status nuevo</th>

		</thead>

<?php 
// Create connection
$conexion = mysqli_connect("Localhost", "root", "", "ticketekbd");
// Check connection

$id2 = $_POST['id'];

echo "<br>Tu folio es:<br> ".$id2. "<br> ";

		$sql2="SELECT * from tickets WHERE id = '$id'";
		$result2=mysqli_query($conexion,$sql2);

		while($mostrar=mysqli_fetch_array($result2)){
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
<li><a href="Menu.php">Menu principal</a>
  <a href="login2.php">Consultar ticket</a>
  <a href="cambio.php">Modificar nuevo</a>
</nav>
</body>
</html>