<?php
 include 'conexion.php';
$colorprimario =$_POST['colorprimario'];

$query1 = "DELETE FROM tablacolorprimario WHERE colorprimario='$colorprimario'";
 $resultado= mysqli_query($conexion,$query1);
if ($resultado){
 	header('Location:Administradoreliminar.php?pros=si');
 }else{
 	header('Location:Administradoreliminar.php?pros=no');
 }


mysqli_close($conexion);


 
?>