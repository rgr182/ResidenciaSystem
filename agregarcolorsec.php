<?php
 include 'conexion.php';
$colorsecundario =$_POST['colorsecundario'];
$query1 = "INSERT INTO tablacolorsecundario (colorsecundario)VALUES ('$colorsecundario')";

 $resultado= mysqli_query($conexion,$query1);
  if ($resultado){
 	header('Location:Administrador.php?pros=si');
 }else{
 	header('Location:Administrador.php?pros=no');
 }



mysqli_close($conexion);



?>
