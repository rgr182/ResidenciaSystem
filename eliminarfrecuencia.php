<?php
 include 'conexion.php';
$frecuencia =$_POST['frecuencia'];

$query1 = "DELETE FROM tablafrecuencia WHERE frecuencia='$frecuencia'";
 $resultado= mysqli_query($conexion,$query1);
  if ($resultado){
 	header('Location:Administradoreliminar.php?pros=si');
 }else{
 	header('Location:Administradoreliminar.php?pros=no');
 }


mysqli_close($conexion);
?>