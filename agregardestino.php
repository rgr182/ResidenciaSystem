<?php
 include 'conexion.php';
$destino =$_POST['destino'];

$query1 = "INSERT INTO tabladestino(destino) VALUES ('$destino')";
 $resultado= mysqli_query($conexion,$query1);
 if ($resultado){
 	header('Location:Administrador.php?pros=si');
 }else{
 	header('Location:Administrador.php?pros=no');
 }


mysqli_close($conexion);



?>
