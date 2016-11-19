<form  id="valida_1ETIQUETAROJA" action="eitquetarojaagregardatos.php"method="post" enctype="multipart/form-data" onsubmit="return valida_1ETIQUETAROJA()">
<body>
  <div id="etiquetaroja">
   DEFECTO&nbsp;&nbsp;&nbsp;<?php
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
        No DE ETIQUETA ROJA&nbsp;&nbsp;&nbsp;
        <input type="text" size="3" maxlength="6" value="" name="NoEtiquetaroja" id="NoEtiquetaroja">
        &nbsp;&nbsp;</BR>

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
        <option value="<?php echo $row['statusetiquetaroja']?>" >
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
        </SELECT>
        &nbsp;&nbsp;SEMANA FPS&nbsp;&nbsp;&nbsp;
        <input type="text" size="1" maxlength="2" value="" name="semanaFPS" id="semanaFPS">
        &nbsp;&nbsp;FECHA DE SCRAP&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" size="4" maxlength="8" value="" name="fechadescrap" id="fechadescrap"><br>
        <p id= "error_turno"></p> 
        
        
         <div id="comentarios">
         COMENTARIOS<br>
        <textarea name="comentarios" rows="10" cols="40"></textarea></td></tr>
         <button >Enviar</button>
        </div>
  </div>
</form>
    