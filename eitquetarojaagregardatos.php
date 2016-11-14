<?php
  include 'conexion.php';

//$defecto=$_POST['defecto'];
$cantidadenmetros=$_POST['cantidadenmetros'];
$Noetiquetaroja=$_POST['Noetiquetaroja'];
//$query1="INSERT INTO tablastatusetiquetaroja(defecto)VALUES('$defecto') ";
$query1="INSERT INTO datosgenerales(Noetiquetaroja,cantidadenmetros)VALUES('$cantidadenmetros','$Noetiquetaroja') ";

 mysqli_query($conexion,$query1);
 mysqli_close($conexion);
  ?>