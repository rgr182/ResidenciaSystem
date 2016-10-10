<?php
 include 'conexion.php';
$composicion =$_POST['composicion'];

$query1 = "INSERT INTO tablacomposicion(composicion) VALUES ('$composicion')";

 $resultado= mysqli_query($conexion,$query1);
  if ($resultado){
 	header('Location:Administrador.php?pros=si');
 }else{
 	header('Location:Administrador.php?pros=no');
 }

mysqli_close($conexion);



?>
