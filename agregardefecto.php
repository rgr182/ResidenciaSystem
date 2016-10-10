<?php
 include 'conexion.php';
$defecto =$_POST['defecto'];

$query1 = "INSERT INTO tabladefecto(defecto) VALUES ('$defecto')";
$resultado= mysqli_query($conexion,$query1);
 if ($resultado){
 	header('Location:Administrador.php?pros=si');
 }else{
 	header('Location:Administrador.php?pros=no');
 }


mysqli_close($conexion);



?>
