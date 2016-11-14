<form id="aagregadia" action="agregardatosadiftablas.php"method="post"    onsubmit="return valida_dia()">
	  
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
    <input type="text" size="1" maxlength="5" value="" name="Grosor_del Aislante">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="Grosor_del_Aislante"></td></td>
    </tr>
    <tr>
    <td>CONCENTRICIDAD</td><td>
    <input type="text" size="1" maxlength="5" value="" name="Concentricidad">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="Concentricidad"></td></td>
    </tr>
    <tr>
    <td>FACTOR A</td><td>
    <input type="text" size="1" maxlength="5" value="" name="Factor_a">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="Factor_A"></td></td>
    </tr>
    <tr>
    <td>ABRASION</td><td>
    <input type="text" size="1" maxlength="5" value="" name="Abrasion">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="Abrasion"></td></td>
    </tr>
    <tr>
    <td>ELONGACION</td><td><input type="text" size="1" maxlength="5" value="" name="Elogacion">
    &nbsp;<input type="text" size="1" maxlength="3" value="" name="Elogacion"></td></td>
    </tr>
    <tr>
    <td>ROTURA DE ELONGACION</td><td>
    <input type="text" size="1" maxlength="5" value="" name="Rotura_de_Elogacion">
    &nbsp;<input type="text" size="1" maxlength="3" value="" name="Rotura_de_Elogacion"></td></td>
    </tr>
    <tr>
    <td>DESFORRE 1</td><td>
    <input type="text" size="1" maxlength="5" value="" name="Desforre_1">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="Desforre_1"></td></td>
    </tr>
    <tr>
    <td>DESFORRE 2</td><td>
    <input type="text" size="1" maxlength="5" value="" name="Desforre_2">
    <input type="text" size="1" maxlength="3" value="" name="Desforre_2"></td></td>
    </tr>
    <tr>
    <td>ENCOGIMIENTO AL CALOR</td><td>
    <input type="text" size="1" maxlength="5" value="" name="Encogimiento_al_Calor">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="Encogimiento_al_Calor"></td></td>
    </tr>
   <tr>
    <td>USW</td><td>
    <input type="text" size="1" maxlength="5" value="" name="USW">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="USW"></td></td>
    </tr>
    <tr>
    <td>HOT SET</td><td>
    <input type="text" size="1" maxlength="5" value="" name="HOT_SET">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="HOT_SET"></td></td>
    </tr>
   </table>
  
   </div>
  </div>
  </div>
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

