 <?php
  include 'conexion.php';
  $dia =$_POST['dia'];
  $turno =$_POST['turno'];
  $semana =$_POST['semana'];
  $NoBobina =$_POST['NoBobina']; 
  $linea =$_POST['linea']; 
  $frecuencia =$_POST['frecuencia'];
  $producto =$_POST['producto'];
  $calibre =$_POST['calibre'];
  $composicion =$_POST['composicion'];
  $statuscomp =$_POST['statuscomp'];
  $colorprimario =$_POST['colorprimario'];
  $statuscolpri =$_POST['statuscolpri'];
  $colorsecundario =$_POST['colorsecundario'];
  $statusecol =$_POST['statusecol'];
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
 $radioburbujadeaire=$_POST['burbujadeaire'];
 $resinum=$_POST['resistencia'];
 $resistatus=$_POST['RESISTENCIA'];
 $diamnum=$_POST['diametroaislante'];
 $diamstatus=$_POST['DIAMETRO_DEL_AISLANTE'];

 $grosaislanum=$_POST['GROSOR_DEL_AISLANTE'];
 $grosaislastatus=$_POST['grosor_del_aislantee'];

 $concenum=$_POST['CONSENTRISIDAD'];
 $concestatus=$_POST['Concentricidad'];

 $factorAnum=$_POST['FACTOR_A'];
 $factorAstatus=$_POST['Factor_A'];

 $Abrasionnum=$_POST['ABRASION'];
 $Abrasionstatus=$_POST['Abrasion'];

 $Elongacionum=$_POST['ELONGACION'];
 $Elongacionstatus=$_POST['Elogacion'];

 $roturadelongacionum=$_POST['ROTURA_DE_ELONGACION'];
 $roturadelongacionstatus=$_POST['Rotura_de_Elogacion'];

  $desforre1num=$_POST['DESFORRE1'];
 $desforre1status=$_POST['Desforre_1'];

 $desforre2num=$_POST['DESFORRE2'];
 $desforre2status=$_POST['Desforre_2'];

 $encoalcalornum=$_POST['ENCOGIMIENTOALCALOR'];
 $encoalcalorstatus=$_POST['Encogimiento_al_Calor'];

$uswnum=$_POST['usw1'];
$uswstatus=$_POST['USW'];

 $hotsetnum=$_POST['hotset'];
$hotsetstatus=$_POST['HOT_SET'];

$comentarios=$_POST['comentarios2'];
$desicionfinal=$_POST['desicionfinal'];
$caracteristicasnum="INSERT INTO tablacaranum(resinum,resistatus,diamnum,diamstatus,grosaislanum,grosaislastatus,concenum,concestatus,factorAnum,factorAstatus,Abrasionnum,Abrasionstatus,Elongacionum,Elongacionstatus,roturadelongacionum,roturadelongacionstatus,desforre1num,desforre1status,desforre2num,desforre2status,encoalcalornum,encoalcalorstatus,uswnum,uswstatus,hotsetnum,hotsetstatus) VALUES ('$resinum','$resistatus','$diamnum','$diamstatus','$grosaislanum','$grosaislastatus','$concenum','$concestatus','$factorAnum','$factorAstatus','$Abrasionnum','$Abrasionstatus','$Elongacionum','$Elongacionstatus','$roturadelongacionum','$roturadelongacionstatus','$desforre1num','$desforre1status','$desforre2num','$desforre2status','$encoalcalornum','$encoalcalorstatus','$uswnum','$uswstatus','$hotsetnum','$hotsetstatus')"; 
$desicionfinal="INSERT INTO tablastatusetiquetaroja (desicionfinal) VALUES ('$desicionfinal')"; 
$radiobuttons="INSERT INTO tablacaraok(anchosecundario,aspectogeneral,marcaciondecable,etiqueta,embobinado,condiciondeconipack,colordecobre,formadelconductor,reporte,encogimientoalcalor,efectomemoria,burbujadeaire) VALUES ('$radioAnchoSecundario','$radioAspectoGeneral','$radioMarcacionDeCable','$radioEtiqueta','$radioEmbobinado','$radioCondiciondeconipack','$radioCoolorDeCobre','$radioFormaDelConductor','$radioReporte','$radioEncogimientoalcorte','$radioEfectoMemoria','$radioburbujadeaire')";
$registrodelogin="INSERT INTO tabladeregistrodelogin(dia,turno,semana) VALUES ('$dia', '$turno','$semana')"; 
$informaciondelabobina="INSERT INTO tablabobina(NoBobina,linea,frecuencia) VALUES ('$NoBobina','$linea','$frecuencia')"; 
$combinaciondecolor="INSERT INTO tablaregistrocombcolor (producto,calibre,composicion,statuscomp,colorprimario,statuscolpri,colorsecundario,statusecol,comentarios) VALUES ('$producto','$calibre','$composicion','$statuscomp','$colorprimario','$statuscolpri','$colorsecundario','$statusecol','$comentarios')"; 

 mysqli_query($conexion,$caracteristicasnum);
 mysqli_query($conexion,$radiobuttons);
 mysqli_query($conexion,$informaciondelabobina);
 mysqli_query($conexion,$desicionfinal);
 mysqli_query($conexion,$combinaciondecolor);
 mysqli_close($conexion);
  ?>

 