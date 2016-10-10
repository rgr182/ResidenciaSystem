<?php
 include 'conexion.php';
$producto =$_POST['producto'];

$query1 = "INSERT INTO tablaproducto (producto)VALUES ('$producto')";
 $resultado= mysqli_query($conexion,$query1);
 $resultado= mysqli_query($conexion,$query1);
 if ($resultado){
 	header('Location:Administrador.php?pros=si');
 }else{
 	header('Location:Administrador.php?pros=no');
 }

mysqli_close($conexion);



?>
