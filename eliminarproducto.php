<?php
 include 'conexion.php';
$producto =$_POST['producto'];

$query1 = "SELECT producto FROM producto WHERE producto='$producto'";
$Existe = mysqli_num_rows (mysqli_query($conexion,$query1));
if ($Existe > 0) {
$query2 = "DELETE FROM producto WHERE producto='$producto'";	
$sucessQuery= mysqli_query($conexion,$query2);
if ($sucessQuery){
 	header('Location:Administradoreliminar.php?producto=si');
 } else{
 	header('Location:Administradoreliminar.php?producto=no');
 }
}else{
	header('Location:Administradoreliminar.php?producto=no');
}
mysqli_close($conexion);

?>