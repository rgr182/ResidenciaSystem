<?php
 include 'conexion.php';
$linea =$_POST['linea'];

$query1 = "INSERT INTO tablalinea (linea)VALUES ('$linea')";
 $resultado= mysqli_query($conexion,$query1);
 $resultado= mysqli_query($conexion,$query1);
 if ($resultado){
 	header('Location:Administrador.php?pros=si');
 }else{
 	header('Location:Administrador.php?pros=no');
 }

mysqli_close($conexion);



?>

