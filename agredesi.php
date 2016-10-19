<?php
 include 'conexion.php';
$desicionfinal =$_POST['desicionfinal'];

$query1 = "INSERT INTO tabladesicionfinal(desicionfinal) VALUES ('$desicionfinal')";
 $resultado= mysqli_query($conexion,$query1);
mysqli_close($conexion);
?>
