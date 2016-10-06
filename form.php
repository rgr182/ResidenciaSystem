<?php
include 'conexion';
$idempleado = $_post['idempleado'];
$nomempleado = $_post['nomempleado'];
$contra = $_post['contra'];


$sql ="INSERT INTO tablaempleado(idempleado,nomempleado,contra)" VALUES ('$idempleado','$nomempleado','$contra');
$querie =$mysqli->query($sql);

if($querie == true){
	echo "registro exitoso";
}
else{
	echo "registro falló";
}



?>