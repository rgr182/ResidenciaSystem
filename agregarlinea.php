<?php
 include 'conexion.php';
$linea =$_POST['linea'];

$query1 = "INSERT INTO tablalinea (linea)VALUES ('$linea')";
 $resultado= mysqli_query($conexion,$query1);
mysqli_close($conexion);



?>

