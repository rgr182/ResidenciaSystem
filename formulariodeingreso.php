<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link REL=StyleSheet HREF="estilos.css" TYPE="text/css" MEDIA=screen>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="Scripts/Login.js"></script>
<title>FORMULARIO DE INGRESO </title>
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

.modalDialogo {
  position: fixed;
  font-family: Arial, Helvetica, sans-serif;
  top: 0;
  right: 0;
  bottom: 0;
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
  width:530px;
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
  
  <FORM ACTION="VALIDACONTRA.PHP" method="post">
<div id="openModal" class="modalDialogo">
  <div><a href="#close" title="cerrar" class="cerrar">X</a>
 
<img class="imagentrabajador" src="Oscar Ivan Vargas Hernandez Ing Calidad.jpg">
<FORM action="datosgenerales.php" method="post" enctype="text/plain">
 <br/>ID<input type="TEXT" size="1"  ID="idModal" name="idModal">CONTRASEÑA <input type="password" ID="contraseModal" name="ContraseModal" size="4" maxlength="4">
 <button >ENTRAR</button></FORM>


</div></div>

</FORM>



    <div id="tablaempleados" align="center">
      <table id="empleados" border="1">
    <tr><td>No  DE EMPLEADO</td>
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