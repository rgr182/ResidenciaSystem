<?php
 include 'conexion.php';
$composicion =$_POST['composicion'];

$query1 = "INSERT INTO tablacomposicion(composicion) VALUES ('$composicion')";
mysqli_query($conexion,$query1);
 $resultado= mysqli_query($conexion,$query1);

mysqli_close($conexion);



?>
