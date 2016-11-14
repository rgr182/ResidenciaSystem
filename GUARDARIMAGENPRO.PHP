<?php
  include 'conexion.php';
  
  $calibre =$_POST['calibre'];
  $composicion =$_POST['composicion'];
  $colorsecundario =$_POST['colorsecundario'];
  $colorprimario =$_POST['colorprimario'];
  $imagenpro =$_POST['imagenpro'];
  
  $query1="INSERT INTO tablacombinacioncolor(calibre,composicion,colorsecundario,colorprimario,imagenpro) VALUES ('$calibre','$composicion','$colorsecundario','$colorprimario','$imagenpro')"; 
mysqli_query($conexion,$query1);
 mysqli_close($conexion);
  ?>