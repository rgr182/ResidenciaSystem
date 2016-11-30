<?php
 include 'conexion.php';

 $idempleado =$_POST['idempleado'];
 $nombre =$_POST['nombre'];
 $contra =$_POST['contra'];
 $tipousuario=$_POST['tipousuario'];
 $target_path = "Imagenes/";     
 $target_path = $target_path.basename( $_FILES['imagenemp']['name']);      
 move_uploaded_file($_FILES['imagenemp']['tmp_name'], $target_path); 

  $selectByName = "SELECT * FROM tablaempleado WHERE nombre LIKE '%$nombre%'";
  $selectById   = "SELECT * FROM tablaempleado WHERE idempleado = '$idempleado'";   
  $queryNombre  = mysqli_query($conexion,$selectByName);
  $queryId      = mysqli_query($conexion,$selectById);

 
 $contadorNombre = mysqli_num_rows ($queryNombre);
 $contadorId = mysqli_num_rows ($queryId);  
    

  $guardarempleado="INSERT INTO tablaempleado (idempleado, nombre,contra,imagenemp,tipousuario) VALUES ('$idempleado', '$nombre', '$contra','$target_path','$tipousuario')";

  if ($contadorNombre  <= 0 || $contadorId  <= 0 ) {      
      if (mysqli_query($conexion,$guardarempleado)) {
      	echo "Empleado guardado Exitosamente";
      }
  }else{
 		echo "Ya existe ese Empleado el registro no fue guardado";
  }

  mysqli_close($conexion);
?>