<?php
 include 'conexion.php';
$com =$_POST['com'];

$query1 = "INSERT INTO tablacomposicion(com) VALUES ('$com')";
mysqli_query($conexion,$query1);
 $resultado= mysqli_query($conexion,$query1);

mysqli_close($conexion);



?>
