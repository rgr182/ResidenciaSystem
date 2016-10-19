<?php
 include 'conexion.php';
$defecto =$_POST['defecto'];

$query1 = "INSERT INTO tabladefecto(defecto) VALUES ('$defecto')";
$resultado= mysqli_query($conexion,$query1);
 

mysqli_close($conexion);



?>
