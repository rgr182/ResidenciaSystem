<?php
  include 'conexion.php';


$cantidadenmetros=$_POST['cantidadenmetros'];
$Noetiquetaroja=$_POST['Noetiquetaroja'];
$statusetiquetaroja=$_POST['statusetiquetaroja'];
$destino=$_POST['destino'];
$semanaFPS=$_POST['semanaFPS'];
//$fechadescrap=$_POST['fechadescrap'];
$defecto=$_POST['defecto'];
$comentarios=$_POST['comentarios'];

$query2="INSERT INTO tablastatusetiquetaroja(statusetiquetaroja,defecto,destino)VALUES('$statusetiquetaroja','$defecto','destino') ";
$query1="INSERT INTO datosgenerales(Noetiquetaroja,semanaFPS,cantidadenmetros,comentarios,fechadescrap)VALUES('$Noetiquetaroja','$semanaFPS','$cantidadenmetros','$comentarios','1995-08-09 ') ";
mysqli_query($conexion,$query2);
 mysqli_query($conexion,$query1);
 mysqli_close($conexion);
  ?>