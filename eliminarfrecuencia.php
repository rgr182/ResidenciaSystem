<?php
 include 'conexion.php';
$frecuencia =$_POST['frecuencia'];

$query1 = "DELETE FROM tablafrecuencia WHERE frecuencia='$frecuencia'";
mysqli_query($conexion,$query1);
 $resultado= mysqli_query($conexion,$query1);
?>