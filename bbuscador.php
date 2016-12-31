<?php
  require_once 'conexion.php';
  $search ='';
  if(isset($_POST['search'])){
  	 $search = $_POST['search'];
  }

   $consulta ="SELECT * FROM tablabobina  WHERE Nobobina LIKE '%".$search."%'";
   $resultado = $conexion->query($consulta);
   $fila=mysqli_fetch_assoc($resultado);
   $total = mysqli_num_rows($resultado);

  ?>
  <?php if ($total>0 && $search!=''){?>
  <h2>Resultados de la búsqueda</h2>
  <?php do { ?>
  <?php echo $fila['Nobobina']?>
  <?php } while ($fila=mysqli_fetch_assoc($resultado));?>


 <?php }?>