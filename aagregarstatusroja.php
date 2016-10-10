<?php
 include 'conexion.php';
$statusetiquetaroja =$_POST['statusetiquetaroja'];

$query1 = "INSERT INTO tablastatusetiquetaroja(statusetiquetaroja) VALUES ('$statusetiquetaroja')";
mysqli_query($conexion,$query1);
 $resultado= mysqli_query($conexion,$query1);

mysqli_close($conexion);



?>
