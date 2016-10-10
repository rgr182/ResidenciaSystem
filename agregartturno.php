<?php
 include 'conexion.php';
$turno =$_POST['turno'];

$query1="INSERT INTO tablaturno (`turno`) VALUES ('$turno')";      
 $resultado= mysqli_query($conexion,$query1);
if ($resultado){
 	header('Location:Administrador.php?pros=si');
 }else{
 	header('Location:Administrador.php?pros=no');
 }
mysqli_close($conexion);



?>


