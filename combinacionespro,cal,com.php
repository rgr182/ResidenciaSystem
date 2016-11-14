<?php
 include 'conexion.php';
$producto =$_POST['producto'];
$calibre =$_POST['calibre'];


$query1 = "SELECT producto, calibre, composicion
FROM tablaproducto,tablacalibre, tablacomposicion
WHERE $producto='A3F' AND $calibre=25 AND $composicion='790X0.197'";
 $resultado= mysqli_query($conexion,$query1);
 if ($resultado){
 	header('Location:Administradoreliminar.php?pros=si');
 }else{
 	header('Location:Administradoreliminar.php?pros=no');
 }

mysqli_close($conexion);

?>


<FORM ID="mostrarcombinaciones">
	PRODUCTO<input type="text" size="6" maxlength="9" value="" name="producto" id="producto"></br>
	CALIBRE<input type="text" size="6" maxlength="9" value="" name="calibre" id="calibre"></br>
	COMPOSICION<input type="text" size="6" maxlength="9" value="" name="composicion" id="composicion"></br>
	<input onclick="valida_empleado()" type="button" value = "Aceptar" name = "btnAceptar">


</FORM>