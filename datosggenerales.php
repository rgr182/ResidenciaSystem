<form id="aagregadia" action="agregardatosadiftablas.php"method="post"    onsubmit="return valida_dia()">
	  
 DIA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="text" size="1" maxlength="2" value="" name="dia"><br>
        TURNO&nbsp;&nbsp;&nbsp;
        <span id="TURNO">

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


               </SELECT></SPAN><br>
                 
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

         $query = 'SELECT * FROM caranuminmax';

         $result = $conexion->query($query);

         ?>&nbsp;&nbsp;&nbsp;
         <SELECT name="calibre" ID="calibre">
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
      </SELECT><br/>
        COMPOSICION&nbsp;
         <?php
          include 'conexion.php';

         $query = 'SELECT * FROM caranuminmax';

         $result = $conexion->query($query);

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
         <SELECT name="statuscomp" ID="statuscomp">
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
    







      
       <div id="datosturno">          
        <div id="informaciondeingreso">27/09/16-14:00-89</div>
      <div class="radiobutomns">
    <DIV ID ="TITULO">CARACTERISITICAS  </DIV>
   <DIV class="CARACTERISTICASNUM">CARACTERISTICAS</DIV>
    <p id="textErrorsCaraNum"></p>
   <table>
      <tr>
     <td>RESISTENCIA</td><td>
     <input type="text" size="1" maxlength="5" value="" name="resistencia">
     <input type="text" size="1" maxlength="3" value="" name="RESISTENCIA">
   </td></td>
    </tr>
    <tr>
     <td>DIAMETRO DEL AISLANTE</td><td>
     <input type="text" size="1" maxlength="5" value="" name="diametroaislante">
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
    <input type="text" size="1" maxlength="5" value="" name="DESFORRE2">
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


   </div>



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
         </select>

         <textarea name="comentarios2" id="comentarios2" rows="6" cols="20"></textarea> 
 <br><br><br><br><br><br>
   <button>ACEPTAR</button>
 </form>

