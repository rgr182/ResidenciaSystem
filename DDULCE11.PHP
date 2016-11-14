
<HTML>
<BODY>
<form id="aagregadia" action="COMBINACIONESMINYMAX.php"method="post"    onsubmit="return valida_dia()">

PRODUCTO&nbsp;<?php
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
       <input type="text" size="1" maxlength="5" value="" name="calibre">
       COMPOSICION
       <input type="text" size="3" maxlength="7" value="" name="composicion">
       <br>
       <div id="caranum">
    <DIV class="CARACTERISTICASNUM">CARACTERISTICAS</DIV>
    <p id="textErrorsCaraNum"></p>
   <table>
      <tr>
     <td>RESISTENCIA</td><td>
     <input type="text" size="1" maxlength="5" value="" name="resicarnumin">
     <input type="text" size="1" maxlength="5" value="" name="resicarnummax">
   </td></td>
    </tr>
   	<tr>
     <td>DIAMETRO DEL AISLANTE</td><td>
     <input type="text" size="1" maxlength="5" value="" name="diamnumin">
     <input type="text" size="1" maxlength="5" value="" name="diamnumax">
   </td></td>
   	</tr>
   	<tr>
   	<td>GROSOR DEL AISALNTE</td><td>
    <input type="text" size="1" maxlength="5" value="" name="groaisnumin">&nbsp;
    <input type="text" size="1" maxlength="5" value="" name="groaisnumax"></td></td>
   	</tr>
   	<tr>
   	<td>CONCENTRICIDAD</td><td>
    <input type="text" size="1" maxlength="5" value="" name="concenumin">&nbsp;
    <input type="text" size="1" maxlength="5" value="" name="concenumax"></td></td>
   	</tr>
   	<tr>
   	<td>FACTOR A</td><td>
    <input type="text" size="1" maxlength="5" value="" name="factanumin">&nbsp;
    <input type="text" size="1" maxlength="5" value="" name="factanumax"></td></td>
   	</tr>
   	<tr>
   	<td>ABRASION</td><td>
    <input type="text" size="1" maxlength="5" value="" name="abranumin">&nbsp;
    <input type="text" size="1" maxlength="5" value="" name="abranumax"></td></td>
   	</tr>
   	<tr>
   	<td>ELONGACION</td><td><input type="text" size="1" maxlength="5" value="" name="elonumin">
    &nbsp;<input type="text" size="1" maxlength="5" value="" name="elonumax"></td></td>
   	</tr>
   	<tr>
   	<td>ROTURA DE ELONGACION</td><td>
    <input type="text" size="1" maxlength="5" value="" name="rotelonumin">
    &nbsp;<input type="text" size="1" maxlength="3" value="" name="rotelonumax"></td></td>
   	</tr>
   	<tr>
   	<td>DESFORRE 1</td><td>
    <input type="text" size="1" maxlength="5" value="" name="desfo1numin">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="desfo1numax"></td></td>
   	</tr>
   	<tr>
   	<td>DESFORRE 2</td><td>
    <input type="text" size="1" maxlength="5" value="" name="desfo2numin">
    <input type="text" size="1" maxlength="3" value="" name="desfo2numax"></td></td>
   	</tr>
   	<tr>
   	<td>ENCOGIMIENTO AL CALOR</td><td>
    <input type="text" size="1" maxlength="5" value="" name="encoalcalornumin">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="enoalcalnumax"></td></td>
   	</tr>
   <tr>
   	<td>USW</td><td>
    <input type="text" size="1" maxlength="5" value="" name="uswnumin">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="uswnumax"></td></td>
   	</tr>
   	<tr>
   	<td>HOT SET</td><td>
    <input type="text" size="1" maxlength="5" value="" name="hotsetmin">&nbsp;
    <input type="text" size="1" maxlength="3" value="" name="hotsetmax"></td></td>
   	</tr>
   </table>
  <button>ACEPTAR</button>
      </BODY>
  </HTML>