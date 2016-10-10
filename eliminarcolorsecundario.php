<?php
 include 'conexion.php';
$colorsecundario =$_POST['colorsecundario'];

$query1 = "DELETE FROM tablacolorsecundario WHERE calorsecundario='$colorsecundario'";
mysqli_query($conexion,$query1);
 $resultado= mysqli_query($conexion,$query1);
?>