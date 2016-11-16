<?php
  include 'conexion.php';
 $producto=$_POST['producto'];
 $calibre=$_POST['calibre'];
 $composicion=$_POST['composicion'];
$resicarnumin=$_POST['resicarnumin'];
$resicarnummax=$_POST['resicarnummax'];
$diamnumin=$_POST['diamnumin'];
$diamnumax=$_POST['diamnumax'];
$groaisnumin=$_POST['groaisnumin'];
$groaisnumax=$_POST['groaisnumax'];
$concenumin=$_POST['concenumin'];
$concenumax=$_POST['concenumax'];
$factanumin=$_POST['factanumin'];
$factanumax=$_POST['factanumax'];
$abranumin=$_POST['abranumin'];
$abranumax=$_POST['abranumax'];
$elonumin=$_POST['elonumin'];
$elonumax=$_POST['elonumax'];
$rotelonumin=$_POST['rotelonumin'];
$rotelonumax=$_POST['rotelonumax'];
$desfo1numin=$_POST['desfo1numin'];
$desfo1numax=$_POST['desfo1numax'];
$desfo2numin=$_POST['desfo2numin'];
$desfo2numax=$_POST['desfo2numax'];
$encoalcalornumin=$_POST['encoalcalornumin'];
$enoalcalnumax=$_POST['enoalcalnumax'];
$uswnumin=$_POST['uswnumin'];
$uswnumax=$_POST['uswnumax'];
$hotsetmin=$_POST['hotsetmin'];
$hotsetmax=$_POST['hotsetmax'];





 $caraminmax="INSERT INTO caranuminmax(producto,calibre,composicion,resicarnumin,resicarnummax,diamnumin,diamnumax,groaisnumin,groaisnumax,concenumin,concenumax,factanumin,factanumax,abranumin,abranumax,elonumin,elonumax,rotelonumin,rotelonumax,desfo1numin,desfo1numax,desfo2numin,desfo2numax,encoalcalornumin,enoalcalnumax,uswnumin,uswnumax,hotsetmin,hotsetmax)  VALUES('$producto','$calibre','$composicion','$resicarnumin','$resicarnummax','$diamnumin','$diamnumax','$groaisnumin','$groaisnumax','$concenumin','$concenumax','$factanumin','$factanumax','$abranumin','$abranumax','$elonumin','$elonumax','$rotelonumin','$rotelonumax','$desfo1numin','$desfo1numax','$desfo2numin','$desfo2numax','$encoalcalornumin','$enoalcalnumax','$uswnumin','$uswnumax','$hotsetmin','$hotsetmax') "; 


mysqli_query($conexion,$caraminmax);
 mysqli_close($conexion);
  ?>