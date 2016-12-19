<?php
 include 'conexion.php';
$colorprimario =$_POST['colorprimario'];


$query1 = "SELECT colorprimario FROM tablacolorprimario WHERE colorprimario='$colorprimario'";
$Existe = mysqli_num_rows (mysqli_query($conexion,$query1));
if ($Existe > 0) {
$query2 = "DELETE FROM tablacolorprimario WHERE colorprimario='$colorprimario'";	
$sucessQuery= mysqli_query($conexion,$query2);
if ($sucessQuery){
 	header('Location:Administradoreliminar.php?colorprimario=si');
 } else{
 	header('Location:Administradoreliminar.php?colorprimario=no');
 }
}else{
	header('Location:Administradoreliminar.php?colorprimario=no');
}
//"SELECT * FROM tablaempleado WHERE nombre LIKE '%$nombre%'";
mysqli_close($conexion);

 
?>