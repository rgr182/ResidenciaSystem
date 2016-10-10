<?php
 include 'conexion.php';
$destino =$_POST['destino'];

$query1 = "DELETE FROM tabladetino WHERE destino='$destino'";
mysqli_query($conexion,$query1);
 $resultado= mysqli_query($conexion,$query1);
?>