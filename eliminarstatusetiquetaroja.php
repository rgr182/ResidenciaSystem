<?php
 include 'conexion.php';
$statusetiquetaroja =$_POST['statusetiquetaroja'];

$query1 = "DELETE FROM tablastatusetiquetaroja WHERE statusetiquetaroja='$statusetiquetaroja'";
 $resultado= mysqli_query($conexion,$query1);
 if ($resultado){
 	header('Location:Administradoreliminar.php?pros=si');
 }else{
 	header('Location:Administradoreliminar.php?pros=no');
 }


mysqli_close($conexion);
?>