<?php
 include 'conexion.php';
$statusetiquetaroja =$_POST['statusetiquetaroja'];

$query1 = "SELECT statusetiquetaroja FROM statusetiquetaroja WHERE statusetiquetaroja='$statusetiquetaroja'";
$Existe = mysqli_num_rows (mysqli_query($conexion,$query1));
if ($Existe > 0) {
$query2 = "DELETE FROM statusetiquetaroja WHERE statusetiquetaroja='$statusetiquetaroja'";	
$sucessQuery= mysqli_query($conexion,$query2);
if ($sucessQuery){
 	header('Location:Administradoreliminar.php?statusetiquetaroja=si');
 } else{
 	header('Location:Administradoreliminar.php?statusetiquetaroja=no');
 }
}else{
	header('Location:Administradoreliminar.php?statusetiquetaroja=no');
}
?>