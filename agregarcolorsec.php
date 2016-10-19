<?php
 include 'conexion.php';
$colorsecundario =$_POST['colorsecundario'];
$query1 = "INSERT INTO tablacolorsecundario (colorsecundario)VALUES ('$colorsecundario')";

 $resultado= mysqli_query($conexion,$query1);
 


mysqli_close($conexion);



?>
