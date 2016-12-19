<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ADMINISTRADOR-ELIMINAR</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link REL=StyleSheet HREF="estilos.css" TYPE="text/css" MEDIA=screen>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="Scripts/AdministradorEliminar.js"></script>
<header>
<style type="text/css">
footer{
  margin-top:70%;
}
#myId{
  
 padding-left:65px;
 padding-right:15px;
 padding-bottom:10px;
background-color:#3498bd;
margin-left:10%; 
margin-right:15%;
position:absolute;
margin-top:33%; 
margin-bottom:5%;
color:white;
width: 80%;

}
#myId{
  margin-top:22%;
}
#eliminar_comb_de_producto  button{
  background-color:#273746;
  color:white;
  width: 30%;
  height:120%;
}
#eliminar_comb_de_producto h5{
  margin-left:25%;
  color:#273746;

}


#eliminarturno{
   padding-left:5px;
  padding-right:5px;
  padding-top: 5px;
  padding-bottom:10px;
background-color:#3498bd;
margin-left:10%; 
margin-right: 60%;
position:absolute;
margin-top:10%; 
margin-bottom:5%;
color:white;
width: 30%;


}
#eliminarturno button{
  background-color:blue;
  color:white;
  width: 30%;
  height:120%;
}
#eliminarcolorprimario{
   padding-left:5px;
  padding-right:5px;
  padding-top: 5px;
  padding-bottom:10px;
background-color:#3498bd;
margin-left:10%; 
margin-right:60%;
position:absolute;
margin-top:12%; 
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
margin-top:-2%; 
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
#eliminarempleado{
   padding-left:5px;
  padding-right:5px;
  padding-top: 5px;
  padding-bottom:10px;
background-color:#3498bd;
margin-left:10%; 
margin-right: 60%;
position:absolute;
margin-top:5%; 
margin-bottom:5%;
color:white;
width: 30%;

}
#eliminarempleado button{
  background-color:blue;
  color:white;
  width: 20%;
  height:100%;
}
#eliminarproducto{
   padding-left:5px;
  padding-right:5px;
  padding-top: 5px;
  padding-bottom:10px;
background-color:#3498bd;
margin-left:50%; 
margin-right: 10%;
position:absolute;
margin-top:-4%; 
margin-bottom:5%;
color:white;
width: 40%;


}
#eliminarproducto button{
  background-color:blue;
  color:white;
  width: 30%;
  height:120%;
}
#eliminarlinea{
   padding-left:5px;
  padding-right:5px;
  padding-top: 5px;
  padding-bottom:10px;
background-color:#3498bd;
margin-left:10%; 
margin-right: 60%;
position:absolute;
margin-top:10%; 
margin-bottom:5%;
color:white;
width: 30%;


}
#eliminarlinea button{
  background-color:blue;
  color:white;
  width: 30%;
  height:120%;
}
#eliminarfrecuencia{
   padding-left:5px;
  padding-right:5px;
  padding-top: 5px;
  padding-bottom:10px;
background-color:#3498bd;
margin-left:50%; 
margin-right: 10%;
position:absolute;
margin-top:-5%; 
margin-bottom:5%;
color:white;
width: 40%;


}
#eliminarfrecuencia button{
  background-color:blue;
  color:white;
  width: 30%;
  height:120%;
}
.eliminarstatusetiquetaroja{
   padding-left:5px;
  padding-right:5px;
  padding-top: 5px;
  padding-bottom:10px;
background-color:#E74C3C;
margin-left:45%; 
margin-right: 10%;
position:absolute;
margin-top:30%; 
margin-bottom:5%;
color:white;
width: 40%;


}
.eliminarstatusetiquetaroja button{
  background-color:red;
  color:#F39C12;
  width: 20%;
  height:120%;
}
#eliminardefecto{
   padding-left:5px;
  padding-right:5px;
  padding-top: 5px;
  padding-bottom:10px;
background-color:#E74C3C;
margin-left:10%; 
margin-right:55%;
position:absolute;
margin-top:30%; 
margin-bottom:5%;
color:white;
width: 30%;


}
#eliminardefecto button{
  background-color:red;
  color:#F39C12;
  width: 30%;
  height:120%;
}
.eliminardestino{
   padding-left:5px;
  padding-right:5px;
  padding-top: 5px;
  padding-bottom:10px;
background-color:#E74C3C;
margin-left:10%; 
margin-right: 60%;
position:absolute;
margin-top:36%; 
margin-bottom:5%;
color:white;
width: 30%;


}
.eliminardestino button{
  background-color:red;
  color:red;
  width: 30%;
  height:120%;
}
footer{
  background-color:#3498bd;
  color:#ffffff;
  margin-top:50%;
  margin-left:10%;
  margin-right:10%;
  text-decoration:none;
  text-align: center;
  padding-bottom:5%;
  font-size:140%;
  font-family:"calibri";

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
</br></br>
 <?php

if (isset($_GET['idEmpleado'])){
  $pros=$_GET['idEmpleado'];
}else {
  $pros="";
}
?>
<div id="miVentana">test</div>


<style type="text/css">
#miVentana{
position: fixed;
 width: 350px;
height: 190px;
top: 0;
left: 0;
 font-family:Verdana, Arial, Helvetica, sans-serif; 
font-size: 12px; 
font-weight: normal;
border: #333333 3px solid;
background-color: #ADAFFC;
color: blue; 
display:none;
z-index: 1000;
}

</style>


 <form action="eliminarturno.php" method="post" class="form-register" onsubmit="returnvalida();"> 
  <table id="eliminarturno">
    <tr>
     <th>TURNO</th>
    </tr>
    <tr>
    <td>TURNO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="turno" id="turno">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<br/><br/><br/>
 <?php

if (isset($_GET['turno'])){
  $pros=$_GET['turno'];
}else {
  $pros="";
}

?>
 
<form action="eliminarfrecuencia.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table id="eliminarfrecuencia">
    <tr>
     <th>FRECUENCIA</th>
    </tr>
    <tr>
    <td>FRECUENCIA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="frecuencia" id="frecuencia">&nbsp;&nbsp;&nbsp;&nbsp;
      <button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<br/><br/>
<?php

if (isset($_GET['frecuencia'])){
  $pros=$_GET['frecuencia'];
}else {
  $pros="";
}

?>
<form action="eliminarlinea.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table id="eliminarlinea">
    <tr>
     <th>LINEA</th>
    </tr>
    <tr>
    <td>LINEA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="linea" id="linea">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button onclick("borrar_liena()")> ELIMINAR </button>
    </td>
    </tr>
  </table>
</form>
<br/><br/>
<?php

if (isset($_GET['linea'])){
  $pros=$_GET['linea'];
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
      <input type="text" name="producto" id="producto">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<br/><br/>

<form>
<?php

if (isset($_GET['producto'])){
  $pros=$_GET['producto'];
}else {
  $pros="";
}
?>

<div/>
<div id="eliminar_comb_de_producto">
  <div id="myId">
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
  </div>

<div/>
</form>
</div>
<form action="eliminarcolorprimario.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table id="eliminarcolorprimario">
    <tr>
     <th>COLOR PRIMARIO</th>
    </tr>
    <tr>
    <td>COLOR PRIMARIO&nbsp;
      <input type="text" name="colorprimario" id="colorprimario">&nbsp;&nbsp;
      <button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<br/><br/>
<?php

if (isset($_GET['colorprimario'])){
  $pros=$_GET['colorprimario'];
}else {
  $pros="";
}

?>
<form action="eliminarcolorsecundario.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table id="eliminarcolorsecundario">
    <tr>
     <th>COLOR SECUNDARIO</th>
    </tr>
    <tr>
    <td>COLOR SECUNDARIO&nbsp;&nbsp;
      <input type="text" name="colorsecundario" id="colorsecundario">
      &nbsp;&nbsp;<button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<br/><br/>
<?php

if (isset($_GET['colorsecundario'])){
  $pros=$_GET['colorsecundario'];
}else {
  $pros="";
}

?>
<form action="eliminardefecto.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table id="eliminardefecto">
    <tr>
     <th>DEFECTO</th>
    </tr>
    <tr>
    <td>DEFECTO&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="defecto" id="defecto">
      &nbsp;&nbsp;&nbsp;&nbsp;<button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<?php

if (isset($_GET['defecto'])){
  $pros=$_GET['defecto'];
}else {
  $pros="";
}


?>
<form action="eliminarstatusetiquetaroja.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table CLASS="eliminarstatusetiquetaroja">
    <tr>
     <th>STATUS ETIQUETA ROJA</th>
    </tr>
    <tr>
    <td>STATUS ETIQUETA ROJA&nbsp;&nbsp;
      <input type="text" name="statusetiquetaroja" id="statusetiquetaroja">&nbsp;&nbsp;
      <button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<br/><br/>
<?php

if (isset($_GET['statusetiquetaroja'])){
  $pros=$_GET['statusetiquetaroja'];
}else {
  $pros="";
}

 
?>
<form action="eliminardestino.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table CLASS="eliminardestino">
    <tr>
     <th>DESTINO</th>
    </tr>
    <tr>
    <td>DESTINO&nbsp;&nbsp;
      <input type="text" name="destino" id="destino">
      &nbsp;&nbsp;<button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<br/><br/>
<?php

if (isset($_GET['destino'])){
  $pros=$_GET['destino'];
}else {
  $pros="";
}
?>
<footer>CALIDAD </br>
Gerente:Ing. Ivan Del Campo</br>
Subgerente:Ing. Oscar Vargas</br>
By: Ing. Dulce Olivia Vidales
</footer>

   
</body>
</html>