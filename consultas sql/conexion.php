<?php
	

$idclientes=$_POST['idclientes'];




 require("conexion.php");
 $conexion=conectar();
  //$query="insert into productos (idproductos,idproveedor,fechadeentrada,descripcion,ubicacion,precio) values ('$idproductos','$idproveedor','$fechadeentrada','$descripcion','$ubicacion','$precio')";
$query="call pa_agregarturno('$turno)";
$result = mysqli_query($conexion, $query) or die('No funciona agregar '.mysqli_error($CONEXION));



	// Cerrar la conexión
	mysqli_close($conexion );

	echo "PRODUCTO agregado correctamente, verificar lista de empleados EN CASO DE QUE HAYA EXISTIDO";
	


?>