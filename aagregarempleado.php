<?php
 include 'conexion.php';
 $idempleado =$_POST['idempleado'];
      $nombredelauditor =$_POST['nombredelauditor'];
      $contra =$_POST['contra'];
       $query1="INSERT INTO tablaempleado (idempleado, nombredelauditor,contra) VALUES ('$idempleado', '$nombredelauditor', '$contra')";
 $resultado= mysqli_query($conexion,$query1);
 mysqli_close($conexion);



?>