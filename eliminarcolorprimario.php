<?php
 include 'conexion.php';
$colorprimario =$_POST['colorprimario'];

$query1 = "DELETE FROM tablacolorprimario WHERE colorprimario='$colorprimario'";
mysqli_query($conexion,$query1);
 $resultado= mysqli_query($conexion,$query1);
?>