<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
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
   <li><a href="Reportes.php">REPORTES</a></li>
   <li><a href="Administradoreliminar.php">ELIMINAR</a></li>
    <li><a href="formulariodeingreso.html">SALIR</a></li>
  </ul>
</nav>
</header>
<body>



<form id="guardaEmpleado" action="aagregarempleado.php"method="post" enctype="multipart/form-data">
	 <table  id="agregarempleados">
          <th colspan="2">AGREGAR USUARIOS</th>
          <tr><td>TIPO DE USUARIO</td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php
          include 'conexion.php';
         $query = 'SELECT * FROM tablatipousuario';
         $result = $conexion->query($query);
         ?>&nbsp;
         <SELECT>
          <?php
          while ( $row = $result->fetch_array() )
           {
        ?>
        <option value=" <?php echo $row['tipousuario'] ?> " >
        <?php echo $row['tipousuario']; ?>
        </option>
        <?php
         }
         ?>
            </select></td>
     	</tr>
     	<tr>
     		<td><br>NUMERO DE EMPLEADO</br></td>
     	    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="idempleado" id="idempleado" value=""  size="2" maxlength="4">
     	</tr>
     		<tr>
     		<td><br>NOMBRE DEL AUDITOR</br></td>
     	    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="nombredelauditor" id="nombredelauditor" value=""></td>
     	</tr>
     	<tr>
     <td><br>CONTRASEÑA</br></td>
     	    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="password" name="contra" id="contra" value="" size="2" maxlength="4">
     	</tr>
     	<tr>
     		<td><br>CARGAR IMAGEN TEST:</br></td>
     	    <td>
                <input name="imagenempl" type="file" />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input onclick="valida_empleado()" type="button" value = "Aceptar" name = "btnAceptar">
          </tr>
          <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     </table>
   </form>


   <?php

/*if (isset($_GET['pros'])){
  $pros=$_GET['pros'];
}else {
  $pros="";
}

 //if($pros=='si') {
  //echo "TURNO AGREGADO CORRECTAMENTE ";
 //}elseif($pros=='no'){

//echo "TURNO NO AGREGADO";
 //}*/

?>
<form id="agregaturno" action="agregartturno.php"method="post">

<table id="agregarturno">
    <tr>
     <th>TURNO</th>
    </tr>
    <tr>
    <td>TURNO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input  size="1" maxlength="1" type="text" id="turno"name="turno">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input onclick="valida_turno()" type="button" value = "Aceptar" name = "btnAceptar">
    </td>
    </tr>
  </table>
</form>

=======
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link REL=StyleSheet HREF="estilos.css" TYPE="text/css" MEDIA=screen>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="Scripts/ValidacionesFormularios.js"></script>
<!--    <!-- Latest compiled and minified CSS -->
<!--    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css" type="text/css">-->
<!--    <!-- Latest compiled and minified JavaScript -->
<!--    <script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <header>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <img class="imagen" src="COFICAB.jpg">
        <h1>BASE DE DATOS DE EXTRUSION</h1>
        <h2>AGREGAR</h2>
        <nav>
            <ul>
                <li><a href="Reportes.html">REPORTES</a></li>
                <li><a href="Administradoreliminar.html">ELIMINAR</a></li>
                <li><a href="formulariodeingreso.html">SALIR</a></li>
            </ul>
        </nav>
    </header>
</head>
<body>
<div class="container">
    <h2>AGREGAR USUARIOS</h2>
    <div class="container" id="agregarempleados">
        <form id="guardaEmpleado" action="aagregarempleado.php" method="post" enctype="multipart/form-data">
            <div class="form-group" style="max-width: 260px;" >

                <label>TIPO DE USUARIO</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
                include 'conexion.php';
                $query = 'SELECT * FROM tablatipousuario';
                $result = $conexion->query($query);
                ?>&nbsp;
                <select class="form-control" >
                    <?php
                    while ($row = $result->fetch_array()) {
                        ?>
                        <option value=" <?php echo $row['tipousuario'] ?> ">
                            <?php echo $row['tipousuario']; ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>

            </div>
            <div class="form-group">
                <label for="number">NUMERO DE EMPLEADO</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-control"  type="text" name="idempleado" id="idempleado" value="" size="2" maxlength="4">
            </div>
            <div class="form-group">
                <label for="password">NOMBRE DEL AUDITOR</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-control" type="text" name="nombredelauditor" id="nombredelauditor" value="">
            </div>
            <div class="form-group">
                <label for="password">CONTRASEÑA</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  class="form-control"  type="password" name="contra" id="contra" value="" size="2" maxlength="4">
            </div>
            <div class="form-group">
                <label>
                    CARGAR IMAGEN:<input type="file" name="imagenempl" style="width:200px">
                </label>
            </div>
            <button  class="btn btn-default" onclick="valida_empleado()" value="Aceptar" name="btnAceptar">Aceptar</button>

        </form>
    </div>
</div>

<?php

if (isset($_GET['pros'])) {
    $pros = $_GET['pros'];
} else {
    $pros = "";
}

if ($pros == 'si') {
    echo "TURNO AGREGADO CORRECTAMENTE ";
} elseif ($pros == 'no') {

    echo "TURNO NO AGREGADO";
}

?>
<form action="agregartturno.php" method="post">

    <table id="agregarturno">
        <tr>
            <th>TURNO</th>
        </tr>
        <tr>
            <td>TURNO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input size="1" maxlength="1" type="text" id="turno" name="turno">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button>AGREGAR</button>
            </td>
        </tr>
    </table>
</form>
>>>>>>> parent of ea65147... * cambio de estilos generales y html
<?php

if (isset($_GET['pros'])){
  $pros=$_GET['pros'];
}else {
  $pros="";
}

<<< HEAD
 //if($pros=='si') {
  //echo "FRECUENCIA AGREGADO CORRECTAMENTE ";
 //}elseif($pros=='no'){
=======
if ($pros == 'si') {
    echo "FRECUENCIA AGREGADO CORRECTAMENTE ";
} elseif ($pros == 'no') {

    echo "FRECUENCIA NO AGREGADO";
}
>>>>>>> parent of ea65147... * cambio de estilos generales y html

//echo "FRECUENCIA NO AGREGADO";
 //}

//?>

<<<<<<< HEAD
=======

<form action="agregarfrecuencia.php" method="post">
    <table id="agregarfrecuencia">
        <tr>
            <th>FRECUENCIA</th>
        </tr>
        <tr>
            <td>FRECUENCIA&nbsp;&nbsp;&nbsp;
                <input size="1" type="text" id="Frecuencia" name="Frecuencia">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button>AGREGAR</button>
            </td>
        </tr>
    </table>
</form>
<?php
>>>>>>> parent of ea65147... * cambio de estilos generales y html

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

<<<<<<< HEAD
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
=======
if ($pros == 'si') {
    echo "LINEA AGREGADO CORRECTAMENTE ";
} elseif ($pros == 'no') {

    echo "LINEA NO AGREGADO";
}

?>
<form action="agregarlinea.php" method="post">
    <table id="agregarlinea">
        <tr>
            <th>LINEA</th>
        </tr>
        <tr>
            <td>LINEA&nbsp;&nbsp;&nbsp;
                <input size="1" type="text" name="linea" id="linea">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button>AGREGAR</button>
            </td>
        </tr>
    </table>
</form>
<?php
>>>>>>> parent of ea65147... * cambio de estilos generales y html

if (isset($_GET['pros'])){
  $pros=$_GET['pros'];
}else {
  $pros="";
}

<<<<<<< HEAD
 if($pros=='si') {
  echo "PRODUCTO AGREGADO CORRECTAMENTE ";
 }elseif($pros=='no'){

echo "PRODUCTO NO AGREGADO";
 }
=======
if ($pros == 'si') {
    echo "PRODUCTO AGREGADO CORRECTAMENTE ";
} elseif ($pros == 'no') {

    echo "PRODUCTO NO AGREGADO";
}
>>>>>>> parent of ea65147... * cambio de estilos generales y html

?>


<<<<<<< HEAD
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
=======
<form action="agregarproducto.php" method="post">
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
>>>>>>> parent of ea65147... * cambio de estilos generales y html
</form>
<?php

if (isset($_GET['pros'])){
  $pros=$_GET['pros'];
}else {
  $pros="";
}
?>


<?php
<<<<<<< HEAD
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
=======
if ($pros == 'si') {
    echo "calibre agregado de manera adecuada";
} elseif ($pros == 'no') {

    echo "calibre no agregado";
}

?>


<form action="agregarcalibre.php" method="post">
    <table id="agregarcalibre">
        <tr>
            <th>CALIBRE</th>
        </tr>
        <tr>
            <td>CALIBRE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="calibre" id="calibre">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button>AGREGAR</button>
            </td>
        </tr>
    </table>
>>>>>>> parent of ea65147... * cambio de estilos generales y html
</form>
<?php

if (isset($_GET['pros'])){
  $pros=$_GET['pros'];
}else {
  $pros="";
}
?>


<?php
<<<<<<< HEAD
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
=======
if ($pros == 'si') {
    echo "composicion agregado de manera adecuada";
} elseif ($pros == 'no') {

    echo "composicion no agregado";
}

?>


<form action="agregarcomposicion.php" method="post">
    <table id="agregarcomposicion">
        <tr>
            <th>COMPOSICION</th>
        </tr>
        <tr>
            <td>COMPOSICION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="composicion" id="composicion">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button>AGREGAR</button>
            </td>
        </tr>
    </table>
</form>

<?php
if ($pros == 'si') {
    echo "color primario agregado de manera adecuada";
} elseif ($pros == 'no') {

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
if ($pros == 'si') {
    echo "color secundario agregado de manera adecuada";
} elseif ($pros == 'no') {

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
                &nbsp;&nbsp;
                <button>AGREGAR</button>
            </td>
        </tr>
    </table>
</form>

<form action="cargarimagenproducto.php" method="post">
    <div class="imagenproducto">
        <div align="center">IMAGEN DEL PRODUCTO</div>
        CALIBRE
        <?php
        include 'conexion.php';

        $query = 'SELECT * FROM tablacalibre';

        $result = $conexion->query($query);

        ?>&nbsp;&nbsp;&nbsp;
        <SELECT>
            <?php
            while ($row = $result->fetch_array()) {
                ?>

                <option value=" <?php echo $row['calibre'] ?> ">
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
            while ($row = $result->fetch_array()) {
                ?>

                <option value=" <?php echo $row['composicion'] ?> ">
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
            while ($row = $result->fetch_array()) {
                ?>

                <option value=" <?php echo $row['colorprimario'] ?> ">
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
            while ($row = $result->fetch_array()) {
                ?>

                <option value=" <?php echo $row['colorsecundario'] ?> ">
                    <?php echo $row['colorsecundario']; ?>
                </option>

                <?php
            }
            ?>


        </SELECT><BR/>


        <input name="imagenpro" type="file"/>&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" value="GUARDAR CAMBIOS"/>
</form>

<FORM action="albumdeproductos.html" method="post" enctype="text/plain">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button>ALBUM DE PRODUCTOS</button>
</FORM>

</div>

<?php
if ($pros == 'si') {
    echo "defecto agregado de manera adecuada";
} elseif ($pros == 'no') {

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
                &nbsp;&nbsp;&nbsp;&nbsp;
                <button>AGREGAR</button>
            </td>
        </tr>
    </table>
</form>
<?php
if ($pros == 'si') {
    echo "status etiqueta roja agregado de manera adecuada";
} elseif ($pros == 'no') {

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
                &nbsp;&nbsp;
                <button>AGREGAR</button>
            </td>
        </tr>
    </table>
</form>

<?php
if ($pros == 'si') {
    echo "destino agregado de manera adecuada";
} elseif ($pros == 'no') {

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
                &nbsp;&nbsp;
                <button>AGREGAR</button>
            </td>
        </tr>
    </table>
</form>


<footer>CALIDAD </br>
    Gerente:Ing. Ivan Del Campo</br>
    Subgerente:Ing. Oscar Vargas</br>
    By: Ing. Dulce Olivia Vidales
>>>>>>> parent of ea65147... * cambio de estilos generales y html
</footer>

</body>
</html>