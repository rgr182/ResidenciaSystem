<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd"
>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="Scripts/ValidacionesFormularios.js"></script>
<script type="text/javascript" src="Scripts/Validacionesderadiobuttons.js"></script>
<script type="text/javascript" src="Scripts/Validacionesdulce.js"></script>
<meta charset="utf-8">
<title>CONTROL PRODUCTO</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link REL=StyleSheet HREF="estilos.css" TYPE="text/css" MEDIA=screen>
 <link href="calendario_dw/calendario_dw-estilos.css" type="text/css" rel="STYLESHEET">
 
   <script type="text/javascript" src="calendario_dw/jquery-1.4.4.min.js"></script>
   <script type="text/javascript" src="calendario_dw/calendario_dw.js"></script>
  
   <script type="text/javascript">
    var producto = localStorage.getItem("producto");      
    var calibre = localStorage.getItem("calibre"); 
    if(!calibre){
      calibre="empty";
    }
   $(document).ready(function(){ 

      var opciones = $('select#producto option');
        for (var i = 0; i <=opciones.length; i++) {
          if(opciones[i] && opciones[i].value){
            if (opciones[i].value == producto) {
              $(opciones[i]).attr('selected', true);
             }
           }
         } 
         
      $(".campofecha").calendarioDW();
      $('select#producto').change(function(){
        producto = $('select#producto').val();        
        localStorage.setItem("producto",producto);
        window.location.href = "datosgenerales.php?producto=" + producto;                
        });

       $('select#calibre').change(function(){
        calibre = $('select#calibre').val();        
        localStorage.setItem("calibre",calibre);
        window.location.href = "datosgenerales.php?producto=" + producto+"&calibre="+calibre;                
        });

      $("#turno").val(getCookie("turno"));
      $("#semana").val(getCookie("semana"));
      $("#NoBobina").val(getCookie("NoBobina"));
      $("select#frecuencia").val(getCookie("frecuencia"));
      $("select#linea").val(getCookie("linea"));
      

      $("select#turno").change(function(){
          document.cookie = "turno="+$(this).val();
      });
      $("select#semana").click(function(){
          document.cookie = "semana="+$(this).val();
      });

      $("input#NoBobina").change(function(){
          document.cookie = "NoBobina="+$(this).val();
      });

      $("select#frecuencia").change(function(){
          document.cookie = "frecuencia="+$(this).val();
      });

       $("select#linea").change(function(){
          document.cookie = "linea="+$(this).val();
      });

      function getCookie(c_name) {
      var i,x,y,ARRcookies=document.cookie.split(";");
      for (i=0;i<ARRcookies.length;i++) {
       x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
       y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
        x=x.replace(/^\s+|\s+$/g,"");
        if (x==c_name)
          {
          return unescape(y);
          }
        }
      }
    })
   </script>
   
   <?php 
    include 'conexion.php';  

   $selectedProduct = isset($_GET['producto']) ? $_GET['producto'] : 'empty';   
   $selectedCalibre = isset($_GET['calibre']) ? $_GET['calibre'] : 'empty';   
   if ($selectedProduct==null) {
     $selectedProduct = "empty";
   }
   $selectedProduct = strval($selectedProduct);  
   if($selectedCalibre!=null && $selectedCalibre!="empty"){
      $dynamicQuery = "SELECT * FROM caranuminmax WHERE producto LIKE '%$selectedProduct%' AND calibre like '%$selectedCalibre%'";  
    
   }else{
    $dynamicQuery = "SELECT * FROM caranuminmax WHERE producto LIKE '%$selectedProduct%' ";    
   }
  // $dynamicQuery = "SELECT * FROM caranuminmax WHERE producto LIKE '%$selectedProduct%' ";  
   $result = mysqli_query($conexion,$dynamicQuery);
   $rowMaxMin = $result->fetch_array();
    
   
   ?>
   <script type="text/javascript">
    var minMax = <?php echo json_encode($rowMaxMin); ?>;
   </script>
 


<style type="text/css">

#datosturno{
  margin-top: -23.0%;
}


#caranum{
 background-color:#003171;
 margin-right:7%;
 margin-left:50%; 
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
#error_turno{
  color:red;
  font-size:15px;  
}

#textErrorsCaraNum{
  color:red;
  font-size:17px;
}




.CARACTERISTICASNUM{
  margin-top:1%;
  margin-right:10%;
  color:#95A5A6;
}

#aagregadia{
padding-bottom: 15px;

}
.bobnok button{
  margin-left:55%;
  margin-right:5%; 
  margin-top:46%;
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
   margin-left:55%;
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
  margin-top:-15%;
   font-size:180%;
        font-family:Verdana,Helvetica;
        font-weight:bold;
        color:#F39C12;
        background:red;
        border:0px;
        width:30%;
        height: 40%;
        position:absolute;
}
#boton a{
   text-decoration:none;
   color:white;
}
#boton button:hover{
  color:white;
  margin-top:-17%;
   margin-left:10%;
   text-decoration:none;
}

/*Ventana modal 2*/
.modalDialogo2 {
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
 .modalDialogo2:target {
  opacity:1;
  pointer-events: auto;
 }

 .modalDialogo2 > div {
  width: 850px;
  position: relative;
  margin: 10% auto;
  padding: 5px 20px 13px 20px;
  border-radius: 10px;
  background: #fff;
  background: -moz-linear-gradient(#fff, #999);
  background: -webkit-linear-gradient(#fff, #999);
  background: -o-linear-gradient(#fff, #999);
  height: 367px;
 }
  .cerrar2{
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
.cerrar2:hover { background: #00d9ff; }

#bobinaok2{
  background-color:blue;
  color:white;
  font-size: 240%;
  text-align:center;
  margin-top:20px;

}
#comentarios2{
  margin-left: 15px;
  margin-top: 20px;
}
#comentarios2 textarea{
  font-size:20px ;
  margin-top:50px ;

}
#comentarios2 button{
  margin-left:120px;
  font-size: 110%;
  background-color: blue;
  color:white; 
}

button{
  margin-left:50%;
  margin-right:1%; 
  margin-top:3%;
   font-size:150%;
        font-family:Verdana,Helvetica;
        font-weight:bold;
        color:#F39C12;
        background:  red;
        border:0px;
        width:35%;
  text-decoration:none;
  }    
button:hover{
  background-color: #0000000;
  color:#540FDC;
  margin-top:5%;
   margin-left:52%;
  padding-bottom:10px ;

}
#error_turno{
  color:red;
  font-size:17px;  
}

#textErrorsCaraNum{
  color:red;
  font-size:17px;
}
#comentarios{
  margin-left:70% ;
  margin-top:-3% ;
}
#comentarios textarea{
  margin-top:2% ;
}
#imagentrabajador{
  height:180px;
  width: 180px;
  margin-left: -50%;
  padding-left:10px;
  position:absolute;
  margin-top:-06% ;


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
   <li><a href="formulariodeingreso.php">SALIR</a></li>
  </ul>
</nav>
<form id="aagregadia" action="agregardatosadiftablas.php" method="post"    onsubmit="return valida_dia()">
	  
       <div id="datosturno">          
       <?php 
       date_default_timezone_set("America/Mexico_City");
       $fecha = date('y-m-d');
       $hora = date("h:i:sa");
       echo '<div id="informaciondeingreso">'.$fecha.'  '.$hora.'</div>';
       ?>       
      <img id="imagentrabajador" src="Oscar Ivan Vargas Hernandez Ing Calidad.jpg">
        TURNO&nbsp;&nbsp;&nbsp;
         <?php
          include 'conexion.php';
         $query = 'SELECT * FROM tablaturno';
         $result = $conexion->query($query);
         ?>
         <SELECT  name="turno" ID="turno">
          <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
    
        <option value="<?php echo $row['turno'] ?>" >
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
        <SELECT name="semana" id="semana">
          <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
    
        <option value="<?php echo $row['semana']?>" >
        <?php echo $row['semana']; ?>
        </option>
        
        <?php
         }    
       ?>  
               </SELECT>
               </div>
               

        <div id="datosgeneralesbobina">
        No BOBINA&nbsp;&nbsp;
        <input type="text" size="6" maxlength="9" value="" name="NoBobina" id="NoBobina">
       &nbsp; FRECUENCIA&nbsp;&nbsp;
       <span id="FRECUENCIA">
       <?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablafrecuencia';

         $result = $conexion->query($query);

         ?>
         <SELECT name="frecuencia" id="frecuencia">
         <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
    
        <option value="<?php echo $row['frecuencia']?>" >
        <?php echo $row['frecuencia']; ?>
        </option>
        
        <?php
         }    
         ?> 
      </SELECT></span>
        LINEA&nbsp;
      <?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablalinea';

         $result = $conexion->query($query);

         ?>
         
        <SELECT name="linea" id="linea">
          <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
    
        <option value="<?php echo $row['linea'] ?>" >
        <?php echo $row['linea']; ?>
        </option>
        
        <?php
         }    
         ?> 
      </SELECT>
       &nbsp;PRODUCTO<?php
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

      </table>
     <p id= "error_turno"></p>  
</div>


  <div id="todo">
    <div id="carabobina">
        CALIBRE&nbsp;&nbsp;&nbsp;
        <?php
          include 'conexion.php';          
         $result = mysqli_query($conexion,$dynamicQuery);
         $numberOfrows = mysqli_num_rows($result);
         ?>&nbsp;&nbsp;&nbsp;
         <SELECT name="calibre" ID="calibre">
          <?php    
          while ( $row = $result->fetch_array() )    
           {
             echo $row['calibre'];
        ?>    
        <option value="<?php echo $row['calibre']?>" >
        <?php echo $row['calibre']; ?>
        </option>
        
        <?php
         }    
         ?>
      </SELECT><br/>
        COMPOSICION&nbsp;
         <?php
          include 'conexion.php';

         $query = 'SELECT * FROM caranuminmax';

         $result = $conexion->query($dynamicQuery);

         ?>&nbsp;
         <SELECT name="composicion" id="composicion">
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
      </SELECT>&nbsp;&nbsp;
      <?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablastatusnum';

         $result = $conexion->query($query);

         ?>&nbsp;
         <SELECT name="statuscomp" id="statuscomp">
          <?php    
          while ($row = $result->fetch_array())    
           {
        ?>
    
        <option value="<?php echo $row['statusnum']?>" >
        <?php echo $row['statusnum']; ?>
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
         <SELECT name="colorprimario" id="colorprimario">
          <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
    
        <option value="<?php echo $row['colorprimario'] ?>" >
        <?php echo $row['colorprimario']; ?>
        </option>
        
        <?php
         }    
         ?>

      </SELECT>&nbsp;
       <?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablastatusnum';

         $result = $conexion->query($query);

         ?>&nbsp;
         <SELECT name="statuscolpri" ID="statuscolpri">
          <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
    
        <option value="<?php echo $row['statusnum']?>" >
        <?php echo $row['statusnum']; ?>
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
         <SELECT name="colorsecundario" ID="colorsecundario">
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
        <?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablastatusnum';

         $result = $conexion->query($query);

         ?>&nbsp;
         <SELECT name="statusecol" ID="statusecol">
          <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
    
        <option value="<?php echo $row['statusnum']?>" >
        <?php echo $row['statusnum']; ?>
        </option>
        
        <?php
         }    
         ?>
       </select><br/>
    
     </div>
     <!--button type="button" onclick="valida_dia()" value="Enviar" />Enviar</button-->

   	</div>
    <IMG  ID="Conteodehilos" SRC="conteodehilos.jpg" >
    </div>
<button>ACEPTAR</button>

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
      <span id="Ancho_Secundario">
      <input type="radio"  name="anchosecundario" value="Ok">
      </td><td><input type="radio" name="anchosecundario" value="NOk"></td><td>
      <input type="radio" name="anchosecundario" value="NA"></td></tr>
      </span>
    
    <tr><td>ASPECTO GENERAL</td><td>
     <span id="Aspecto_general">
      <input type="radio" name="aspectogeneral" value="Ok">
    </td><td><input type="radio" name="aspectogeneral" value="NOK"></td><td>
    <input type="radio" name="aspectogeneral" value="NA"></td></tr>
  </span>

    
    <tr><td>MARCACION DE CABLE</td><td>
      <spna id="Marcación_de_cable">
      <input type="radio" name="marcaciondecable" value="Ok"></td><td>
      <input type="radio" name="marcaciondecable" value="Nok"></td><td>
      <input type="radio" name="marcaciondecable" value="Na"></td></tr>
       </span>

    <tr><td>ETIQUETA</td><td>
      <spna id="ETIQUETA">
      <input type="radio" name="etiqueta" value="Ok">
    </td><td><input type="radio" name="etiqueta" value="Nok"></td><td>
    <input type="radio" name="etiqueta" value="Na"></td></tr>
  </span>
    <tr><td>EMBOBINADO</td><td>
      <spna id="EMBOBINADO">
      <input type="radio" name="embobinado" value="Ok">
    </td><td><input type="radio" name="embobinado" value="Nok"></td><td>
    <input type="radio" name="embobinado" value="Na"></td></tr>
  </span>
    <tr><td>CONDICION DE CONIPACK</td><td>
      <spna id="CONDICION_DE_CONIPACK">
      <input type="radio" name="condiciondeconipack" value="Ok"></td><td>
      <input type="radio" name="condiciondeconipack" value="NOk"></td><td>
      <input type="radio" name="condiciondeconipack" value="NA"></td><td></td></tr>
    </span>
    <tr><td>COLOR DE COBRE</td><td>
      <spna id="COLOR_COBRE">
      <input type="radio" name="colordecobre" value="Ok"></td><td>
      <input type="radio" name="colordecobre" value="Nok"></td><td>
      <input type="radio" name="colordecobre" value="NA"></td></tr>
    </span>
    <tr><td>FORMA DEL CONDUCTOR</td><td>
      <span id="fORMA_DEL_CONDUCTOR">
      <input type="radio" name="formadelconductor" value="Ok"></td><td>
      <input type="radio" name="formadelconductor" value="Nok"></td><td>
      <input type="radio" name="formadelconductor" value="NA"></td></tr>
    </span>
    <tr><td>REPORTE</td><td>
      <span id="REPORTE">
      <input type="radio" name="reporte" value="Ok"></td><td>
      <input type="radio" name="reporte" value="Nok"></td><td>
      <input type="radio" name="reporte" value="NA"></td></tr>
    </span>
    <tr><td>ENCOGIMIENTO AL CORTE </td><td>
      <span id="ENCOGIMIENTO_AL_CORTE">
      <input type="radio" name="encogimientoalcorte" value="Ok"></td><td>
      <input type="radio" name="encogimientoalcorte" value="Nok"></td><td>
      <input type="radio" name="encogimientoalcorte" value="NA"></td></tr>
      <span>
    <tr><td>EFECTO MEMORIA</td><td>
      <span id="EFECTOMEMORIA">
      <input type="radio" name="efectomemoria" value="Ok"></td><td>
      <input type="radio" name="efectomemoria" value="Nok"></td><td>
      <input type="radio" name="efectomemoria" value="NA"></td></tr>
      <tr><td>BURBUJA DE AIRE</td><td>
      <span id="BURBUJA/DE/AIRE">
      <input type="radio" name="burbujadeaire" value="Ok"></td><td>
      <input type="radio" name="burbujadeaire" value="Nok"></td><td>
      <input type="radio" name="burbujadeaire" value="NA"></td></tr>
    </span>
    </table>
   </div>

   <!--button type="button" onclick="validacion_global()" value="Enviar" />Enviar</button-->
 

   <div id="caranum">
    <DIV class="CARACTERISTICASNUM">CARACTERISTICAS</DIV>
    <p id="textErrorsCaraNum"></p>
  <table>
      <tr>       
     <td>RESISTENCIA</td><td>
     <input type="text" size="1" maxlength="5" class="resistencia" value="" name="resistencia">&nbsp;
     <input type="text" size="1" maxlength="3" value="" name="RESISTENCIA">
   </td></td>
    </tr>
    <tr>
     <td>DIAMETRO DEL AISLANTE</td><td>
     <input type="text" size="1" maxlength="5" value="" name="diametroaislante">&nbsp;
     <input type="text" size="1" maxlength="3" value="" name="DIAMETRO_DEL_AISLANTE">
   </td></td>
    </tr>
    <tr>
    <td>GROSOR DEL AISALNTE</td><td>
    <input type="text" size="1" maxlength="5" value="" name="GROSOR_DEL_AISLANTE">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="grosor_del_aislantee"></td></td>
    </tr>
    <tr>
    <td>CONCENTRICIDAD</td><td>
    <input type="text" size="1" maxlength="5" value="" name="CONSENTRISIDAD">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="Concentricidad"></td></td>
    </tr>
    <tr>
    <td>FACTOR A</td><td>
    <input type="text" size="1" maxlength="5" value="" name="FACTOR_A">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="Factor_A"></td></td>
    </tr>
    <tr>
    <td>ABRASION</td><td>
    <input type="text" size="1" maxlength="5" value="" name="ABRASION">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="Abrasion"></td></td>
    </tr>
    <tr>
    <td>ELONGACION</td><td><input type="text" size="1" maxlength="5" value="" name="ELONGACION">
    &nbsp;<input type="text" size="1" maxlength="3" value="" name="Elogacion"></td></td>
    </tr>
    <tr>
    <td>ROTURA DE ELONGACION</td><td>
    <input type="text" size="1" maxlength="5" value="" name="ROTURA_DE_ELONGACION">
    &nbsp;<input type="text" size="1" maxlength="3" value="" name="Rotura_de_Elogacion"></td></td>
    </tr>
    <tr>
    <td>DESFORRE 1</td><td>
    <input type="text" size="1" maxlength="5" value="" name="DESFORRE1">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="Desforre_1"></td></td>
    </tr>
    <tr>
    <td>DESFORRE 2</td><td>
    <input type="text" size="1" maxlength="5" value="" name="DESFORRE2">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="Desforre_2"></td></td>
    </tr>
    <tr>
    <td>ENCOGIMIENTO AL CALOR</td><td>
    <input type="text" size="1" maxlength="5" value="" name="ENCOGIMIENTOALCALOR">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="Encogimiento_al_Calor"></td></td>
    </tr>
   <tr>
    <td>USW</td><td>
    <input type="text" size="1" maxlength="5" value="" name="usw1">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="USW"></td></td>
    </tr>
    <tr>
    <td>HOT SET</td><td>
    <input type="text" size="1" maxlength="5" value="" name="hotset">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="HOT_SET"></td></td>
    </tr>
   </table>
  
   </div>
  </div>
  </div>
 <br><br><br><br><br><br>
 <div  class="bobnok">
 <button type="button" onclick="valida_funcionesGenerales()"> EVALUAR Y GENERAR ETIQUETA ROJA </button> </div>
 <div id="boton">
 <!--href="Etiquetaroja.html"-->
   <button onclick="mostrarModalEtiquetaRoja()"><a>GENERAR ETIQUETA ROJA SIN EVALUAR</a></button></div>

 <div id="openModal2" class="modalDialogo2">
  <div>
    <a href="#close" title="cerrar" class="cerrar2"> X </a>
    <div ID="bobinaok2"> BOBINA OK</div>
    <div id="comentarios2">COMENTARIOS<br>
    <textarea name="comentarios2" id="comentarios2" rows="6" cols="20"></textarea>            
    <button>GUARDAR CAMBIOS</button>
    </div>
  </div>
</div>

</form>

<form  style="" id="valida_1ETIQUETAROJA" action="guardaetiquetaroja.php"method="post" enctype="multipart/form-data" onsubmit="return valida_1ETIQUETAROJA()">
  <div id="etiquetaroja">
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEFECTO&nbsp;&nbsp;&nbsp;<?php
          include 'conexion.php';

         $query = 'SELECT * FROM tabladefecto';

         $result = $conexion->query($query);

         ?>
        <SELECT name="defecto" id="defecto">
         <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
        <option value="<?php echo $row['defecto']?>" >
        <?php echo $row['defecto']; ?>
        </option>
        
        <?php
         }    
         ?>
        </SELECT>


        &nbsp;&nbsp;

        CANTIDAD EN METROS&nbsp;
        <input type="text" size="3" maxlength="5" value="" name="cantidadenmetros" id="cantidadenmetros">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        ESTATUS DE ETIQUETA ROJA&nbsp;&nbsp;&nbsp;
        
        <?php
          include 'conexion.php';
         $query = 'SELECT * FROM statusetiquetaroja';
         $result = $conexion->query($query);
         ?>
        <SELECT id="statusetiquetaroja" name="statusetiquetaroja">
           <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
        <option value="<?php echo $row['statusetiquetaroja'] ?> " >
        <?php echo $row['statusetiquetaroja']; ?>
        </option>
        
        <?php
         }    
         ?> 

      </SELECT>
       &nbsp;&nbsp; DESTINO&nbsp;&nbsp;&nbsp;&nbsp;<?php
          include 'conexion.php';

         $query = 'SELECT * FROM tabladestino';

         $result = $conexion->query($query);

         ?>
       <SELECT id="destino" name="destino">--
        <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
        <option value="<?php echo $row['destino']?>" >
        <?php echo $row['destino']; ?>
        </option>
        
        <?php
         }    
         ?>
        <option value="DESTINO">
          BOBINA LIBERADA</option></SELECT>
        &nbsp;&nbsp;SEMANA FPS&nbsp;&nbsp;&nbsp;
        <input type="text" size="1" maxlength="2" value="" name="semanaFPS" id="semanaFPS">
        DESICIÓN FINAL<?php
          include 'conexion.php';

         $query = 'SELECT * FROM tabladesicionfinal';

         $result = $conexion->query($query);

         ?>&nbsp;&nbsp;&nbsp;
         <SELECT name="desicionfinal" id="desicionfinal">
          <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
    
        <option value="<?php echo $row['desicionfinal'] ?>" >
        <?php echo $row['desicionfinal']; ?>
        </option>
        
        <?php
         }    
         ?>
         </select><br>
         &nbsp;&nbsp;FECHA DE SCRAP&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="fechadescrap" class="campofecha" size="12"><br>
        <p id= "error_turno"></p> 
         <div id="comentarios">
         COMENTARIOS<br>
        <textarea name="comentarios2" rows="5" cols="20"></textarea>
         <button type="button" onclick="valida_1ETIQUETAROJA()" value="Enviar" />Enviar</button>
         
        </div>
  </div>

<footer>CALIDAD </br>
Gerente:&nbsp;Ing.&nbsp;Ivan Del Campo</br>
Subgerente:&nbsp;Ing.&nbsp; Oscar Vargas</br>
By:&nbsp; Ing. Dulce Olivia Vidales 
</footer>
<div id="openModal" class="modalDialogo">
<div>

  <a href='#close' title='cerrar' class='cerrar'> X </a>
  <div id='alerta'>BOBINA NOK</div>
  <div id='caraalerta'>
       No DE ETIQUETA ROJA&nbsp;&nbsp;&nbsp;
        <input type="text" size="3" maxlength="6" value="" name="Noetiquetaroja" id="Noetiquetaroja">
        &nbsp;&nbsp;
  <!--href="Etiquetaroja.html"-->
  <div >
   <button id="boton_ModalEtiqueta" onclick="generarEtiquetaRojaModal()">GENERAR ETIQUETA ROJA </button>   
  </div>
             </div></div>
          
       
 </div> 
</div>
</form>

</body>

</html>