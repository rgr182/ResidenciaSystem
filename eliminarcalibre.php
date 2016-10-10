<?php
 include 'conexion.php';
$calibre =$_POST['calibre'];

$query1 = "DELETE FROM tablacalibre WHERE calibre='$calibre'";
$resultado= mysqli_query($conexion,$query1);
if ($resultado){
 	header('Location:Administradoreliminar.php?pros=si');
 }else{
 	header('Location:Administradoreliminar.php?pros=no');
 }


mysqli_close($conexion);

?>