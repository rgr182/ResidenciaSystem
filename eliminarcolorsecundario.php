<?php
 include 'conexion.php';
$colorsecundario =$_POST['colorsecundario'];

$query1 = "DELETE FROM tablacolorsecundario WHERE calorsecundario='$colorsecundario'";
 $resultado= mysqli_query($conexion,$query1);
 if ($resultado){
 	header('Location:Administradoreliminar.php?pros=si');
 }else{
 	header('Location:Administradoreliminar.php?pros=no');
 }


mysqli_close($conexion);
?>