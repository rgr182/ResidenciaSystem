<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link REL=StyleSheet HREF="estilos.css" TYPE="text/css" MEDIA=screen>
 


<style type="text/css">


#caranum{
 background-color:#003171;
 margin-right:1%;
 margin-left:55%; 
   margin-bottom:10%;
  margin-top:3% ;
  position:absolute;
  font-size:110%;
	font-weight: bold;
  padding-left:10px;
  padding-right:10px;
  padding-top:0px;
  padding-bottom:5px;
  color:white; 
 

}




.CARACTERISTICASNUM{
  margin-top:5%;
  margin-right:10%;
  color:#95A5A6;
}

.bobnok button{
  margin-left:55%;
  margin-right:5%; 
  margin-top:47%;
   font-size:180%;
        font-family:Verdana,Helvetica;
        font-weight:bold;
        color:#F39C12;
        background: #2d89ef;
        border:0px;
        width:30%;
 
      

}
.bobnok a{
   text-decoration:none;
   color:white;
}
.bobnok button:hover{
  color:white;
  margin-top:45%;
   margin-left:56%;
   text-decoration:none;
}


.modalDialogo {
  position: fixed;
  font-family: Arial, Helvetica, sans-serif;
  top:-8%;
  right: 0;
  bottom:0;
  left: 0;
  background: rgba(0,0,0,0.8);
  z-index: 99999;
  opacity:0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  pointer-events: none;
 }

 .modalDialogo:target {
  opacity:1;
  pointer-events: auto;
 }

 .modalDialogo > div {
  width: 850px;
  position: relative;
  margin: 10% auto;
  padding: 5px 20px 13px 20px;
  border-radius: 10px;
  background: #fff;
  background: -moz-linear-gradient(#fff, #999);
  background: -webkit-linear-gradient(#fff, #999);
  background: -o-linear-gradient(#fff, #999);
 }

 .cerrar{
  background: #606061;
  color: #FFFFFF;
  line-height: 25px;
  position: absolute;
  right: -12px;
  text-align: center;
  top: -10px;
  width: 24px;
  text-decoration: none;
  font-weight: bold;
  -webkit-border-radius: 12px;
  -moz-border-radius: 12px;
  border-radius: 12px;
  -moz-box-shadow: 1px 1px 3px #000;
  -webkit-box-shadow: 1px 1px 3px #000;
  box-shadow: 1px 1px 3px #000;
 }

 .cerrar:hover { background: #00d9ff; }

.btTxt {
  border: solid 1px #476b6b;
  color: #ffffff !important;
  font-size: 16px;font-family: Arial Black, Helvetica, sans-serif;
  padding: 10px 25px;
  text-shadow: 0 -1px 0 #476b6b;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  -o-border-radius: 3px;
  border-radius: 3px;
  -webkit-box-shadow: 0 1px 0 1px rgba(31, 48, 48, 0.1) , inset 0 -1px 1px 0 rgba(255, 255, 255, 0.1);
  -moz-box-shadow: 0 1px 0 1px rgba(31, 48, 48, 0.1) , inset 0 -1px 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: 0 1px 0 1px rgba(31, 48, 48, 0.1) , inset 0 -1px 1px 0 rgba(255, 255, 255, 0.1);
 background: -webkit-gradient(linear, center top, center bottom, color-stop(0%, #749593), color-stop(50%, #64898c), color-stop(51%, #557d7f), color-stop(100%, #476b6b));background: -webkit-linear-gradient(top, #749593 0%, #64898c 50%, #557d7f 51%, #476b6b 100%);background: -o-linear-gradient(top, #749593 0%, #64898c 50%, #557d7f 51%, #476b6b 100%);background: -moz-linear-gradient(top, #749593 0%, #64898c 50%, #557d7f 51%, #476b6b 100%);background: -ms-linear-gradient(top, #749593 0%, #64898c 50%, #557d7f 51%, #476b6b 100%);background: linear-gradient(top, #749593 0%, #64898c 50%, #557d7f 51%, #476b6b 100%);
}
.btTxt:hover {border: solid 2px #476b6b;
background: -webkit-gradient(linear, center top, center bottom, color-stop(0%, #749593), color-stop(50%, #64898c), color-stop(51%, #557d7f), color-stop(100%, #557d7f));background: -webkit-linear-gradient(top, #749593 0%, #64898c 50%, #557d7f 51%, #557d7f 100%);background: -o-linear-gradient(top, #749593 0%, #64898c 50%, #557d7f 51%, #557d7f 100%);background: -moz-linear-gradient(top, #749593 0%, #64898c 50%, #557d7f 51%, #557d7f 100%);background: -ms-linear-gradient(top, #749593 0%, #64898c 50%, #557d7f 51%, #557d7f 100%); background: linear-gradient(top, #749593 0%, #64898c 50%, #557d7f 51%, #557d7f 100%);
}
.btTxt:active {
background: -webkit-gradient(linear, center top, center bottom, color-stop(0%, #688886), color-stop(50%, #597a7d), color-stop(51%, #4b6e70), color-stop(100%, #4b6e70));background: -webkit-linear-gradient(top, #688886 0%, #597a7d 50%, #4b6e70 51%, #4b6e70 100%);background: -o-linear-gradient(top, #688886 0%, #597a7d 50%, #4b6e70 51%, #4b6e70 100%);background: -moz-linear-gradient(top, #688886 0%, #597a7d 50%, #4b6e70 51%, #4b6e70 100%);background: -ms-linear-gradient(top, #688886 0%, #597a7d 50%, #4b6e70 51%, #4b6e70 100%);background: linear-gradient(top, #688886 0%, #597a7d 50%, #4b6e70 51%, #4b6e70 100%);
}


textarea{
  margin-top:25% ;
  margin-bottom:-15% ;
  font-size:25px; 
}

#guardarcambios button{
  margin-left:65%;
  margin-right:1%; 
  margin-top:16%;
   font-size:80%;
        font-family:Verdana,Helvetica;
        font-weight:bold;
        color:white;
        background:#3498bd;
        border:0px;
        width:35%;
  text-decoration:none;
      

}
#guardarcambios button:hover{
   background-color: #0000000;
  color:#540FDC;
  margin-top:14%;
   margin-left:65%;
  padding-bottom:10px ;
}



#boton button{
  margin-left:10%;
  margin-right:10%; 
  margin-top:5%;
   font-size:180%;
        font-family:Verdana,Helvetica;
        font-weight:bold;
        color:#F39C12;
        background:red;
        border:0px;
        width:80%;
}
#boton a{
   text-decoration:none;
   color:white;
}
#boton button:hover{
  color:white;
  margin-top:6%;
   margin-left:10%;
   text-decoration:none;
}


</style>
</head>
<header>  
<img class="imagen" src="COFICAB.jpg">
<h1 >BASE DE DATOS DE EXTRUSION</h1>
<h2>CONTROL DE PRODUCTO</h2>
</header>


<body>
 

	<nav >
  <ul>
   <li><a href="Etiquetaroja.php">ETIQUETA ROJA</a></li>
   <li><a href="formulariodeingreso.php">SALIR</a></li>
  </ul>
</nav>
<form  action="agregardatosadiftablas.php"method="post" enctype="multipart/form-data">
	     <div id="datosturno">
        <div id="informaciondeingreso">27/09/16-14:00-89</div>
        <img id="imagentrabajador" src="Oscar Ivan Vargas Hernandez Ing Calidad.jpg">
       DIA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="1" maxlength="2" value="" name="dia"><br>
        TURNO&nbsp;&nbsp;&nbsp;

         <?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablaturno';

         $result = $conexion->query($query);

         ?>
         <SELECT  name="turno">
          <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
    
        <option value=" <?php echo $row['turno'] ?> " >
        <?php echo $row['turno']; ?>
        </option>
        
        <?php
         }    
       ?>  


               </SELECT><br>
                 
        SEMANA&nbsp;&nbsp;&nbsp;

        <?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablasemana';

         $result = $conexion->query($query);

         ?>

        <SELECT name="semana">
          <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
    
        <option value=" <?php echo $row['semana'] ?> " >
        <?php echo $row['semana']; ?>
        </option>
        
        <?php
         }    
       ?>  

               </SELECT>
               </div>
                 
        <div id="datosgeneralesbobina">
        No BOBINA&nbsp;&nbsp;
        <input type="text" size="6" maxlength="9" value="" name="NoBobina">
       &nbsp; FRECUENCIA&nbsp;&nbsp;<?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablafrecuencia';

         $result = $conexion->query($query);

         ?>
         <SELECT name="frecuencia">
         <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
    
        <option value=" <?php echo $row['frecuencia'] ?> " >
        <?php echo $row['frecuencia']; ?>
        </option>
        
        <?php
         }    
         ?> 




      </SELECT>
        LINEA&nbsp;
      <?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablalinea';

         $result = $conexion->query($query);

         ?>
        <SELECT name="linea">
          <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
    
        <option value=" <?php echo $row['linea'] ?> " >
        <?php echo $row['linea']; ?>
        </option>
        
        <?php
         }    
         ?> 


      </SELECT>
       &nbsp;&nbsp;PRODUCTO&nbsp;<?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablaproducto';

         $result = $conexion->query($query);

         ?>&nbsp;
         <SELECT name="producto">
          <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
    
        <option value=" <?php echo $row['producto'] ?> " >
        <?php echo $row['producto']; ?>
        </option>
        
        <?php
         }    
         ?>

      </SELECT>

      </table>

</div>


	<div id="todo">
		<div id="carabobina">
        CALIBRE&nbsp;&nbsp;&nbsp;
        <?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablacalibre';

         $result = $conexion->query($query);

         ?>&nbsp;&nbsp;&nbsp;
         <SELECT name="calibre">
          <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
    
        <option value=" <?php echo $row['calibre'] ?> " >
        <?php echo $row['calibre']; ?>
        </option>
        
        <?php
         }    
         ?>




      </SELECT><br/>
        COMPOSICION&nbsp;
         <?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablacomposicion';

         $result = $conexion->query($query);

         ?>&nbsp;
         <SELECT name="composicion">
          <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
    
        <option value=" <?php echo $row['composicion'] ?> " >
        <?php echo $row['composicion']; ?>
        </option>
        
        <?php
         }    
         ?>


      </SELECT>&nbsp;&nbsp;
      <?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablaotrossatus';

         $result = $conexion->query($query);

         ?>&nbsp;
         <SELECT name="status">
          <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
    
        <option value=" <?php echo $row['status'] ?> " >
        <?php echo $row['status']; ?>
        </option>
        
        <?php
         }    
         ?>
       </select><br/>
        
        COLOR PRIMARIO&nbsp;
        <?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablacolorprimario';

         $result = $conexion->query($query);

         ?>&nbsp;
         <SELECT name="colorprimario">
          <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
    
        <option value=" <?php echo $row['colorprimario'] ?> " >
        <?php echo $row['colorprimario']; ?>
        </option>
        
        <?php
         }    
         ?>

      </SELECT>&nbsp;
       <?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablaotrossatus';

         $result = $conexion->query($query);

         ?>&nbsp;
         <SELECT name="status">
          <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
    
        <option value=" <?php echo $row['status'] ?> " >
        <?php echo $row['status']; ?>
        </option>
        
        <?php
         }    
         ?>
       </select><br/>
  
        COLOR SECUNDARIO&nbsp;
         <?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablacolorsecundario';

         $result = $conexion->query($query);

         ?>&nbsp;
         <SELECT name="colorsecundario">
          <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
    
        <option value=" <?php echo $row['colorsecundario'] ?> " >
        <?php echo $row['colorsecundario']; ?>
        </option>
        
        <?php
         }    
         ?>
        

      </SELECT>
       <?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablaotrossatus';

         $result = $conexion->query($query);

         ?>&nbsp;
         <SELECT name="status">
          <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
    
        <option value=" <?php echo $row['status'] ?> " >
        <?php echo $row['status']; ?>
        </option>
        
        <?php
         }    
         ?>
       </select><br/>
    
		 </div>
    
    
   	</div>
    <IMG  ID="Conteodehilos" SRC="conteodehilos.jpg" >
    </div>

  

   <div class="radiobutomns">
   	<DIV ID ="TITULO">CARACTERISITICAS  </DIV>
    <h6>&nbsp;OK&nbsp;&nbsp;
&nbsp;
&nbsp;&nbsp;&nbsp;

   NOK &nbsp;&nbsp;
&nbsp;   &nbsp;&nbsp; NA&nbsp;&nbsp;</h6>
    <table>
      <tr>
    <tr><td>ANCHO SECUNDARIO</td><td>
      <input type="radio" name="anchosecundario" value="Ok">
    </td><td><input type="radio" name="anchosecundario" value="NOk"></td><td>
    <input type="radio" name="anchosecundario" value="NA"></td></tr>
    <tr><td>ASPECTO GENERAL</td><td>
      <input type="radio" name="aspectogeneral" value="Ok">
    </td><td><input type="radio" name="aspectogeneral" value="NOK"></td><td>
    <input type="radio" name="aspectogeneral" value="NA"></td></tr>
    <tr><td>MARCACION DE CABLE</td><td>
      <input type="radio" name="marcaciondecable" value="Ok"></td><td>
      <input type="radio" name="marcaciondecable" value="Nok"></td><td>
      <input type="radio" name="marcaciondecable" value="Na"></td></tr>
    <tr><td>ETIQUETA</td><td>
      <input type="radio" name="etiqueta" value="Ok">
    </td><td><input type="radio" name="etiqueta" value="Nok"></td><td>
    <input type="radio" name="etiqueta" value="Na"></td></tr>
    <tr><td>EMBOBINADO</td><td>
      <input type="radio" name="embobinado" value="Ok">
    </td><td><input type="radio" name="embobinado" value="Nok"></td><td>
    <input type="radio" name="embobinado" value="Na"></td></tr>
    <tr><td>CONDICION DE CONIPACK</td><td>
      <input type="radio" name="condiciondeconipack" value="Ok"></td><td>
      <input type="radio" name="condiciondeconipack" value="NOk"></td><td>
      <input type="radio" name="condiciondeconipack" value="NA"></td><td></td></tr>
    <tr><td>COLOR DE COBRE</td><td>
      <input type="radio" name="colordecobre" value="Ok"></td><td>
      <input type="radio" name="colordecobre" value="Nok"></td><td>
      <input type="radio" name="colordecobre" value="NA"></td></tr>
    <tr><td>FORMA DEL CONDUCTOR</td><td>
      <input type="radio" name="formadelconducto" value="Ok"></td><td>
      <input type="radio" name="formadelcondutor" value="Nok"></td><td>
      <input type="radio" name="formadelconductor" value="NA"></td></tr>
    <tr><td>REPORTE</td><td>
      <input type="radio" name="reporte" value="Ok"></td><td>
      <input type="radio" name="reporte" value="Nok"></td><td>
      <input type="radio" name="reporte" value="NA"></td></tr>
    <tr><td>ENCOGIMIENTO AL CORTE </td><td>
      <input type="radio" name="encogimientoalcorte" value="Ok"></td><td>
      <input type="radio" name="encogimientoalcorte" value="Nok"></td><td>
      <input type="radio" name="encogimientoalcorte" value="NA"></td></tr>
    <tr><td>EFECTO MEMORIA</td><td>
      <input type="radio" name="efectomemoria" value="Ok"></td><td>
      <input type="radio" name="efectomemoria" value="Nok"></td><td>
      <input type="radio" name="efectomemoria" value="NA"></td></tr>
   	</table>
   </div>

   <div id="caranum">
    <DIV class="CARACTERISTICASNUM">CARACTERISTICAS</DIV>
  
   <table>

   	<tr>
     <td>DIAMETRO DEL AISLANTE</td><td>
     <input type="text" size="1" maxlength="5" value="1OK" name="diametroaislante">
     <input type="text" size="1" maxlength="3" value="OK" name="DIAMETRO DEL AISLANTE">
   </td></td>
   	</tr>
   	<tr>
   	<td>GROSOR DEL AISALNTE</td><td><input type="text" size="1" maxlength="5" value="" name="Grosor del Aislante"><input type="text" size="1" maxlength="3" value="NOK" name="Grosor del"></td></td>
   	</tr>
   	<tr>
   	<td>CONCENTRICIDAD</td><td><input type="text" size="1" maxlength="5" value="" name="Concentricidad"><input type="text" size="1" maxlength="3" value="OK" name="Concentricidad"></td></td>
   	</tr>
   	<tr>
   	<td>FACTOR A</td><td><input type="text" size="1" maxlength="5" value="" name="Factor a"><input type="text" size="1" maxlength="3" value="OK" name="Factor A"></td></td>
   	</tr>
   	<tr>
   	<td>ABRASION</td><td><input type="text" size="1" maxlength="5" value="" name="Abrasión"><input type="text" size="1" maxlength="3" value="NOK" name="Abrasión"></td></td>
   	</tr>
   	<tr>
   	<td>ELOGACION</td><td><input type="text" size="1" maxlength="5" value="" name="Elogación"><input type="text" size="1" maxlength="3" value="" name="Elogación"></td></td>
   	</tr>
   	<tr>
   	<td>ROTURA DE ELOGACION</td><td><input type="text" size="1" maxlength="5" value="" name="Rotura de Elogación"><input type="text" size="1" maxlength="3" value="OK" name="Rotura de Elogación"></td></td>
   	</tr>
   	<tr>
   	<td>DESFORRE 1</td><td><input type="text" size="1" maxlength="5" value="" name="Desforre 1"><input type="text" size="1" maxlength="3" value="NOK" name="Desforre 1"></td></td>
   	</tr>
   	<tr>
   	<td>DESFORRE 2</td><td><input type="text" size="1" maxlength="5" value="" name="Desforre 2"><input type="text" size="1" maxlength="3" value="OK" name="Desforre 2"></td></td>
   	</tr>
   	<tr>
   	<td>ENCOGIMIENTO AL CALOR</td><td><input type="text" size="1" maxlength="5" value="" name="Encogimiento al Calor"><input type="text" size="1" maxlength="3" value="NA" name="Encogimiento al Calor"></td></td>
   	</tr>
   <tr>
   	<td>USW</td><td><input type="text" size="1" maxlength="5" value="" name="USW"><input type="text" size="1" maxlength="3" value="OK" name="USW"></td></td>
   	</tr>
   	<tr>
   	<td>HOT SET</td><td><input type="text" size="1" maxlength="5" value="" name="HOT SET"><input type="text" size="1" maxlength="3" value="NOK" name="HOT SET"></td></td>
   	</tr>
   </table>
  
   </div>
  </div>
  
  <div  class="bobnok">
 <button><A HREF="#openModal">EVALUAR</A></button></div>

<footer>CALIDAD </br>
Gerente:Ing. Ivan Del Campo</br>
Subgerente:Ing. Oscar Vargas</br>
By: Ing. Dulce Olivia Vidales 
</footer>
<div id="openModal" class="modalDialogo">
  <div><a href="#close" title="cerrar" class="cerrar">X</a>
 <DIV id="alerta">BOBINA NOK</DIV>
 <div id="caraalerta">
DESICIÓN FINAL<?php
          include 'conexion.php';

         $query = 'SELECT * FROM tabladesicionfinal';

         $result = $conexion->query($query);

         ?>&nbsp;&nbsp;&nbsp;
         <SELECT>
          <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
    
        <option value=" <?php echo $row['desicionfinal'] ?> " >
        <?php echo $row['desicionfinal']; ?>
        </option>
        
        <?php
         }    
         ?>
              


               </select>
              
                  COMENTARIOS
                 <textarea name="comentarios" rows="5" cols="15"></textarea>
                 <div id="guardarcambios">
                 <button>GUARDAR CAMBIOS</button></div>
                 <div id="boton">
              <button  ><a href="Etiquetaroja.html">GENERAR ETIQUETA ROJA</a></button></div>
             </div></div>


         
       
</div></div>
</form>
</body>
</html>