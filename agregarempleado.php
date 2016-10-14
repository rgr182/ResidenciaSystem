  <?php
      include 'conexion.php';
      $idempleado =$_POST['idempleado'];
      $nombredelauditor =$_POST['nombredelauditor'];
      $contra =$_POST['contra'];
      $target_path = "Imagenes/";
      $imagenempl=$target_path . basename( $_FILES['imagenempl']['name']);
      $target_path = $target_path . basename( $_FILES['imagenempl']['name']); if(move_uploaded_file($_FILES['imagenempl']['tmp_name'], $target_path)) { echo "El archivo ". basename( $_FILES['imagenempl']['name']). " ha sido subido";
      } else{
          echo "Ha ocurrido un error, trate de nuevo!";
      }
      
      echo $idempleado;
      echo $nombredelauditor;
      echo $contra;
      echo $imagenempl;
// $query1 = "INSERT INTO tablaempleado (idempleado, idturno, idtupusu, contra, fechadeingreso,imagenempl)VALUES ('$idempleado',12,45,'$contra',null,null)";
//    $query1=INSERT INTO `bbasededatosdeextrusion`.`tablaempleado` (`idempleado`, `idturno`, `idtupusu`, `contra`) VALUES ($idempleado, $contra,);
   $query1="INSERT INTO tablaempleado (`idempleado`, `nombredelauditor`, `idturno`, `idtupusu`, `contra`, `fechadeingreso`,`imagenempl`) VALUES ('$idempleado', '$nombredelauditor', '$contra', '$imagenempl')";
 $resultado= mysqli_query($conexion,$query1);
 mysqli_close($conexion);
  ?>



