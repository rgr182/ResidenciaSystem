<?php
 include 'conexion.php';


      $ruta="Imagenes";
      $archivo=$_FILES['imagenempl']['tmp_name'];
      $nombreArchivo=$_FILES['imagenempl']['name'];
      move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
      $ruta=$ruta."/".$nombreArchivo;


/* $idempleado =$_POST['idempleado'];
      $nombredelauditor =$_POST['nombredelauditor'];
      $contra =$_POST['contra'];
      $tipousuario=$_post['tipousuario'];
      $query1="INSERT INTO tablatipousuario (tipousuario) VALUES ('$tipousuario')";
       $query1="INSERT INTO tablaempleado (idempleado, nombredelauditor,contra) VALUES ('$idempleado', '$nombredelauditor', '$contra')";
 $resultado= mysqli_query($conexion,$query1);
 mysqli_close($conexion);
 if ($resultado){
 	header('Location:Administrador.php?pros=si');
 }else{
 	header('Location:Administrador.php?pros=no');
 }*/





?>