  <<html>
  <head>
    <title></title>
  </head>
  <body>

  </body>
  </html>

  <?php
      include 'conexion.php';
      $imagenpro=$_FILES['imagenpro']['name'];
      $target_path = "Imagenesproductos/";
      $target_path = $target_path . basename( $_FILES['imagenpro']['name']); if(move_uploaded_file($_FILES['imagenepro']['tmp_name'], $target_path)) { echo "El archivo ". basename( $_FILES['imagenpro']['name']). " ha sido subido";
      } else{
          echo "Ha ocurrido un error, trate de nuevo!";
      }
      $imagenpro=$_FILES['imagenpro']['name'];
      //echo $idempleado;
      //echo $nombreemple;
      //echo $contra;
// $query1 = "INSERT INTO tablaempleado (idempleado, idturno, idtupusu, contra, fechadeingreso,imagenempl)VALUES ('$idempleado',12,45,'$contra',null,null)";
//    $query1=INSERT INTO `bbasededatosdeextrusion`.`tablaempleado` (`idempleado`, `idturno`, `idtupusu`, `contra`) VALUES ($idempleado, $contra,);
  
 mysqli_close($conexion);
  ?>



