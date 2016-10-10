<?php
 include 'conexion.php';
$turno =$_POST['turno'];

$query1 = "DELETE FROM tablaturno WHERE turno='$turno'";
 $resultado= mysqli_query($conexion,$query1);
 if ($resultado){
 	header('Location:Administradoreliminar.php?pros=si');
 }else{
 	header('Location:Administradoreliminar.php?pros=no');
 }


mysqli_close($conexion);
?>