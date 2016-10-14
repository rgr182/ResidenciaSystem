 <?php
  include 'conexion.php';
  $dia =$_POST['dia'];
  $turno =$_POST['turno'];
  $semana =$_POST['semana'];
  $Nobobina =$_POST['Nobobina'];
  $frecuencia =$_POST['frecuencia'];
  $linea =$_POST['linea'];
  $producto =$_POST['producto'];
  $calibre =$_POST['calibre'];
  $composicion =$_POST['composicion'];
  $status =$_POST['status'];
  $colorprimario =$_POST['colorprimario'];
  $colorsecundario =$_POST['colorsecundario'];
  $anchosecundario = $_POST['anchosecundario'];
  //$anchosecundario = $_POST['anchosecundario'];
  $aspectogeneral = $_POST['aspectogeneral'];
  // $aspectogeneral = $_POST['aspectogeneral'];
  $marcaciondecable = $_POST['marcaciondecable'];
  $etiqueta = $_POST['etiqueta'];
  $embobinado =$_POST['embobinado'];
  $condiciondeconipack=$_POST['condiciondeconipack'];
  $colordecobre = $_POST['colordecobre'];
  $formadelconductor = $_POST['formadelconductor'];
  $reporte = $_POST['reporte'];
  $encogimientoalcorte = $_POST['encogimientoalcorte'];
  $efectomemoria = $_POST['efectomemoria'];
  $diametrodelaislante = $_POST['diametroadelislante'];
  $grosordelaislante = $_POST['grosordelaislante'];
  $concentricidad = $_POST['concentricidad'];
  $factorA = $_POST['factorA'];
  $Abracion = $_POST['Abracion'];
  $Elogacion = $_POST['Elogacion'];
  $num = $_POST['num'];
  $statusnum = $_POST['statusnum'];
  $RoturadeElogacion =$_POST['RoturadeElogacion']
  $desforre1 = $_POST['desforre1'];
  $desforre2 = $_POST['desforre2'];
  $encogimientoalcalor =$_POST['encogimientoalcalor'];
  $usw = $_POST['usw'];
  $hotset = $_POST['hotset'];
  $desicionfinal = $_POST['desicionfinal'];
  $defecto = $_POST['defecto'];
  $cantidadenmetros = $_POST['cantidadenmetros'];
  $Noetiquetaroja = $_POST['Noetiquetaroja'];
  $statusetiquetaroja =$_POST['statusetiquetaroja'];
  $destino = $_POST['destino'];
  $semanaFPS = $_POST['semanaFPS'];
  $fechadescrap = $_POST['fechadescrap'];
  $comentarios = $_POST['comentarios'];


  $query1=mysqli_query("INSERT INTO tablaempleado (dia,turno,semana) VALUES ('$dia', '$turno', '$semana')"); 
  $query1=mysqli_query("INSERT INTO tablabobina (Nobobina) VALUES ('$Nobobina')"); 
  $query1=mysqli_query("INSERT INTO tablafrecuencia (frecuencia)VALUES ('$frecuencia')");
  $query1=mysqli_query("INSERT INTO tablalinea (linea) VALUES ('$linea')");
  $query1=mysqli_query("INSERT INTO tablaproducto (producto) VALUES ('$producto')"); 
  $query1=mysqli_query("INSERT INTO tablacalibre (calibre) VALUES ('$calibre')");
  $query1=mysqli_query("INSERT INTO tablacomposicion (composicion) VALUES ('$composicion')");
  $query1=mysqli_query("INSERT INTO tablastatus (composicion) VALUES ('$status')");
  $query1=mysqli_query("INSERT INTO tablacolorprimario  (colorprimario)VALUES ('$colorprimario')");
  $query1=mysqli_query("INSERT INTO tablastatus VALUES ('$status')");
  $query1=mysqli_query("INSERT INTO tablacolorsecundario VALUES ('$colorsecundario')");
  $query1=mysqli_query("INSERT INTO tablastatus VALUES ('$status')");
  $query1=mysqli_query ("INSERT INTO tablacaraok (caracteristicas_ok,statuscaraok) VALUES ( '$anchosecundario', '$anchosecundario')");
  $query1=mysqli_query ("INSERT INTO tablacaraok (caracteristicas_ok,statuscaraok) VALUES ( '$aspectogeneral', '$aspectogeneral')");
  $query1=mysqli_query ("INSERT INTO tablacaraok (caracteristicas_ok,statuscaraok) VALUES ( '$marcaciondecable', '$marcaciondecable')");
  $query1=mysqli_query ("INSERT INTO tablacaraok (caracteristicas_ok,statuscaraok) VALUES ( '$etiqueta', '$etiqueta')");
  $query1=mysqli_query ("INSERT INTO tablacaraok (caracteristicas_ok,statuscaraok) VALUES ( '$embobinado', '$embobinado')");
  $query1=mysqli_query ("INSERT INTO tablacaraok (caracteristicas_ok,statuscaraok) VALUES ( '$condiciondeconipack', '$condiciondeconipack')");
  $query1=mysqli_query ("INSERT INTO tablacaraok (caracteristicas_ok,statuscaraok) VALUES ( '$colordecobre', '$colordecobre')");
  $query1=mysqli_query ("INSERT INTO tablacaraok (caracteristicas_ok,statuscaraok) VALUES ( '$formadelconductor', '$formadelconductor')");
  $query1=mysqli_query ("INSERT INTO tablacaraok (caracteristicas_ok,statuscaraok) VALUES ( '$reporte', '$reporte')");
  $query1=mysqli_query ("INSERT INTO tablacaraok (caracteristicas_ok,statuscaraok) VALUES ( '$efectomemoria', '$efectomemoria')");
  
  $query1=mysqli_query("INSERT INTO tablacaranum (caranum,num,statusnum) VALUES ('$diametroadelislante', '$num', '$statusnum')");
  $query1=mysqli_query("INSERT INTO tablacaranum (caranum,num,statusnum) VALUES ('$grosordelaislante', '$num', '$statusnum')");
  $query1=mysqli_query("INSERT INTO tablacaranum (caranum,num,statusnum) VALUES ('$$concentricidad', '$num', '$statusnum')");
  $query1=mysqli_query("INSERT INTO tablacaranum (caranum,num,statusnum) VALUES ('$factorA', '$num', '$statusnum')");
  $query1=mysqli_query("INSERT INTO tablacaranum (caranum,num,statusnum) VALUES ('$Abracion', '$num', '$statusnum')");
  $query1=mysqli_query("INSERT INTO tablacaranum (caranum,num,statusnum) VALUES ('$Elogacion', '$num', '$statusnum')");
  $query1=mysqli_query("INSERT INTO tablacaranum (caranum,num,statusnum) VALUES ('$desforre1', '$num', '$statusnum')");
  $query1=mysqli_query("INSERT INTO tablacaranum (caranum,num,statusnum) VALUES ('$desforre2', '$num', '$statusnum')");
  $query1=mysqli_query("INSERT INTO tablacaranum (caranum,num,statusnum) VALUES ('$encogimientoalcalor', '$num', '$statusnum')");
  $query1=mysqli_query("INSERT INTO tablacaranum (caranum,num,statusnum) VALUES ('$usw', '$num', '$statusnum')");
  $query1=mysqli_query("INSERT INTO tablacaranum (caranum,num,statusnum) VALUES ('$hotset', '$num', '$statusnum')");
  
  $query1=mysqli_query("INSERT INTO tabladesicionfinal (desicionfinal)VALUES ('$desicionfinal')");
  $query1=mysqli_query("INSERT INTO tabladefecto (defecto)VALUES ('$defecto')");
  $query1=mysqli_query("INSERT INTO datosgenerales (cantidadenmetros)VALUES ('$cantidadenmetros')");
  $query1=mysqli_query("INSERT INTO datosgenerales (Noetiquetaroja)VALUES ('$Noetiquetaroja')");
  $query1=mysqli_query("INSERT INTO tablastatusetiquetaroja (statusetiquetaroja)VALUES ('$statusetiquetaroja')");
  $query1=mysqli_query("INSERT INTO tabladestino (destino)VALUES ('$destino')");
  $query1=mysqli_query("INSERT INTO datosgenerales (semanaFPS)VALUES ('$semanaFPS')");
  $query1=mysqli_query("INSERT INTO datosgenerales (fechadescrap)VALUES ('$fechadescrap')");
  $query1=mysqli_query("INSERT INTO datosgenerales (comentarios)VALUES ('$comentarios')");


  $resultado= mysqli_query($conexion,$query1);
 mysqli_close($conexion);
  ?>

  ?>