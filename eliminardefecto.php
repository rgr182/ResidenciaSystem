<?php
 include 'conexion.php';
$defecto =$_POST['defecto'];

$query1 = "DELETE FROM tabladefecto WHERE defecto='$defecto'";
mysqli_query($conexion,$query1);
 $resultado= mysqli_query($conexion,$query1);
?>