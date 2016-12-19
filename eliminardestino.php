<?php
 include 'conexion.php';
$destino =$_POST['destino'];

$query1 = "SELECT producto FROM destino WHERE destino='$destino'";
$Existe = mysqli_num_rows (mysqli_query($conexion,$query1));
if ($Existe > 0) {
$query2 = "DELETE FROM tabladetino WHERE destino='$destino'";	
$sucessQuery= mysqli_query($conexion,$query2);
if ($sucessQuery){
 	header('Location:Administradoreliminar.php?destino=si');
 } else{
 	header('Location:Administradoreliminar.php?destino=no');
 }
}else{
	header('Location:Administradoreliminar.php?destino=no');
}
mysqli_close($conexion);
?>