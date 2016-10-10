<?php
 include 'conexion.php';
$turno =$_POST['turno'];

$query1 = "DELETE FROM tablaturno WHERE turno='$turno'";
mysqli_query($conexion,$query1);
 $resultado= mysqli_query($conexion,$query1);
?>