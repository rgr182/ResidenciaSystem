<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link REL=StyleSheet HREF="estilos.css" TYPE="text/css" MEDIA=screen>
<header>
 <title>ADMINISTRADOR-AGREGAR</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="Scripts/ValidacionesFormularios.js"></script>
<img class="imagen" src="COFICAB.jpg">
<h1 >BASE DE DATOS DE EXTRUSION</h1>
<h2>AGREGAR</h2>
<nav>
  <ul>
   <li><a href="Reportes.php">REPORTES</a></li>
   <li><a href="Administradoreliminar.php">ELIMINAR</a></li>
    <li><a href="formulariodeingreso.PHP">SALIR</a></li>
  </ul>
</nav>
</header>
<body>
<form id="guardaEmpleado" action="aagregarempleado.php"method="post" enctype="multipart/form-data">
	 <table  id="agregarempleados">
          <th colspan="2">AGREGAR USUARIOS</th>
          <tr><td>TIPO DE USUARIO</td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablatipousuario';

         $result = $conexion->query($query);

         ?>&nbsp;
         <SELECT name="tipousuario" ID="tipousuario">
          <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
    
        <option value="<?php echo $row['tipousuario']?>" >
        <?php echo $row['tipousuario']; ?>
        </option>
        
        <?php
         }    
         ?>&nbsp;</td>
     	</tr>
     	<tr>
     		<td><br>NUMERO DE EMPLEADO</br></td>
     	    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="idempleado" id="idempleado" value=""  size="2" maxlength="4">
     	</tr>
     		<tr>
     		<td><br>NOMBRE DEL AUDITOR</br></td>
     	    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="nombre" id="nombre" value=""></td>
     	</tr>
     	<tr>
     <td><br>CONTRASEÑA</br></td>
     	    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="password" name="contra" id="contra" value="" size="2" maxlength="4">
     	</tr>
     	<tr>
     		<td><br>CARGAR IMAGEN TEST:</br></td>
     	    <td>
                <input id="imagenemp" name="imagenemp" type="file" />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input onclick="valida_empleado()" type="button" value = "Aceptar" name = "btnAceptar">
          </tr>
          <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     </table>
   </form>
<form id="agregaturno" action="agregartturno.php"method="post">
<table id="agregarturno">
    <tr>
     <th>TURNO</th>
    </tr>
    <tr>
    <td>TURNO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input  size="1" maxlength="1" type="text" id="turno"name="turno">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input onclick="valida_turno()" type="button" value = "Aceptar" name = "btnAceptar">
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

 //if($pros=='si') {
  //echo "FRECUENCIA AGREGADO CORRECTAMENTE ";
 //}elseif($pros=='no'){

//echo "FRECUENCIA NO AGREGADO";
 //}

//?>


<form ID="aagregaFrecuancia" action="agregarfrecuencia.php"method="post">
  <table id="agregarfrecuencia">
    <tr>
     <th>FRECUENCIA</th>
    </tr>
    <tr>
    <td>FRECUENCIA&nbsp;&nbsp;&nbsp;
      <input  size="1"  type="text" id="Frecuencia" name="Frecuencia">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input onclick="valida_Frecuencia()" type="button" value = "Aceptar" name = "btnAceptar">
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
 <form id="aagregalinea" action="agregarlinea.php"method="post">
  <table id="agregarlinea">
    <tr>
     <th>LINEA</th>
    </tr>
    <tr>
    <td>LINEA&nbsp;&nbsp;&nbsp;
      <input  size="1"  type="text" name="linea" id="linea">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input onclick="valida_linea()" type="button" value = "Aceptar" name = "btnAceptar">
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
 <form id="aagregaproducto" action="agregarproducto.php"method="post">
  <table id="agregarproducto">
    <tr>
     <th>PRODUCTO</th>
    </tr>
    <tr>
    <td>PRODUCTO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="producto" id="producto">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input onclick="valida_producto()" type="button" value = "Aceptar" name = "btnAceptar"> 
    </td>
    </tr>
  </table>
</form>
<style type="text/css">
#aagregacomprocalcompo{
  padding-left:5px;
  padding-right:5px;
  padding-top: 5px;
background-color:#3498bd;
margin-left:25%;
margin-right:5% ; 
position:absolute;
margin-top:3%; 

color:white;
width:90%;
height: 70%;


}
.caracteristicasnum{
  border:5%;
  margin-top:3%;
}
h6{
  color:blue;
  margin-top:3% ;
  margin-left:60% ;

}
.imagenproducto{

margin-top:80%;
margin-left:3%;
margin-right:3%;
background-color:#3498bd;
padding-bottom: 10px;
padding-left: 10px;
padding-right: 10px;
color:white;
}
#agregarcolorsecundario{
   padding-left:5px;
  padding-right:5px;
  padding-top: 5px;
  padding-bottom:10px;
background-color:#3498bd;
margin-left:55%; 
position:absolute;
margin-top:10%; 
margin-bottom:5%;
color:white;
width:35%;


}
#agregarcolorsecundario button{
  background-color:blue;
  color:white;
  width: 25%;
  height:100%;
}

</style>
<div id="agregarcaranum">
<form id="aagregacomprocalcompo" action="COMBINACIONESMINYMAX.php"method="post"  onsubmit="return valida_dia()">
<h6>GUARDA CARACTERISTICAS DE PRODUCTO, CALIBRE, COMPOSICION<br> CARACTERISTICAS MINIMAS Y MAXIMAS</h6>
&nbsp;PRODUCTO&nbsp;<?php
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
       <input type="text" size="1" maxlength="5" value="" name="calibre" id="calibre">
       COMPOSICION
       <input type="text" size="3" maxlength="9" value="" name="composicion" id=>
       <br>
    
    <div class="agregarCARACTERISTICASNUM">&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
      &nbsp; CARACTERISTICAS</div>
   <table class="caracteristicasnum"><tr>
     <td>
      RESISTENCIA&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="text" size="1" maxlength="5" value="" name="resicarnumin">
         <input type="text" size="1" maxlength="5" value="" name="resicarnummax">
       </td><td>ROTURA DE ELONGACION
    <input type="text" size="1" maxlength="5" value="" name="rotelonumin">
    &nbsp;<input type="text" size="1" maxlength="5" value="" name="rotelonumax"></td>                </tr>
        <td>DIAMETRO DEL AISLANTE&nbsp;
          <input type="text" size="1" maxlength="5" value="" name="diamnumin">
          <input type="text" size="1" maxlength="5" value="" name="diamnumax">
        </td><td>DESFORRE 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" size="1" maxlength="5" value="" name="desfo1numin">&nbsp;
    <input type="text" size="1" maxlength="5" value="" name="desfo1numax"></td>             </tr>
        <td>
        GROSOR DEL AISALNTE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" size="1" maxlength="5" value="" name="groaisnumin">&nbsp;
          <input type="text" size="1" maxlength="5" value="" name="groaisnumax">
        </td><td>DESFORRE 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" size="1" maxlength="5" value="" name="desfo2numin">
    <input type="text" size="1" maxlength="5" value="" name="desfo2numax"></td>  </tr>
       <tr>
   	<td>CONCENTRICIDAD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;<input type="text" size="1" maxlength="5" value="" name="concenumin">&nbsp;
   	  <input type="text" size="1" maxlength="5" value="" name="concenumax">
   	</td>
    <td>ENCOGIMIENTO AL CALOR
    <input type="text" size="1" maxlength="5" value="" name="encoalcalornumin">&nbsp;
    <input type="text" size="1" maxlength="5" value="" name="enoalcalnumax"></td>
   	</tr>
   	<tr>
   	<td>FACTOR A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
   	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" size="1" maxlength="5" value="" name="factanumin">&nbsp;
   	  <input type="text" size="1" maxlength="5" value="" name="factanumax">
   	  </td>
      <td>USW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" size="1" maxlength="5" value="" name="uswnumin">&nbsp;
    <input type="text" size="1" maxlength="5" value="" name="uswnumax"></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   	</tr>
   	<tr>
   	<td>ABRASION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" size="1" maxlength="5" value="" name="abranumin">&nbsp;
    <input type="text" size="1" maxlength="5" value="" name="abranumax"></td>
    <td>HOT SET&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" size="1" maxlength="5" value="" name="hotsetmin">&nbsp;
    <input type="text" size="1" maxlength="5" value="" name="hotsetmax"></td>
   	</tr>
    <tr>
    <td>ELONGACION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" size="1" maxlength="5" value="" name="elonumin">
    &nbsp;<input type="text" size="1" maxlength="5" value="" name="elonumax"></td></td>
    </tr>  
  <table> 
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input onclick="valida_combinacionesminmax()"  type="button" value = "Aceptar" name = "btnAceptar">
   
</form>
</div>
<form id="" onclick="" action="COMBINACIONESMINYMAX.PHP" method="post">
  <table id="agregarcolorprimario">
    <tr>
     <th>COLOR PRIMARIO</th>
    </tr>
    <tr>

    <td>COLOR PRIMARIO&nbsp;&nbsp;
      <input type="text" name="colorsecundario" id="colorprimrio">
      &nbsp;&nbsp;
      <input onclick="valida_colorprimario()" type="button" value = "Aceptar" name = "btnAceptar">
    </td>
    </tr>
  </table>
</form>



<form id="aagregacolorsecundario" action="agregarcolorsec.php" method="post">
  <table id="agregarcolorsecundario">
    <tr>
     <th>COLOR SECUNDARIO</th>
    </tr>
    <tr>

    <td>COLOR SECUNDARIO&nbsp;&nbsp;
      <input type="text" name="colorsecundario" id="colorsecundario">
      &nbsp;
      <input onclick="valida_colorsecundario()" type="button" value = "Aceptar" name = "btnAceptar">
    </td>
    </tr>
  </table>
</form>

    <form  action="cargarimagenproducto.php" method="post" enctype="multipart/form-data">
      <div class="imagenproducto">
         <div align="center" >IMAGEN DEL PRODUCTO</div>
            CALIBRE
            <?php
              include 'conexion.php';
             $query = 'SELECT * FROM caranuminmax';

             $result = $conexion->query($query);

             ?>&nbsp;&nbsp;&nbsp;
             <SELECT id="calibre" name="calibre">
              <?php
              while ( $row = $result->fetch_array() )
               {
            ?>

            <option value="<?php echo $row['calibre']?>" >
            <?php echo $row['calibre']; ?>
            </option>

            <?php
             }
             ?>

          </SELECT>COMPOSICION
           <?php
              include 'conexion.php';

             $query = 'SELECT * FROM caranuminmax';

             $result = $conexion->query($query);

             ?>&nbsp;
             <SELECT id="composicion" name="composicion">
              <?php
              while ( $row = $result->fetch_array() )
               {
            ?>

            <option value="<?php echo $row['composicion']?>" >
            <?php echo $row['composicion']; ?>
            </option>

            <?php
             }
             ?>

          </SELECT>
            COLOR PRIMARIO&nbsp;
            <?php
              include 'conexion.php';

             $query = 'SELECT * FROM tablacolorprimario';

             $result = $conexion->query($query);

             ?>&nbsp;
             <SELECT id="colorprimario" name="colorprimario">
              <?php
              while ( $row = $result->fetch_array() )
               {
            ?>

            <option value="<?php echo $row['colorprimario']?>" >
            <?php echo $row['colorprimario']; ?>
            </option>
            <?php
             }
             ?>
          </SELECT>
            COLOR SECUNDARIO
            <?php
              include 'conexion.php';
             $query = 'SELECT * FROM tablacolorsecundario';
             $result = $conexion->query($query);
             ?>&nbsp;
             <SELECT name="colorsecundario" id="colorsecundario">
              <?php
              while ( $row = $result->fetch_array() )
               {
            ?>
            <option value="<?php echo $row['colorsecundario']?>" >
            <?php echo $row['colorsecundario']; ?>
            </option>
            <?php
             }
             ?>
            </SELECT>
            <input name="imagenproducto" id="imagenproducto" type="file" />            
            <button type="submit">GUARDAR CAMBIOS</button>
    </form>
          
  <form action="albumdeproductos.html" method="post" enctype="text/plain">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button >ALBUM DE PRODUCTOS</button>
  </form>

     </div>

     <form id="aagregardefecto" action="agregardefecto.php" method="post">
      <table id="agregardefecto">
    <tr>
     <th>DEFECTO</th>
    </tr>
    <tr>
    <td>DEFECTO&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="defecto" id="defecto">
      &nbsp;&nbsp;&nbsp;&nbsp;
      <input onclick="valida_defecto()" type="button" value = "Aceptar" name = "btnAceptar">
    </td>
    </tr>
  </table>
</form>
<form id="aagregarstatusroja" action="aagregarstatusroja.php" method="post">
  <table class="agregarstatusetiquetaroja">
    <tr>
     <th>STATUS ETIQUETA ROJA</th>
    </tr>
    <tr>
    <td>STATUS ETIQUETA ROJA&nbsp;&nbsp;
    <input type="text" name="statusetiquetaroja" id="statusetiquetaroja">
    &nbsp;&nbsp;<input onclick="valida_statusetiquetaroja()" type="button" value = "Aceptar" name = "btnAceptar">
    </td>
    </tr>
  </table>
</form>



<form id="aagregardestino" action="agregardestino.php" method="post">
  <table CLASS="agregardestino">
    <tr>
     <th>DESTINO</th>
    </tr>
    <tr>
    <td>DESTINO&nbsp;&nbsp;<input type="text" name="destino" id="destino">
      &nbsp;&nbsp;<input onclick="valida_destino()" type="button" value = "Aceptar" name = "btnAceptar">
    </td>
    </tr>
  </table>
</form>
<footer>CALIDAD </br>
Gerente:Ing. Ivan Del Campo</br>
Subgerente:Ing. Oscar Vargas</br>
By: Ing. Dulce Olivia Vidales
</footer>

</body>
</html>