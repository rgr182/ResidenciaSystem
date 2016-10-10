<?php
 include 'conexion.php';
$composicion =$_POST['composicion'];

$query1 = "DELETE FROM tablacomposicion WHERE composicion='$composicion'";
$resultado= mysqli_query($conexion,$query1);
if ($resultado){
 	header('Location:Administradoreliminar.php?pros=si');
 }else{
 	header('Location:Administradoreliminar.php?pros=no');
 }


mysqli_close($conexion);

?>