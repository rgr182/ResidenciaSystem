<?php
include 'conexion.php';
$ruta=".../Imagenes/";
opendir($ruta);
$destino=$ruta.$_FILES['imagenempl']['name'];
copy($_FILES['imagenemp']['tmp_name'],$destino);
$nombre=$_FILES['imagenempl']['name'];
mysqli_query("INSERT INTO tablaempleado (imagenempl)VALUES ('$name')",$conexion);
header("location:...//")
?>