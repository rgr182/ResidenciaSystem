<?php
 include 'conexion.php';
$defecto =$_POST['defecto'];

$query1 = "SELECT defecto FROM defecto WHERE defecto='$defecto'";
$Existe = mysqli_num_rows (mysqli_query($conexion,$query1));
if ($Existe > 0) {
$query2 =  "DELETE FROM tabladefecto WHERE defecto='$defecto'";
$sucessQuery= mysqli_query($conexion,$query2);
if ($sucessQuery){
 	header('Location:Administradoreliminar.php?defecto=si');
 } else{
 	header('Location:Administradoreliminar.php?defecto=no');
 }
}else{
	header('Location:Administradoreliminar.php?defecto=no');
}
mysqli_close($conexion);
?>