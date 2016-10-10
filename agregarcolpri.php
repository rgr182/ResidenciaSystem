<?php
 include 'conexion.php';
$colorprimario =$_POST['colorprimario'];
$query1 = "INSERT INTO tablacolorprimario (colorprimario)VALUES ('$colorprimario')";

 $resultado= mysqli_query($conexion,$query1);

 if ($resultado){
 	header('Location:Administrador.php?pros=si');
 }else{
 	header('Location:Administrador.php?pros=no');
 }


 
mysqli_close($conexion);



?>

