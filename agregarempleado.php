  <?php
      include 'conexion.php';
      $idempleado =$_POST['idempleado'];
      $nombre =$_POST['nombre'];
      $contra =$_POST['contra'];
      $target_path = "Imagenes/";
      $target_path = $target_path . basename( $_FILES['uploadedfile']['name']); if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido";
      } else{
          echo "Ha ocurrido un error, trate de nuevo!";
      }
      $nombre=$_FILES['uploadedfile']['name'];
      echo $idempleado;
      echo $nombre;
      echo $contra;
//      $query1 = "INSERT INTO tablaempleado (idempleado, idturno, idtupusu, contra, fechadeingreso,imagenempl)VALUES ('$idempleado',12,45,'$contra',null,null)";
//      $resultado= mysqli_query($conexion,$query1);
//      mysqli_close($conexion);
  ?>



