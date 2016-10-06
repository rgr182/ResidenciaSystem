<?php
 include 'conexion.php';
$staetiroja =$_POST['staetiroja'];

$query1 = "INSERT INTO tablastaetiroja(staetiroja) VALUES ('$staetiroja')";
mysqli_query($conexion,$query1);
 $resultado= mysqli_query($conexion,$query1);

mysqli_close($conexion);



?>
