<?php
 include 'conexion.php';
$colorprimario =$_POST['colorprimario'];
$query1 = "INSERT INTO tablacolorprimario (colorprimario)VALUES ('$colorprimario')";
mysqli_query($conexion,$query1);
 $resultado= mysqli_query($conexion,$query1);
mysqli_close($conexion);



?>

