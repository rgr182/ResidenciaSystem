<?php
 include 'conexion.php';
$producto =$_POST['producto'];

$query1 = "DELETE FROM tablaproducto WHERE producto='$producto'";
mysqli_query($conexion,$query1);
 $resultado= mysqli_query($conexion,$query1);
?>