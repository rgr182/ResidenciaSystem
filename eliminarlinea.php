<?php
 include 'conexion.php';
$linea =$_POST['linea'];

$query1 = "DELETE FROM tablalinea WHERE linea='$linea'";

 $resultado= mysqli_query($conexion,$query1);
 if ($resultado){
 	header('Location:Administradoreliminar.php?pros=si');
 }else{
 	header('Location:Administradoreliminar.php?pros=no');
 }


mysqli_close($conexion);




?>