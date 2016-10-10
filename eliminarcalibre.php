<?php
 include 'conexion.php';
$calibre =$_POST['calibre'];

$query1 = "DELETE FROM tablacalibre WHERE calibre='$calibre'";
mysqli_query($conexion,$query1);
 $resultado= mysqli_query($conexion,$query1);
?>