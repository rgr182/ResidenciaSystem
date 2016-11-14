<?php
 include 'conexion.php';
$linea =$_POST['linea'];

$query1 = "DELETE FROM tablalinea WHERE linea='$linea'";
 echo "estas seguro que deseas eliminar el valor".$linea;
 
 if ($conexion->query($query1)===TRUE){
 	header('Location:Administradoreliminar.php');
 }else{
 	echo "Error:".$query1."<br/>"
 	.$conexion->error;
 }

$conexion->close();

?>