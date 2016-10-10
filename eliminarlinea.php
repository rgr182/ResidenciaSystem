<?php
 include 'conexion.php';
$linea =$_POST['linea'];

$query1 = "DELETE FROM tablalinea WHERE linea='$linea'";
mysqli_query($conexion,$query1);
 $resultado= mysqli_query($conexion,$query1);
?>