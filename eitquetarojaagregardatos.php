<?php
  include 'conexion.php';
$cantidadenmetros=$_POST['cantidadenmetros'];
$NoEtiquetaroja=$_POST['NoEtiquetaroja'];
$statusetiquetaroja=$_POST['statusetiquetaroja'];
$destino=$_POST['destino'];
$semanaFPS=$_POST['semanaFPS'];
//$fechadescrap=$_POST['fechadescrap'];
$defecto=$_POST['defecto'];
$comentarios=$_POST['comentarios'];

$etiquetaroja="INSERT INTO tablastatusetiquetaroja(statusetiquetaroja,defecto,destino)VALUES('$statusetiquetaroja','$defecto','destino') ";
$etiqueroja1="INSERT INTO datosgenerales(NoEtiquetaroja,semanaFPS,cantidadenmetros,comentarios,fechadescrap)VALUES('$NoEtiquetaroja','$semanaFPS','$cantidadenmetros','$comentarios','1995-08-09 ') ";
mysqli_query($conexion,$etiqueroja1);
 mysqli_query($conexion,$etiquetaroja);
 mysqli_close($conexion);
  ?>