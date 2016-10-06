<?php
 include 'conexion.php';
$defecto =$_POST['defecto'];

$query1 = "INSERT INTO tabladefecto(defecto) VALUES ('$defecto')";
mysqli_query($conexion,$query1);
 $resultado= mysqli_query($conexion,$query1);

mysqli_close($conexion);



?>
