<?php
 include 'conexion.php';
 $radioAnchoSecundario =$_POST['anchosecundario'];
 $radioAspectoGeneral =$_POST['aspectogeneral'];
 $radioMarcacionDeCable =$_POST['marcaciondecable'];
 $radioEtiqueta =$_POST['etiqueta'];
 $radioEmbobinado =$_POST['embobinado'];
 $radioCondiciondeconipack =$_POST['condiciondeconipack'];
 $radioCoolorDeCobre =$_POST['colordecobre'];
 $radioFormaDelConductor =$_POST['formadelconductor'];
 $radioReporte =$_POST['reporte'];
 $radioEncogimientoalcorte =$_POST['encogimientoalcorte'];
 $radioEfectoMemoria=$_POST['efectomemoria'];
 
 echo "valor de los radiobutton"."</br>";
 echo $radioAnchoSecundario."".$radioAspectoGeneral."".$radioMarcacionDeCable."".$radioEtiqueta."".$radioEmbobinado."".$radioCondiciondeconipack."".$radioCoolorDeCobre."".$radioFormaDelConductor."".$radioReporte."".$radioEncogimientoalcorte."".$radioEfectoMemoria;   
 //$query1="INSERT INTO tablatipousuario (tipousuario) VALUES ('$tipousuario')";
// $resultado= mysqli_query($conexion,$query1);
 mysqli_close($conexion);

?>