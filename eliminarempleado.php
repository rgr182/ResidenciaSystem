<?php
 include 'conexion.php';
$idempleado =$_POST['idempleado'];

$query1 = "DELETE FROM tablaempleado WHERE idempleado='$idempleado'";
mysqli_query($conexion,$query1);
 $resultado= mysqli_query($conexion,$query1);
?>
<html>
<head>
	<title>ELIMINAR USUARIO</title>
</head>
<body>
	<center>

  <?php if($resultado>0){?>
  <h1>USUARIO ELIMINADO</H1>
  	<?PHP}else{?>
  <h1>ERROR AL ELIMINAR USUARIO</h1>
  <?php}?>
}
  

   <a HREF="Administradoreliminar.php">REGRESAR</a>
</center>
</body>
</html>


