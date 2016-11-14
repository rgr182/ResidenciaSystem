 <?php
  include 'conexion.php';
  //$dia =$_POST['dia'];
  //$turno =$_POST['turno'];
  //$semana =$_POST['semana'];
 // $NoBobina =$_POST['NoBobina']; 
  //$linea =$_POST['linea']; 
  //$frecuencia =$_POST['frecuencia'];
  //$producto =$_POST['producto'];
  //$calibre =$_POST['calibre'];
  //$composicion =$_POST['composicion'];
  //$statuscomp =$_POST['statuscomp'];
  //$colorprimario =$_POST['colorprimario'];
  //$statuscolpri =$_POST['statuscolpri'];
  //$colorsecundario =$_POST['colorsecundario'];
  //$statusecol =$_POST['statusecol'];
 /* $radioAnchoSecundario =$_POST['anchosecundario'];
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
 $radioburbujadeaire=$_POST['burbujadeaire'];*/
  $resinum=$_POST['resistencia'];
 $resistatus=$_POST['RESISTENCIA'];
 $diamnum=$_POST['diametroaislante'];
 $diamstatus=$_POST['DIAMETRO_DEL_AISLANTE'];

 $grosaislanum=$_POST['Grosor_del_Aislante'];
 $grosaislastatus=$_POST['Grosor_del_Aislante'];

 $concenum=$_POST['Concentricidad'];
 $concestatus=$_POST['Concentricidad'];

 $factorAnum=$_POST['Factor_a'];
 $factorAstatus=$_POST['Factor_A'];

 $Abrasionnum=$_POST['Abrasion'];
 $Abrasionstatus=$_POST['Abrasion'];

 $Elongacionum=$_POST['Elogacion'];
 $Elongacionstatus=$_POST['Elogacion'];

 $roturadelongacionum=$_POST['Rotura_de_Elogacion'];
 $roturadelongacionstatus=$_POST['Rotura_de_Elogacion'];

  $desforre1num=$_POST['Desforre_1'];
 $desforre1status=$_POST['Desforre_1'];

 $desforre2num=$_POST['Desforre_2'];
 $desforre2status=$_POST['Desforre_2'];

 $encoalcalornum=$_POST['Encogimiento_al_Calor'];
 $encoalcalorstatus=$_POST['Encogimiento_al_Calor'];

$uswnum=$_POST['USW'];
$uswstatus=$_POST['USW'];

 $hotsetnum=$_POST['HOT_SET'];
$hotsetstatus=$_POST['HOT_SET'];

$comentarios=$_POST['comentarios2'];
//$query1="INSERT INTO tablaregistrocombcolor(comentarios)VALUES('$comentarios') ";

 

 $query1="INSERT INTO tablacaranum(resinum,resistatus,diamnum,diamstatus,grosaislanum,grosaislastatus,concenum,concestatus,factorAnum,factorAstatus,Abrasionnum,Abrasionstatus,Elongacionum,Elongacionstatus,roturadelongacionum,roturadelongacionstatus,desforre1num,desforre1status,desforre2num,desforre2status,encoalcalornum,encoalcalorstatus,uswnum,uswstatus,hotsetnum,hotsetstatus) VALUES ('$resinum','$resistatus','$diamnum','$diamstatus','$grosaislanum','$grosaislastatus','$concenum','$concestatus','$factorAnum','$factorAstatus','$Abrasionnum','$Abrasionstatus','$Elongacionum','$Elongacionstatus','$roturadelongacionum','$roturadelongacionstatus','$desforre1num','$desforre1status','$desforre2num','$desforre2status','$encoalcalornum','$encoalcalorstatus','$uswnum','$uswstatus','$hotsetnum','$hotsetstatus')"; 
echo $query1;
//$query1="INSERT INTO tablacaranum(resinum,resistatus,diamnum,diamstatus,grosaislanum,grosaislastatus,concenum,concestatus)VALUES('$resinum','$resistatus','$diamnum','$diamstatus','$grosaislanum','$grosaislastatus','$concenum','$concestatus') ";



//$desicionfinal=$_POST['desicionfinal'];
//$query1="INSERT INTO tablastatusetiquetaroja (desicionfinal) VALUES ('$desicionfinal')"; 

 
 //echo "valor de los radiobutton"."</br>";
 //echo $radioAnchoSecundario."".$radioAspectoGeneral."".$radioMarcacionDeCable."".$radioEtiqueta."".$radioEmbobinado."".$radioCondiciondeconipack."".$radioCoolorDeCobre."".$radioFormaDelConductor."".$radioReporte."".$radioEncogimientoalcorte."".$radioEfectoMemoria."".$radioburbujadeaire;   
 //$query1="INSERT INTO tablacaraok(anchosecundario,aspectogeneral,marcaciondecable,etiqueta,embobinado,condiciondeconipack,colordecobre,formadelconductor,reporte,encogimientoalcalor,efectomemoria,burbujadeaire) VALUES ('$radioAnchoSecundario','$radioAspectoGeneral','$radioMarcacionDeCable','$radioEtiqueta','$radioEmbobinado','$radioCondiciondeconipack','$radioCoolorDeCobre','$radioFormaDelConductor','$radioReporte','$radioEncogimientoalcorte','$radioEfectoMemoria','$radioburbujadeaire')";
// $resultado= mysqli_query($conexion,$query1);
  

  
 

 // $query1="INSERT INTO tabladeregistrodelogin(dia,turno,semana) VALUES ('$dia', '$turno','$semana')"; 
// $query1="INSERT INTO tablabobina(NoBobina,linea,frecuencia) VALUES ('$NoBobina','$linea','$frecuencia')"; 
//$query1="INSERT INTO tablaregistrocombcolor (producto,calibre,composicion,statuscomp,colorprimario,statuscolpri,colorsecundario,statusecol) VALUES ('$producto','$calibre','$composicion','$statuscomp','$colorprimario','$statuscolpri','$colorsecundario','$statusecol')"; 

 mysqli_query($conexion,$query1);
 //mysqli_query($conexion,$query2);
 //mysqli_query($conexion,$query3);
 mysqli_close($conexion);
  ?>

 