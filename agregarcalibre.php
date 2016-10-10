<?php
 include 'conexion.php';
$calibre =$_POST['calibre'];

$query1 = "INSERT INTO tablacalibre (calibre)VALUES ('$calibre')";

 $resultado= mysqli_query($conexion,$query1);
 if ($resultado){
 	header('Location:Administrador.php?pros=si');
 }else{
 	header('Location:Administrador.php?pros=no');
 }
mysqli_close($conexion);



?>
