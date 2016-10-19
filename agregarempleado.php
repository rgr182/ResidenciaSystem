  <?php
      include 'conexion.php';


 include 'conexion.php';
 $idempleado =$_POST['idempleado'];
      $nombredelauditor =$_POST['nombredelauditor'];
      $contra =$_POST['contra'];

      $ruta="Imagenes";
      $archivo=$_FILES['imagenempl']['tmp_name'];
      $nombreArchivo=$_FILES['imagenempl']['name'];
      move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
      $ruta=$ruta."/".$nombreArchivo;

  $query1="INSERT INTO tablatipousuario (tipousuario) VALUES ('$tipousuario')";
  $query1="INSERT INTO tablaempleado (idempleado, nombredelauditor,contra,imagenempl) VALUES ('$idempleado', '$nombredelauditor', '$contra','$imagenempl')";    






/*$imagenempl="Imagenes/"+basename( $_FILES['imagenempl']['name']);
echo "esta es la imagen " + $imagenempl;






$target_path = "Imagenes/";
      $target_path = $target_path . basename( $_FILES['imagenempl']['name']); if(move_uploaded_file($_FILES['imagenempl']['tmp_name'], $target_path)) { echo "El archivo ". basename( $_FILES['imagenempl']['name']). " ha sido subido";
      } else{
          echo "Ha ocurrido un error, trate de nuevo!";
      }*/


$resultado= mysqli_query($conexion,$query1);
 mysqli_close($conexion);
?>
     







//    $query1=INSERT INTO `bbasededatosdeextrusion`.`tablaempleado` (`idempleado`, `idturno`, `idtupusu`, `contra`) VALUES ($idempleado, $contra,);
   $query1="INSERT INTO tablaempleado (`idempleado`, `nombredelauditor`, `idturno`, `idtupusu`, `contra`, `fechadeingreso`,`imagenempl`) VALUES ('$idempleado', '$nombredelauditor', '$contra', '$imagenempl')";
 $resultado= mysqli_query($conexion,$query1);
 mysqli_close($conexion);
  ?>



