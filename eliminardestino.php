<?php
 include 'conexion.php';
$destino =$_POST['destino'];

$query1 = "DELETE FROM tabladetino WHERE destino='$destino'";
 $resultado= mysqli_query($conexion,$query1);
if ($resultado){
 	header('Location:Administradoreliminar.php?pros=si');
 }else{
 	header('Location:Administradoreliminar.php?pros=no');
 }


mysqli_close($conexion);



?>