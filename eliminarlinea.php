<?php
 include 'conexion.php';
$linea =$_POST['linea'];


$query1 = "SELECT linea FROM tablalinea WHERE linea='$linea'";
$Existe = mysqli_num_rows (mysqli_query($conexion,$query1));
if ($Existe > 0) {
$query2 = "DELETE FROM tabalinea WHERE linea='$linea'";	
$sucessQuery= mysqli_query($conexion,$query2);
if ($sucessQuery){
 	header('Location:Administradoreliminar.php?linea=si');
 } else{
 	header('Location:Administradoreliminar.php?linea=no');
 }
}else{
	header('Location:Administradoreliminar.php?linea=no');
}

//"SELECT * FROM tablaempleado WHERE nombre LIKE '%$nombre%'";
mysqli_close($conexion);




?>