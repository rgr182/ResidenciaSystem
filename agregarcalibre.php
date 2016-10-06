<?php
 include 'conexion.php';
$calibre =$_POST['calibre'];

$query1 = "INSERT INTO tablacalibre (calibre)VALUES ('$calibre')";
mysqli_query($conexion,$query1);
 $resultado= mysqli_query($conexion,$query1);

mysqli_close($conexion);



?>
