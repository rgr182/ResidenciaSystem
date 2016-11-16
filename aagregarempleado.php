<?php
 include 'conexion.php';
 $idempleado =$_POST['idempleado'];
      $nombre =$_POST['nombre'];
      $contra =$_POST['contra'];
      $tipousuario=$_POST['tipousuario'];
      
    $guardarempleado="INSERT INTO tablaempleado (idempleado, nombre,contra,imagenemp,tipousuario) VALUES ('$idempleado', '$nombre', '$contra','dulllce','$tipousuario')";
  mysqli_query($conexion,$guardarempleado);
 mysqli_close($conexion);





?>