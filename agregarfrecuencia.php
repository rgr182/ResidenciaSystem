<?php
 include 'conexion.php';
$Frecuencia =$_POST['Frecuencia'];

$query1 = "INSERT INTO tablafrecuencia (Frecuencia)VALUES ('$Frecuencia')";
 $resultado= mysqli_query($conexion,$query1);
mysqli_close($conexion);



?>
