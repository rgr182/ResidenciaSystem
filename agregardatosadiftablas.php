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



  $query1=mysql_query("INSERT INTO tablaempleado VALUES ('$dia', '$turno', '$semana')"); 
  $query1=mysql_query("INSERT INTO tablabobina VALUES ('$Nobobina')"); 
  $query1=mysql_query("INSERT INTO tablafrecuencia VALUES ('$frecuencia')");
  $query1=mysql_query("INSERT INTO tablalinea VALUES ('$linea')");
  $query1=mysql_query("INSERT INTO tablaproducto VALUES ('$producto')"); 
  $query1=mysql_query("INSERT INTO tablacalibre VALUES ('$calibre')");
  $query1=mysql_query("INSERT INTO tablacomposicion VALUES ('$composicion')");
  $query1=mysql_query("INSERT INTO tablastatus VALUES ('$status')");
  $query1=mysql_query("INSERT INTO tablacolorprimario VALUES ('$colorprimario')");
  $query1=mysql_query("INSERT INTO tablastatus VALUES ('$status')");
  $query1=mysql_query("INSERT INTO tablacolorsecundario VALUES ('$colorsecundario')");
  $query1=mysql_query("INSERT INTO tablastatus VALUES ('$status')");

  $resultado= mysqli_query($conexion,$query1);
 mysqli_close($conexion);
  ?>

  ?>