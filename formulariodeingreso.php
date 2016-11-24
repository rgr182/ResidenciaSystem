<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link REL=StyleSheet HREF="estilos.css" TYPE="text/css" MEDIA=screen>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="Scripts/Login.js"></script>
</head>
  <STYLE TYPE="text/css">
  
input {
height:25px;
width:60px;
font-size:30px;

}
button{
  margin-left:2%;
  margin-right:1%; 
  margin-top:0%;
   font-size:90%;
        font-weight:bold;
        color:white;
        background:#2C3E50;
        border:0px;
        width:36%;
      position:absolute;
      

}


  </STYLE>





<img class="imagen" src="COFICAB.jpg">
<h1 >BASE DE DATOS DE EXTRUSION</h1>
<h2>LISTA DE EMPLEADOS</h2>
<nav>
  <ul>
   <li><a href="paginaprincipal.html">REGRESAR</a></li>
  </ul>
</nav>
</header>
<body>
<div id="openModal" class="modalDialogo">
  <div><a href="#close" title="cerrar" class="cerrar">X</a>
 
<img class="imagentrabajador" src="Oscar Ivan Vargas Hernandez Ing Calidad.jpg">
<FORM action="datosgenerales.php" method="post" enctype="text/plain">CONTRASEÑA  <input type="password" size="4" maxlength="4">
 <button >ENTRAR</button></FORM>

</FORM>

</div></div>



    <div id="tablaempleados" align="center">
      <table id="empleados" border="1">
    <tr><th>No  DE EMPLEADO</th>
    <th>NOMBRE DEL EMPLEADO</th></tr>    
      <?php
 include 'conexion.php';
 $query1="SELECT idempleado,nombre,imagenemp FROM tablaempleado";
 $consulta= mysqli_query($conexion,$query1);
?>


<?php while($fila = mysqli_fetch_array($consulta))
  { 
    
      echo '<tr>';
        echo'<td><a id='.$fila['idempleado'].' href="#openModal">'.$fila['idempleado'].'</a></td>';  
        echo'<td><a id='.$fila['idempleado'].' href="#openModal">'.$fila['nombre'].'</a></td>'; 
        echo'<td style="display:none;" ><img id='.$fila['idempleado'].' src="'.$fila["imagenemp"].'"></img></td>'; 
      echo '</tr>';
   
  } 
?>   
 </table>
</div>
 
<footer>CALIDAD </br>
Gerente:Ing. Ivan Del Campo</br>
Subgerente:Ing. Oscar Vargas</br>
By: Ing. Dulce Olivia Vidales 
</footer>

</body>
</html>