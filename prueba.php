<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link REL=StyleSheet HREF="estilos.css" TYPE="text/css" MEDIA=screen>
 
<a href="#openModal" >OSCAR VARGAS </a>
<div id="openModal" class="modalDialogo">
  <div><a href="#close" title="cerrar" class="cerrar">X</a>
 
<img class="imagentrabajador" src="Oscar Ivan Vargas Hernandez Ing Calidad.jpg">
<FORM></FORM>CONTRASEÑA  <input type="password" size="4">

</FORM>

</div></div>

</head>
  
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

<div id="miVentana" style="position: fixed; width: 350px; height: 190px; top: 0; left: 0; font-family:Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; border: #333333 3px solid; background-color: #FAFAFA; color: #000000; display:none;">
Aquí pones tu contenido web
</div>


 <?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablastaetiroja';

         $result = $conexion->query($query);

         ?>
        <SELECT>
           <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
        <option value=" <?php echo $row['staetiroja'] ?> " >
        <?php echo $row['staetiroja']; ?>
        </option>
        
        <?php
         }    
         ?>
        
          

         

      </SELECT>


	</body>
  </html>