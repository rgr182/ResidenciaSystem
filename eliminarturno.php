<?php
 include 'conexion.php';
$turno =$_POST['turno'];

$query1 = "SELECT turno FROM tablaturno WHERE turno='$turno'";
$Existe = mysqli_num_rows (mysqli_query($conexion,$query1));
if ($Existe > 0) {
$query2 = "DELETE FROM tablaturno WHERE turno='$turno'";	
$sucessQuery= mysqli_query($conexion,$query2);
if ($sucessQuery){
 	header('Location:Administradoreliminar.php?turno=si');
 } else{
 	header('Location:Administradoreliminar.php?turno=no');
 }
}else{
	header('Location:Administradoreliminar.php?turno=no');
}
?>