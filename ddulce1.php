<FORM action="dulce1.php"method="post">
 
  &nbsp;&nbsp;PRODUCTO&nbsp;<?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablaproducto';

         $result = $conexion->query($query);

         ?>&nbsp;
         <SELECT id="producto" name="producto">
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
      CALIBRE&nbsp;&nbsp;&nbsp;
        <?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablacalibre';

         $result = $conexion->query($query);

         ?>&nbsp;&nbsp;&nbsp;
         <SELECT name="calibre" ID="calibre">
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
      </SELECT>
      COMPOSICION&nbsp;
         <?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablacomposicion';

         $result = $conexion->query($query);

         ?>&nbsp;
         <SELECT name="composicion" id="composicion">
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
      </SELECT>
       <div id="caranum">
    <DIV class="CARACTERISTICASNUM">CARACTERISTICAS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      MIN&nbsp;&nbsp;&nbsp;   MAX  </DIV>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <p id="textErrorsCaraNum"></p>
   <table>
      <tr>
     <td>RESISTENCIA</td><td>
     <input type="text" size="1" maxlength="5" value="" name="resistenciamin">
     <input type="text" size="1" maxlength="3" value="" name="RESISTENCIAmax">
   </td></td>
    </tr>
    <tr>
     <td>DIAMETRO DEL AISLANTE</td><td>
     <input type="text" size="1" maxlength="5" value="" name="diametroaislantemin">
     <input type="text" size="1" maxlength="3" value="" name="DIAMETRO DEL AISLANTEmax">
   </td></td>
    </tr>
    <tr>
    <td>GROSOR DEL AISALNTE</td><td>
    <input type="text" size="1" maxlength="5" value="" name="Grosor del Aislantemin">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="Grosor del Aislantemax"></td></td>
    </tr>
    <tr>
    <td>CONCENTRICIDAD</td><td>
    <input type="text" size="1" maxlength="5" value="" name="Concentricidadmin">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="Concentricidadmax"></td></td>
    </tr>
    <tr>
    <td>FACTOR A</td><td>
    <input type="text" size="1" maxlength="5" value="" name="Factor_amin">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="Factor_Amax"></td></td>
    </tr>
    <tr>
    <td>ABRASION</td><td>
    <input type="text" size="1" maxlength="5" value="" name="Abrasiónmin">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="Abrasiónmax"></td></td>
    </tr>
    <tr>
    <td>ELONGACION</td><td><input type="text" size="1" maxlength="5" value="" name="Elogaciónmin">
    &nbsp;<input type="text" size="1" maxlength="3" value="" name="Elogaciónmax"></td></td>
    </tr>
    <tr>
    <td>ROTURA DE ELONGACION</td><td>
    <input type="text" size="1" maxlength="5" value="" name="Rotura_de_Elogaciónmin">
    &nbsp;<input type="text" size="1" maxlength="3" value="" name="Rotura_de_Elogaciónmax"></td></td>
    </tr>
    <tr>
    <td>DESFORRE 1</td><td>
    <input type="text" size="1" maxlength="5" value="" name="Desforre_1min">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="Desforre_1max"></td></td>
    </tr>
    <tr>
    <td>DESFORRE 2</td><td>
    <input type="text" size="1" maxlength="5" value="" name="Desforre_2min">
    <input type="text" size="1" maxlength="3" value="" name="Desforre_2max"></td></td>
    </tr>
    <tr>
    <td>ENCOGIMIENTO AL CALOR</td><td>
    <input type="text" size="1" maxlength="5" value="" name="Encogimiento_al_Calormin">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="Encogimiento_al_Calormax"></td></td>
    </tr>
   <tr>
    <td>USW</td><td>
    <input type="text" size="1" maxlength="5" value="" name="USWmin">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="USWmax"></td></td>
    </tr>
    <tr>
    <td>HOT SET</td><td>
    <input type="text" size="1" maxlength="5" value="" name="HOT_SETmin">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="HOT_SETmax"></td></td>
    </tr>
   </table>
  
   </div>
  </div>
  </div>
   <button>ACEPTAR</button>
  
      </FORM>