<?php
 include 'conexion.php';

 $idempleado =$_POST['idempleado'];
      $nombre =$_POST['nombre'];
      $contra =$_POST['contra'];
      $tipousuario=$_POST['tipousuario'];
      $target_path = "Imagenes/";     
      $target_path = $target_path.basename( $_FILES['imagenemp']['name']);      
      if(move_uploaded_file($_FILES['imagenemp']['tmp_name'], $target_path)) { 
        //echo "El archivo ". basename( $_FILES['imagenemp']['name']). " ha sido subido";
      } else{
      //    echo "Ha ocurrido un error, trate de nuevo!";
      }
      
  $guardarempleado="INSERT INTO tablaempleado (idempleado, nombre,contra,imagenemp,tipousuario) VALUES ('$idempleado', '$nombre', '$contra','$target_path','$tipousuario')";
  echo $guardarempleado;
  mysqli_query($conexion,$guardarempleado);
 mysqli_close($conexion);
?>