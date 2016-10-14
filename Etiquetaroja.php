<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link REL=StyleSheet HREF="estilos.css" TYPE="text/css" MEDIA=screen>
<head>
  
<img class="imagen" src="COFICAB.jpg">
<h1 >BASE DE DATOS DE EXTRUSION</h1>
<h2>ETIQUETA ROJA</h2>

</header>
<style type="text/css">
input {
height:25px;
width:80px;
font-size:30px;

}
select{
 border: 1px solid #ccc;
  width: 160px;
  height: 45px;
  margin: 40px auto 5px;
  overflow: hidden;
  background: #fff;
  font-size:20px;
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




</style>
<body>
 <nav>
   <li><a href="datosgenerales.php">CONTROL PRODUCTO</a></li>
   <li><a href="formulariodeingreso.html">SALIR</a></li>
  </nav>
<form  action="agregardatosadiftablas.php"method="post" enctype="multipart/form-data">
<body>
  <div id="etiquetaroja">
   DEFECTO&nbsp;&nbsp;&nbsp;<?php
          include 'conexion.php';

         $query = 'SELECT * FROM tabladefecto';

         $result = $conexion->query($query);

         ?>
        <SELECT>--
         <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
        <option value=" <?php echo $row['defecto'] ?> " >
        <?php echo $row['defecto']; ?>
        </option>
        
        <?php
         }    
         ?>
        </SELECT>


        &nbsp;&nbsp;

        CANTIDAD EN METROS&nbsp;<input type="text" size="3" maxlength="5" value="" name="cantidadenmetros">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        No DE ETIQUETA ROJA&nbsp;&nbsp;&nbsp;<input type="text" size="3" maxlength="6" value="" name="Noetiquetaroja">
        &nbsp;&nbsp;</BR>

        ESTATUS DE ETIQUETA ROJA&nbsp;&nbsp;&nbsp;
        
        <?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablastatusetiquetaroja';

         $result = $conexion->query($query);

         ?>
        <SELECT>
           <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
        <option value=" <?php echo $row['statusetiquetaroja'] ?> " >
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
       <SELECT>--
        <?php    
          while ( $row = $result->fetch_array() )    
           {
        ?>
        <option value=" <?php echo $row['destino'] ?> " >
        <?php echo $row['destino']; ?>
        </option>
        
        <?php
         }    
         ?>



        <option value="DESTINO">
          BOBINA LIBERADA</option></SELECT>
        &nbsp;&nbsp;SEMANA FPS&nbsp;&nbsp;&nbsp;<input type="text" size="1" maxlength="2" value="" name="semanaFPS">
        &nbsp;&nbsp;FECHA DE SCRAP&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" size="4" maxlength="8" value="" name="fechadescrap"><br>
        
        
         <div id="comentarios">
         COMENTARIOS<br>
        <textarea name="comentarios" rows="10" cols="40"></textarea></td></tr>
        <button  >GUARDAR CAMBIOS</button>
        </div>
  </div>
</form>
    

 
  


<footer>CALIDAD </br>
Gerente:Ing. Ivan Del Campo</br>
Subgerente:Ing. Oscar Vargas</br>
By: Ing. Dulce Olivia Vidales 
</footer>

</body>
</html>