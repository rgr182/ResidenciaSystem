<?php
 include 'conexion.php';
$defecto =$_POST['defecto'];

$query1 = "DELETE FROM tabladefecto WHERE defecto='$defecto'";
 $resultado= mysqli_query($conexion,$query1);
 if ($resultado){
 	header('Location:Administradoreliminar.php?pros=si');
 }else{
 	header('Location:Administradoreliminar.php?pros=no');
 }


mysqli_close($conexion);
?>