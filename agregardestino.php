<?php
 include 'conexion.php';
$destino =$_POST['destino'];

$query1 = "INSERT INTO tabladestino(destino) VALUES ('$destino')";
mysqli_query($conexion,$query1);
 $resultado= mysqli_query($conexion,$query1);

mysqli_close($conexion);



?>
