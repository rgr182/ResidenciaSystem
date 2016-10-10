<?php
 include 'conexion.php';
$statusetiquetaroja =$_POST['statusetiquetaroja'];

$query1 = "INSERT INTO tablastatusetiquetaroja(statusetiquetaroja) VALUES ('$statusetiquetaroja')";
 $resultado= mysqli_query($conexion,$query1);
 if ($resultado){
 	header('Location:Administrador.php?pros=si');
 }else{
 	header('Location:Administrador.php?pros=no');
 }


mysqli_close($conexion);



?>
