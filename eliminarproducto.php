<?php
 include 'conexion.php';
$producto =$_POST['producto'];

$query1 = "DELETE FROM tablaproducto WHERE producto='$producto'";
$resultado= mysqli_query($conexion,$query1);
if ($resultado){
 	header('Location:Administradoreliminar.php?pros=si');
 }else{
 	header('Location:Administradoreliminar.php?pros=no');
 }


mysqli_close($conexion);







?>