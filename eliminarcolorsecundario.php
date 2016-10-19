<?php
 include 'conexion.php';
$colorsecundario =$_POST['colorsecundario'];

$query1 = "DELETE FROM tablacolorsecundario WHERE calorsecundario='$colorsecundario'";
 $resultado= mysqli_query($conexion,$query1);
 


mysqli_close($conexion);
?>