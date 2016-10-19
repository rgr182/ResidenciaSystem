<?php
 include 'conexion.php';
$colorprimario =$_POST['colorprimario'];
$query1 = "INSERT INTO tablacolorprimario (colorprimario)VALUES ('$colorprimario')";

 $resultado= mysqli_query($conexion,$query1);
mysqli_close($conexion);



?>

