<?php 
	require'sesion.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>captura.php</title>
</head>
<body>
<?php
$servername = "localhost";
$database = "ticketekbd";
$username = $_POST['username'];
$password = $_POST['password'];


$fecha = $_POST['fecha'];
$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$departamento = $_POST['departamento'];
$equipo = $_POST['equipo'];
$info_adicional = $_POST['info_adicional'];
$status = $_POST['status'];

echo "<br>fecha: ".$fecha. "<br> ";
echo "<br>correo: ".$correo. "<br> ";
echo "<br>nombre: ".$nombre. "<br><br>  ";
echo "<br>departamento: ".$departamento. "<br> ";
echo "<br>equipo: ".$equipo. "<br> ";
echo "<br>mensaje: ".$mensaje. "<br><br>  ";
echo "<br>status: ".$status. "<br> ";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully <br><br>";

 
 $sql = "INSERT INTO tickets (fecha, correo, nombre, departamento, equipo, mensaje, status) VALUES('$fecha', '$correo', '$nombre', '$departamento', '$equipo', '$mensaje', '$status')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
 <ul>
  <li><a href="menu.php">Return</a></li>
</ul>
</body>
</html>