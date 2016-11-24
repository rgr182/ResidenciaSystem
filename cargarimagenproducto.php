  <?php
 include 'conexion.php';

      $calibre =$_POST['calibre'];
      $composicion =$_POST['composicion'];
      $colorprimario =$_POST['colorprimario'];
      $colorsecundario=$_POST['colorsecundario'];
      $target_path = "Imagenespro/";     
      $target_path = $target_path.basename( $_FILES['imagenproducto']['name']);
      echo  "el valor del post es ".$_FILES['imagenproducto']['name'];
      if(move_uploaded_file($_FILES['imagenproducto']['tmp_name'], $target_path)) { 
        echo "El archivo ".basename( $_FILES['imagenproducto']['name'])." ha sido subido";
      } else{
          echo "Ha ocurrido un error, trate de nuevo!";
      }
      
 //   $guardarimagenproducto="INSERT INTO tablacombinacioncolor(calibre,composicion,colorprimario,colorsecundario) VALUES ('$calibre','$composicion', '$colorprimario', '$colorsecundario','$target_path')";
  //mysqli_query($conexion,$guardarimagenproducto);
 mysqli_close($conexion);
 
  ?>



