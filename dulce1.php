<?php
 include 'conexion.php';
$producto =$_POST['producto'];
$calibre =$_POST['calibre'];
$composicion =$_POST['composicion'];
$query1 = "INSERT INTO tablacombinaciones(producto,calibre,composicion) VALUES ('$producto',$calibre,$composicion)";
 $resultado= mysqli_query($conexion,$query1);
mysqli_close($conexion);

//$query1 = "SELECT producto, calibre, composicion
//FROM tablaproducto,tablacalibre, tablacomposicion
//WHERE producto='A3F' AND calibre=25 AND composicion='790X0.197'";
 //$resultado= mysqli_query($conexion,$query1);


?>




