<?php
 include 'conexion.php';
$colorsecundario =$_POST['colorsecundario'];



$query1 = "SELECT colorsecundario FROM tablacolorsecundario WHERE colorsecundario='$colorsecundario'";
$Existe = mysqli_num_rows (mysqli_query($conexion,$query1));
if ($Existe > 0) {
$query2 = "DELETE FROM tablacolorsecundario WHERE colorsecundario='$colorsecundario'";	
$sucessQuery= mysqli_query($conexion,$query2);
if ($sucessQuery){
 	header('Location:Administradoreliminar.php?colorsecundario=si');
 } else{
 	header('Location:Administradoreliminar.php?colorsecundario=no');
 }
}else{
	header('Location:Administradoreliminar.php?colorsecundario=no');
}
//"SELECT * FROM tablaempleado WHERE nombre LIKE '%$nombre%'";
mysqli_close($conexion);
?>