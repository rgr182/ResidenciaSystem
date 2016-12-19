<?php
 include 'conexion.php';
$frecuencia =$_POST['frecuencia'];
$query1 = "SELECT frecuencia FROM tablafrecuencia WHERE frecuencia='$frecuencia'";
$Existe = mysqli_num_rows (mysqli_query($conexion,$query1));
if ($Existe > 0) {
$query2 =  "DELETE FROM tablafrecuencia WHERE frecuencia='$frecuencia'";
$sucessQuery= mysqli_query($conexion,$query2);
if ($sucessQuery){
 	header('Location:Administradoreliminar.php?frecuencia=si');
 } else{
 	header('Location:Administradoreliminar.php?frecuencia=no');
 }
}else{
	header('Location:Administradoreliminar.php?frecuencia=no');
}



mysqli_close($conexion);
?>