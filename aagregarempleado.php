<?php
 include 'conexion.php';
 $idempleado =$_POST['idempleado'];
      $nombre =$_POST['nombre'];
      $contra =$_POST['contra'];
      $tipousuario=$_POST['tipousuario'];
      
    $query1="INSERT INTO tablaempleado (idempleado, nombre,contra,imagenemp,tipousuario) VALUES ('$idempleado', '$nombre', '$contra','dulllce','$tipousuario')";
  mysqli_query($conexion,$query1);
 mysqli_close($conexion);





?>