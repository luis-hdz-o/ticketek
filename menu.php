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
 <h1>Bienvenido al sistema: <br> <?php echo $_SESSION['us'] ?></h1>

<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/diseño.css">

<ul>
  <li><a href="Tickets.php">Ticket nuevo</a></li>
  <li><a href="Login2.php">Consultar ticket</a></li>
  <li><a href="cambio.php">Modificar ticket</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
	<table border="1" style="border-collapse: collapse; display: inline-block; margin-bottom: 110px; margin-top: 0px">
		<tr>
			<td style="background-color: #8ef9bcf7; font-weight:bold; border-bottom: solid 3px black">Abiertos</td>
			<td style="background-color: #8ef9bcf7; font-weight:bold; border-bottom: solid 3px black">En proceso</td>
			<td style="background-color: #8ef9bcf7; font-weight:bold; border-bottom: solid 3px black">Cerrados</td>
		</tr>
<?php 

echo "<br>";
echo "<br>";
//conexion a la bd
$conexion = mysqli_connect("Localhost", "root", "", "ticketekbd");


//cantidad de registros 
$sql2 = "SELECT * FROM tickets WHERE status = 'Abierto'  ";
$result2 = mysqli_query($conexion, $sql2);
$numero2 = mysqli_num_rows($result2);

echo "<br>";

//cantidad de registros 
$sql3 = "SELECT * FROM tickets WHERE status = 'En proceso'  ";
$result3 = mysqli_query($conexion, $sql3);
$numero3 = mysqli_num_rows($result3);

echo "<br>";


//cantidad de registros 
$sql4 = "SELECT * FROM tickets WHERE status = 'Cerrado'  ";
$result4 = mysqli_query($conexion, $sql4);
$numero4 = mysqli_num_rows($result4);


		 ?>

		<tr>
			<td style="background-color: white; font-weight:bold; border-bottom: solid 3px black"><?php echo $numero2 ?></td>
			<td style="background-color: white; font-weight:bold; border-bottom: solid 3px black"><?php echo $numero3 ?></td>
			<td style="background-color: white; font-weight:bold; border-bottom: solid 3px black"><?php echo $numero4 ?></td>
		</tr>
	<?php 
	 ?>
	</table>
</body>
</html>