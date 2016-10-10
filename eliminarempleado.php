<?php
 include 'conexion.php';
$idempleado =$_POST['idempleado'];

$query1 = "DELETE FROM tablaempleado WHERE idempleado='$idempleado'";
 $resultado= mysqli_query($conexion,$query1);
 if ($resultado){
 	header('Location:Administradoreliminar.php?pros=si');
 }else{
 	header('Location:Administradoreliminar.php?pros=no');
 }


mysqli_close($conexion);




?>



