<?php
 include 'conexion.php';
$turno =$_POST['turno'];

$query1="INSERT INTO tablaturno (`turno`) VALUES ('$turno')";      
 $resultado= mysqli_query($conexion,$query1);

mysqli_close($conexion);



?>


