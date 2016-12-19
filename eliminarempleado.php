<?php
 include 'conexion.php';
$idempleado =$_POST['idempleado'];

$query1 = "SELECT idempleado FROM tablaempleado WHERE idempleado='$idempleado'";
$Existe = mysqli_num_rows (mysqli_query($conexion,$query1));
if ($Existe > 0) {
$query2 = "DELETE FROM tablaempleado WHERE idempleado='$idempleado'";	
$sucessQuery= mysqli_query($conexion,$query2);
if ($sucessQuery){
 	header('Location:Administradoreliminar.php?idEmpleado=si');
 } else{
 	header('Location:Administradoreliminar.php?idEmpleado=no');
 }
}else{
	header('Location:Administradoreliminar.php?idEmpleado=no');
}

//"SELECT * FROM tablaempleado WHERE nombre LIKE '%$nombre%'";
mysqli_close($conexion);




?>



