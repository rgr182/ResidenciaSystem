<?php
 include 'conexion.php';
$producto =$_POST['producto'];

$query1 = "INSERT INTO tablaproducto (producto)VALUES ('$producto')";
mysqli_query($conexion,$query1);
 $resultado= mysqli_query($conexion,$query1);

mysqli_close($conexion);



?>
