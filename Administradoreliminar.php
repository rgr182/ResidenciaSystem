<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ADMINISTRADOR-ELIMINAR</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link REL=StyleSheet HREF="estilos.css" TYPE="text/css" MEDIA=screen>
<script type="text/javascript" src="Scripts/AdministradorEliminar.js"></script>
<header>
<style type="text/css">
footer{
  margin-top:70%;
}
#eliminar_comb_de_producto{
   padding-left:65px;
  padding-right:15px;
  padding-top: 5px;
  padding-bottom:10px;
background-color:#3498bd;
margin-left:10%; 
margin-right:15%;
position:absolute;
margin-top:31%; 
margin-bottom:5%;
color:white;
width: 80%;
}
#eliminar_comb_de_producto  button{
  background-color:blue;
  color:white;
  width: 30%;
  height:120%;
}
#eliminar_comb_de_producto h5{
  margin-left:25%;

}
#eliminarcolorprimario{
   padding-left:5px;
  padding-right:5px;
  padding-top: 5px;
  padding-bottom:10px;
background-color:#3498bd;
margin-left:-5%; 
margin-right:60%;
position:absolute;
margin-top:85%; 
margin-bottom:5%;
color:white;
width: 40%;


}
#eliminarcolorprimario button{
  background-color:blue;
  color:white;
  width: 30%;
  height:120%;
}
#eliminarcolorsecundario{
   padding-left:5px;
  padding-right:5px;
  padding-top: 5px;
  padding-bottom:10px;
background-color:#3498bd;
margin-left:50%; 
margin-right:-1%;
position:absolute;
margin-top:41%; 
margin-bottom:5%;
color:white;
width: 45%;
}
#eliminarcolorsecundario button{
  background-color:blue;
  color:white;
  width: 20%;
  height:120%;
}
</style>
<img class="imagen" src="COFICAB.jpg">
<h1 >BASE DE DATOS DE EXTRUSION</h1>
<h2>ELIMINAR</h2>
<nav>
  <ul>
   <li><a href="Reportes.php">REPORTES</a></li>
   <li><a href="Administrador.php">AGREGAR</a></li>
    <li><a href="formulariodeingreso.php">SALIR</a></li>
  </ul>
</nav>  
</header>

<body>
  <?php

if (isset($_GET['pros'])){
  $pros=$_GET['pros'];
}else {
  $pros="";
}

 if($pros=='si') {
  echo "EMPLEADO ELIMINADO CORRECTAMENTE ";
 }elseif($pros=='no'){

echo "EMPLEADO NO ELIMINADO";
 }

?>

<form action="eliminarempleado.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table id="eliminarempleado">
    <tr>
     <th>EMPLEADO</th>
    </tr>
    <tr>
    <td>No DE EMPLEADO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="idempleado" id="idempleado">&nbsp;<button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
 <?php

if (isset($_GET['pros'])){
  $pros=$_GET['pros'];
}else {
  $pros="";
}

 if($pros=='si') {
  echo "TURNO ELIMINADO CORRECTAMENTE ";
 }elseif($pros=='no'){

echo "TURNO NO ELIMINADO";
 }

?>
 <form action="eliminarturno.php" method="post" class="form-register" onsubmit="returnvalida();"> 
  <table id="eliminarturno">
    <tr>
     <th>TURNO</th>
    </tr>
    <tr>
    <td>TURNO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="turno">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
 <?php

if (isset($_GET['pros'])){
  $pros=$_GET['pros'];
}else {
  $pros="";
}

 if($pros=='si') {
  echo "FRECUENCIA ELIMINADO CORRECTAMENTE ";
 }elseif($pros=='no'){

echo "FRECUENCIA NO ELIMINADO";
 }

?>
<form action="eliminarfrecuencia.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table id="eliminarfrecuencia">
    <tr>
     <th>FRECUENCIA</th>
    </tr>
    <tr>
    <td>FRECUENCIA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="frecuencia">&nbsp;&nbsp;&nbsp;&nbsp;
      <button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<?php

if (isset($_GET['linea'])){
  $pros=$_GET['linea'];
}else {
  $pros="";
}

 if($pros=='si') {
  echo "LINEA ELIMINADO CORRECTAMENTE ";
 }elseif($pros=='no'){

echo "LINEA NO ELIMINADO";
 }

?>

<form action="eliminarlinea.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table id="eliminarlinea">
    <tr>
     <th>LINEA</th>
    </tr>
    <tr>
    <td>LINEA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="linea">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button onclick("borrar_liena()")> ELIMINAR </button>
    </td>
    </tr>
  </table>
</form>
<?php

if (isset($_GET['pros'])){
  $pros=$_GET['pros'];
}else {
  $pros="";
}

 

?>
<form action="eliminarproducto.php" method="post" class="form-register" onsubmit="returnvalida();">
   <table id="eliminarproducto">
    <tr>
     <th>PRODUCTO</th>
    </tr>
    <tr>
    <td>PRODUCTO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="producto">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<?php

if (isset($_GET['pros'])){
  $pros=$_GET['pros'];
}else {
  $pros="";
}

 if($pros=='si') {
  echo "CALIBRE ELIMINADO CORRECTAMENTE ";
 }elseif($pros=='no'){

echo "CALIBRE NO ELIMINADO";
 }

?>
<div id="eliminar_comb_de_producto">
  <h5>ELIMINAR COMB DE PRODUCTO, COMPOSICION Y CALIBRE </h5>
PRODUCTO&nbsp;<?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablaproducto';

         $result = $conexion->query($query);

         ?>&nbsp;
       <SELECT id="producto" name="producto">
          <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
        <option value="<?php echo $row['producto']?>" >
        <?php echo $row['producto']; ?>
        </option>
        
        <?php
         }    
         ?>
      </SELECT>
        CALIBRE
       <input type="text" size="1" maxlength="5" value="" name="calibre">
       COMPOSICION
       <input type="text" size="3" maxlength="7" value="" name="composicion">&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;
       <button>ELIMINAR</button>

<div/>

<?php

if (isset($_GET['pros'])){
  $pros=$_GET['pros'];
}else {
  $pros="";
}

 if($pros=='si') {
  echo "COLOR PRIMARIO ELIMINADO CORRECTAMENTE ";
 }elseif($pros=='no'){

echo "COLOR PRIMARIO NO ELIMINADO";
 }

?>
<form action="eliminarcolorprimario.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table id="eliminarcolorprimario">
    <tr>
     <th>COLOR PRIMARIO</th>
    </tr>
    <tr>
    <td>COLOR PRIMARIO&nbsp;
      <input type="text" name="colorprimario">&nbsp;&nbsp;
      <button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<?php

if (isset($_GET['pros'])){
  $pros=$_GET['pros'];
}else {
  $pros="";
}

 if($pros=='si') {
  echo "COLOR SECUNDARIO ELIMINADO CORRECTAMENTE ";
 }elseif($pros=='no'){

echo "COLOR SECUNDARIO NO ELIMINADO";
 }

?>
<form action="eliminarcolorsecundario.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table id="eliminarcolorsecundario">
    <tr>
     <th>COLOR SECUNDARIO</th>
    </tr>
    <tr>
    <td>COLOR SECUNDARIO&nbsp;&nbsp;
      <input type="text" name="colorsecundario">
      &nbsp;&nbsp;<button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<?php

if (isset($_GET['pros'])){
  $pros=$_GET['pros'];
}else {
  $pros="";
}

 if($pros=='si') {
  echo "DEFECTO ELIMINADO CORRECTAMENTE ";
 }elseif($pros=='no'){

echo "DEFECTO NO ELIMINADO";
 }

?>
<form action="eliminardefecto.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table id="eliminardefecto">
    <tr>
     <th>DEFECTO</th>
    </tr>
    <tr>
    <td>DEFECTO&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="defecto">
      &nbsp;&nbsp;&nbsp;&nbsp;<button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<?php

if (isset($_GET['pros'])){
  $pros=$_GET['pros'];
}else {
  $pros="";
}

 if($pros=='si') {
  echo "STATUS ETIQUETA ROJA ELIMINADO CORRECTAMENTE ";
 }elseif($pros=='no'){

echo "STATUS ETIQUETA ROJA NO ELIMINADO";
 }

?>
<form action="eliminarstatusetiquetaroja.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table CLASS="eliminarstatusetiquetaroja">
    <tr>
     <th>STATUS ETIQUETA ROJA</th>
    </tr>
    <tr>
    <td>STATUS ETIQUETA ROJA&nbsp;&nbsp;
      <input type="text" name="statusetiquetaroja">&nbsp;&nbsp;
      <button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<?php

if (isset($_GET['pros'])){
  $pros=$_GET['pros'];
}else {
  $pros="";
}

 if($pros=='si') {
  echo "DESTINO ELIMINADO CORRECTAMENTE ";
 }elseif($pros=='no'){

echo "DESTINO NO ELIMINADO";
 }

?>
<form action="eliminardestino.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table CLASS="eliminardestino">
    <tr>
     <th>DESTINO</th>
    </tr>
    <tr>
    <td>DESTINO&nbsp;&nbsp;
      <input type="text" name="destino">
      &nbsp;&nbsp;<button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>


   
</body>
</html>