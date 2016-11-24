<html>
<form action="cargarimagenproducto.php" method="post" enctype="multipart/form-data">
  <div class="imagenproducto">
     <div align="center" >IMAGEN DEL PRODUCTO</div>
        CALIBRE
        <?php
          include 'conexion.php';

         $query = 'SELECT * FROM caranuminmax';

         $result = $conexion->query($query);

         ?>&nbsp;&nbsp;&nbsp;
         <SELECT name="calibre">
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

      </SELECT>COMPOSICION
       <?php
          include 'conexion.php';

         $query = 'SELECT * FROM caranuminmax';

         $result = $conexion->query($query);

         ?>&nbsp;
         <SELECT name="composicion">
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

      </SELECT>
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

        <option value="<?php echo $row['colorprimario']?>" >
        <?php echo $row['colorprimario']; ?>
        </option>

        <?php
         }
         ?>

      </SELECT>
        COLOR SECUNDARIO
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

        <option value="<?php echo $row['colorsecundario']?>" >
        <?php echo $row['colorsecundario']; ?>
        </option>

        <?php
         }
         ?>

        </SELECT><BR/>           
            <input name="imagenproducto" type="file" />&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" value="GUARDAR CAMBIOS" />
</form>
</html>