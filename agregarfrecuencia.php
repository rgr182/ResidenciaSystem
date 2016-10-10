<?php
 include 'conexion.php';
$Frecuencia =$_POST['Frecuencia'];

$query1 = "INSERT INTO tablafrecuencia (Frecuencia)VALUES ('$Frecuencia')";
 $resultado= mysqli_query($conexion,$query1);
 if ($resultado){
 	header('Location:Administrador.php?pros=si');
 }else{
 	header('Location:Administrador.php?pros=no');
 }

mysqli_close($conexion);



?>
