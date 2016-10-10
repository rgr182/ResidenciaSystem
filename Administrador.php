<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link REL=StyleSheet HREF="estilos.css" TYPE="text/css" MEDIA=screen>

<header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="Scripts/ValidacionesFormularios.js"></script>
<img class="imagen" src="COFICAB.jpg">
<h1 >BASE DE DATOS DE EXTRUSION</h1>
<h2>AGREGAR</h2>
<nav>
  <ul>
   <li><a href="Reportes.html">REPORTES</a></li>
   <li><a href="Administradoreliminar.html">ELIMINAR</a></li>
    <li><a href="formulariodeingreso.html">SALIR</a></li>
  </ul>
</nav>
</header>
<body>



<form id="guardaEmpleado" action="agregar.php" method="post" class="form-register">
    <table  id="agregarempleados">

        <th colspan="2">AGREGAR USUARIOS</th>
        <tr><td>TIPO DE USUARIO</td>
            <td>TESTER<input type="radio" name="Ok" value="1Ok">
                ADMINISTRADOR<input type="radio" name="Ok" value="1Ok"></td>
        </tr>
        <tr>
            <td><br>NUMERO DE EMPLEADO</br></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="idempleado" value=""  size="2" maxlength="4">

        </tr>

        <tr>
            <td><br>NOMBRE DEL AUDITOR</br></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nombre" value=""></td>

        </tr>
        <tr>
            <td><br>CONTRASEÑA</br></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="contra" value="" size="2" maxlength="4">

        </tr>
        <tr>
            <td><br>CARGAR IMAGEN:</br></td>
            <td>
                <form enctype="multipart/form-data" action="uploader.php" method="POST">
                    <input name="uploadedfile" type="file" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" value="Subir archivo" />
                </form>
        </tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  onclick="valida_empleado()" value = "Aceptar" name = "btnAceptar"></td></tr>
    </table>
    <table id="agregarturno">
        <tr>
            <th>TURNO</th>
        </tr>
        <tr>
            <td>TURNO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  size="1" maxlength="1" type="text" id="turno"name="turno">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button>AGREGAR</button>
            </td>
        </tr>
    </table>
    <?php
    include 'conexion.php';
    $idempleado =$_POST["idempleado"];
    $nombre =$_POST["nombre"];
    $contra =$_POST["contra"];


    $query1  = "INSERT INTO tabaempleado(idempleado,nombre,contra) VALUES ($idempleado,$nombre,$contra)";
    mysqli_query($conexion,$query1);
    $resultado= mysqli_query($conexion,$query1);


    ?>




    <table id="agregarfrecuencia">
        <tr>
            <th>FRECUENCIA</th>
        </tr>
        <tr>
            <td>FRECUENCIA&nbsp;&nbsp;&nbsp;<input  size="1"  type="text" id="Frecuencia" name="Frecuencia">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button>AGREGAR</button>
            </td>
        </tr>
    </table>
    <table id="agregarlinea">
        <tr>
            <th>LINEA</th>
        </tr>
        <tr>
            <td>LINEA&nbsp;&nbsp;&nbsp;<input  size="1"  type="text" name="AGREGARLINEA">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button>AGREGAR</button>
            </td>
        </tr>
    </table>
    <table id="agregarproducto">
        <tr>
            <th>PRODUCTO</th>
        </tr>
        <tr>
            <td>PRODUCTO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="AGREGARPRODUCTO">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button>AGREGAR</button>
            </td>
        </tr>
    </table>
    <table id="agregarcalibre">
        <tr>
            <th>CALIBRE</th>
        </tr>
        <tr>
            <td>CALIBRE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="AGREGARCALIBRE">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button>AGREGAR</button>
            </td>
        </tr>
    </table>
    <table id="agregarcomposicion">
        <tr>
            <th>COMPOSICION</th>
        </tr>
        <tr>
            <td>COMPOSICION&nbsp;&nbsp;&nbsp;<input type="text" name="AGREGARCOMPOSICION">&nbsp;&nbsp;<button>AGREGAR</button>
            </td>
        </tr>
    </table>
    <table id="agregarcolorprimario">
        <tr>
            <th>COLOR PRIMARIO</th>
        </tr>
        <tr>
            <td>COLOR PRIMARIO&nbsp;<input type="text" name="AGREGARCOLORPRIMARIO">&nbsp;&nbsp;<button>AGREGAR</button>
            </td>
        </tr>
    </table>
    <table id="agregarcolorsecundario">
        <tr>
            <th>COLOR SECUNDARIO</th>
        </tr>
        <tr>
            <td>COLOR SECUNDARIO&nbsp;&nbsp;<input type="text" name="AGREGARCOLORSECUNDARIO">&nbsp;&nbsp;<button>AGREGAR</button>
            </td>
        </tr>
    </table>





    <div class="imagenproducto">
        <div align="center" >IMAGEN DEL PRODUCTO</div>
        CALIBRE<SELECT>--
            <option value="CALIBRE">CALIBRE</option></SELECT>
        COMPOSICION<SELECT>--
            <option value="COMPOSICION">7X0.256</option></SELECT>
        COLOR PRIMARIO<SELECT>--
            <option value="COLOR SECUNDARIO">BEIGE 15 TN</option></SELECT>
        COLOR SECUNDARIO<SELECT>--
            <option value="COLOR SECUNDARIO">SALMON 20 SM</option></SELECT><BR/>
        <form enctype="multipart/form-data" action="uploader.php" method="POST">
            <input name="uploadedfile" type="file" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" value="SUBIR ARCHIVOS" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="GUARDAR CAMBIOS" />
        </form>
        <FORM action="albumdeproductos.html" method="post" enctype="text/plain">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button >ALBUM DE PRODUCTOS</button></FORM>

    </div>
    <table id="agregardefecto">
        <tr>
            <th>DEFECTO</th>
        </tr>
        <tr>
            <td>DEFECTO&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="AGREGAR DEFECTO">&nbsp;&nbsp;&nbsp;&nbsp;<button>AGREGAR</button>
            </td>
        </tr>
    </table>
    <table class="agregarstatusetiquetaroja">
        <tr>
            <th>STATUS ETIQUETA ROJA</th>
        </tr>
        <tr>
            <td>STATUS ETIQUETA ROJA&nbsp;&nbsp;<input type="text" name="AGREGARSTATUSETIQUETAROJA">&nbsp;&nbsp;<button>AGREGAR</button>
            </td>
        </tr>
    </table>
    <table CLASS="agregardestino">
        <tr>
            <th>DESTINO</th>
        </tr>
        <tr>
            <td>DESTINO&nbsp;&nbsp;<input type="text" name="AGREGARDESTINO">&nbsp;&nbsp;<button>AGREGAR</button>
            </td>
        </tr>
    </table>
</form>
   <?php

if (isset($_GET['pros'])){
  $pros=$_GET['pros'];
}else {
  $pros="";
}

 if($pros=='si') {
  echo "TURNO AGREGADO CORRECTAMENTE ";
 }elseif($pros=='no'){

echo "TURNO NO AGREGADO";
 }

?>
<form  action="agregartturno.php"method="post">

<table id="agregarturno">
    <tr>
     <th>TURNO</th>
    </tr>
    <tr>
    <td>TURNO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input  size="1" maxlength="1" type="text" id="turno"name="turno">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button>AGREGAR</button>
    </td>
    </tr>
  </table>
</form>
 <?php

if (isset($_GET['pros'])){
  $pros=$_GET['pros'];
}else {
  $pros="";
}

 if($pros=='si') {
  echo "FRECUENCIA AGREGADO CORRECTAMENTE ";
 }elseif($pros=='no'){

echo "FRECUENCIA NO AGREGADO";
 }

?>


<form  action="agregarfrecuencia.php"method="post">
  <table id="agregarfrecuencia">
    <tr>
     <th>FRECUENCIA</th>
    </tr>
    <tr>
    <td>FRECUENCIA&nbsp;&nbsp;&nbsp;
      <input  size="1"  type="text" id="Frecuencia" name="Frecuencia">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button>AGREGAR</button>
    </td>
    </tr>
  </table>
</form>
 <?php

if (isset($_GET['pros'])){
  $pros=$_GET['pros'];
}else {
  $pros="";
}

 if($pros=='si') {
  echo "LINEA AGREGADO CORRECTAMENTE ";
 }elseif($pros=='no'){

echo "LINEA NO AGREGADO";
 }

?>
 <form  action="agregarlinea.php"method="post">
  <table id="agregarlinea">
    <tr>
     <th>LINEA</th>
    </tr>
    <tr>
    <td>LINEA&nbsp;&nbsp;&nbsp;
      <input  size="1"  type="text" name="linea" id="linea">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button>AGREGAR</button>
    </td>
    </tr>
  </table>
</form>
 <?php

if (isset($_GET['pros'])){
  $pros=$_GET['pros'];
}else {
  $pros="";
}

 if($pros=='si') {
  echo "PRODUCTO AGREGADO CORRECTAMENTE ";
 }elseif($pros=='no'){

echo "PRODUCTO NO AGREGADO";
 }

?>


 <form  action="agregarproducto.php"method="post">
  <table id="agregarproducto">
    <tr>
     <th>PRODUCTO</th>
    </tr>
    <tr>
    <td>PRODUCTO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="producto" id="producto">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button>AGREGAR</button>
    </td>
    </tr>
  </table>
</form>
<?php

if (isset($_GET['pros'])){
  $pros=$_GET['pros'];
}else {
  $pros="";
}
?>


<?php
 if($pros=='si') {
  echo "calibre agregado de manera adecuada";
 }elseif($pros=='no'){

echo "calibre no agregado";
 }

?>


 <form  action="agregarcalibre.php"method="post">
   <table id="agregarcalibre">
    <tr>
     <th>CALIBRE</th>
    </tr>
    <tr>
    <td>CALIBRE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="calibre" id="calibre">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button>AGREGAR</button>
    </td>
    </tr>
  </table>
</form>
<?php

if (isset($_GET['pros'])){
  $pros=$_GET['pros'];
}else {
  $pros="";
}
?>


<?php
 if($pros=='si') {
  echo "composicion agregado de manera adecuada";
 }elseif($pros=='no'){

echo "composicion no agregado";
 }

?>




 <form  action="agregarcomposicion.php"method="post">
   <table id="agregarcomposicion">
    <tr>
     <th>COMPOSICION</th>
    </tr>
    <tr>
    <td>COMPOSICION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="composicion" id="composicion">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button>AGREGAR</button>
    </td>
    </tr>
  </table>
</form>

<?php
 if($pros=='si') {
  echo "color primario agregado de manera adecuada";
 }elseif($pros=='no'){

echo "color primario no agregado";
 }

?>




<form action="agregarcolpri.php" method="post">
   <table id="agregarcolorprimario">
    <tr>
     <th>COLOR PRIMARIO</th>
    </tr>
    <tr>
    <td>COLOR PRIMARIO&nbsp;
      <input type="text" name="colorprimario" id="colorprimario">&nbsp;&nbsp;
      <button>AGREGAR</button>
    </td>
    </tr>
  </table>
</form>
<?php
 if($pros=='si') {
  echo "color secundario agregado de manera adecuada";
 }elseif($pros=='no'){

echo "color secundario no agregado";
 }

?>
<form action="agregarcolorsec.php" method="post">
  <table id="agregarcolorsecundario">
    <tr>
     <th>COLOR SECUNDARIO</th>
    </tr>
    <tr>

    <td>COLOR SECUNDARIO&nbsp;&nbsp;
      <input type="text" name="colorsecundario" id="colorsecundario">
      &nbsp;&nbsp;<button>AGREGAR</button>
    </td>
    </tr>
  </table>
</form>

<form action="cargarimagenproducto.php" method="post">
  <div class="imagenproducto">
     <div align="center" >IMAGEN DEL PRODUCTO</div>
        CALIBRE
        <?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablacalibre';

         $result = $conexion->query($query);

         ?>&nbsp;&nbsp;&nbsp;
         <SELECT>
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
       <?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablacomposicion';

         $result = $conexion->query($query);

         ?>&nbsp;
         <SELECT>
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
        COLOR PRIMARIO
        COLOR PRIMARIO&nbsp;
        <?php
          include 'conexion.php';

         $query = 'SELECT * FROM tablacolorprimario';

         $result = $conexion->query($query);

         ?>&nbsp;
         <SELECT>
          <?php
          while ( $row = $result->fetch_array() )
           {
        ?>

        <option value=" <?php echo $row['colorprimario'] ?> " >
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
         <SELECT>
          <?php
          while ( $row = $result->fetch_array() )
           {
        ?>

        <option value=" <?php echo $row['colorsecundario'] ?> " >
        <?php echo $row['colorsecundario']; ?>
        </option>

        <?php
         }
         ?>



        </SELECT><BR/>

      
            <input name="imagenpro" type="file" />&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" value="GUARDAR CAMBIOS" />
          </form>
          
          <FORM action="albumdeproductos.html" method="post" enctype="text/plain">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button >ALBUM DE PRODUCTOS</button></FORM>

     </div>

     <?php
    if($pros=='si') {
    echo "defecto agregado de manera adecuada";
    }elseif($pros=='no'){

   echo "defecto no agregado";
     }

      ?>

     <form action="agregardefecto.php" method="post">
      <table id="agregardefecto">
    <tr>
     <th>DEFECTO</th>
    </tr>
    <tr>
    <td>DEFECTO&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="defecto" id="defecto">
      &nbsp;&nbsp;&nbsp;&nbsp;<button>AGREGAR</button>
    </td>
    </tr>
  </table>
</form>
 <?php
    if($pros=='si') {
    echo "status etiqueta roja agregado de manera adecuada";
    }elseif($pros=='no'){

   echo "status etiqueta roja no agregado";
     }

      ?>


<form action="aagregarstatusroja.php" method="post">
  <table class="agregarstatusetiquetaroja">
    <tr>
     <th>STATUS ETIQUETA ROJA</th>
    </tr>
    <tr>
    <td>STATUS ETIQUETA ROJA&nbsp;&nbsp;
    <input type="text" name="statusetiquetaroja" id="statusetiquetaroja">
    &nbsp;&nbsp;<button>AGREGAR</button>
    </td>
    </tr>
  </table>
</form>

<?php
    if($pros=='si') {
    echo "destino agregado de manera adecuada";
    }elseif($pros=='no'){

   echo "destino  no agregado";
     }

      ?>

<form action="agregardestino.php" method="post">
  <table CLASS="agregardestino">
    <tr>
     <th>DESTINO</th>
    </tr>
    <tr>
    <td>DESTINO&nbsp;&nbsp;<input type="text" name="destino" id="destino">
      &nbsp;&nbsp;<button>AGREGAR</button>
    </td>
    </tr>
  </table>
</form>





<footer>CALIDAD </br>
Gerente:Ing. Ivan Del Campo</br>
Subgerente:Ing. Oscar Vargas</br>
By: Ing. Dulce Olivia Vidales
</footer>

</body>
</html>