<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link REL=StyleSheet HREF="css/estilos.css" TYPE="text/css" MEDIA=screen>
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
        <!--        <h2>AGREGAR</h2>-->
        <nav>
            <ul>
                <li><a href="Reportes.html">REPORTES</a></li>
                <li><a href="Administradoreliminar.html">ELIMINAR</a></li>
                <li><a href="formulariodeingreso.html">SALIR</a></li>
            </ul>
        </nav>
    </header>
</head>
<body background="Imagenes/Wallpaper.jpg">
<div class="container">
    <h2>AGREGAR USUARIOS</h2>
    <div class="container" id="agregarempleados">
        <form id="guardaEmpleado" action="aagregarempleado.php" method="post" enctype="multipart/form-data">
            <div class="form-group" style="max-width: 260px;">

                <label>TIPO DE USUARIO</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
                include 'conexion.php';
                $query = 'SELECT * FROM tablatipousuario';
                $result = $conexion->query($query);
                ?>&nbsp;
                <select class="form-control">
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
                <input class="form-control" type="text" name="idempleado" id="idempleado" value="" size="2"
                       maxlength="4">
            </div>
            <div class="form-group">
                <label for="password">NOMBRE DEL AUDITOR</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-control" type="text" name="nombredelauditor" id="nombredelauditor" value="">
            </div>
            <div class="form-group">
                <label for="password">CONTRASEÑA</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-control" type="password" name="contra" id="contra" value="" size="2" maxlength="4">
            </div>
            <div class="form-group">
                <label>
                    CARGAR IMAGEN:<input type="file" name="imagenempl" style="width:200px">
                </label>
            </div>
            <button class="btn btn-default" onclick="valida_empleado()" value="Aceptar" name="btnAceptar">Aceptar
            </button>
        </form>
    </div>
</div>

<?php

if (isset($_GET['pros'])) {
    $pros = $_GET['pros'];
} else {
    $pros = "";
}

//if ($pros == 'si') {
//    echo "TURNO AGREGADO CORRECTAMENTE ";
//} elseif ($pros == 'no') {
//
//    echo "TURNO NO AGREGADO";
//}

?>
<div class="container">
    <form action="agregartturno.php" method="post">
        <div id="agregarturno">
            <h2>TURNO</h2>
            <div class="form-group">
                <label>TURNO</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-control" size="1" maxlength="1" type="text" id="turno" name="turno"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-default">AGREGAR</button>
            </div>
        </div>
    </form>
</div>
<?php

if (isset($_GET['pros'])) {
    $pros = $_GET['pros'];
} else {
    $pros = "";
}

//if ($pros == 'si') {
//    echo "FRECUENCIA AGREGADO CORRECTAMENTE ";
//} elseif ($pros == 'no') {
//
//    echo "FRECUENCIA NO AGREGADO";
//}

?>

<div class="container">
    <form action="agregarfrecuencia.php" method="post">
        <div id="agregarfrecuencia">
            <h2>FRECUENCIA</h2>
            <div class="form-group">
                <label>FRECUENCIA&nbsp;&nbsp;&nbsp;</label>
                <input class="form-control" size="1" type="text" id="Frecuencia" name="Frecuencia"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-default">AGREGAR</button>
            </div>
        </div>
    </form>
</div>
<?php

if (isset($_GET['pros'])) {
    $pros = $_GET['pros'];
} else {
    $pros = "";
}

//if ($pros == 'si') {
//    echo "LINEA AGREGADO CORRECTAMENTE ";
//} elseif ($pros == 'no') {
//
//    echo "LINEA NO AGREGADO";
//}

?>
<div class="container">
    <form action="agregarlinea.php" method="post">
        <div id="agregarlinea">
            <h2>LINEA</h2>
            <div class="form-group">
                <label>LINEA</label>
                <input class="form-control" size="1" type="text" name="linea" id="linea"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-default">AGREGAR</button>
            </div>
        </div>
    </form>
</div>
<?php

if (isset($_GET['pros'])) {
    $pros = $_GET['pros'];
} else {
    $pros = "";
}

//if ($pros == 'si') {
//    echo "PRODUCTO AGREGADO CORRECTAMENTE ";
//} elseif ($pros == 'no') {
//
//    echo "PRODUCTO NO AGREGADO";
//}

?>
<div class="container">
    <form action="agregarproducto.php" method="post">
        <div id="agregarproducto">
            <h2>PRODUCTO</h2>
            <label>PRODUCTO&nbsp;</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="form-group">
                <input class="form-control" type="text" name="producto" id="producto"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-default">AGREGAR</button>
            </div>
        </div>
    </form>
</div>
<?php

if (isset($_GET['pros'])) {
    $pros = $_GET['pros'];
} else {
    $pros = "";
}
?>


<?php
//if ($pros == 'si') {
//    echo "calibre agregado de manera adecuada";
//} elseif ($pros == 'no') {
//
//    echo "calibre no agregado";
//}
//
//?>

<div class="container">
    <form action="agregarcalibre.php" method="post">
        <div id="agregarcalibre">
            <h2>CALIBRE</h2>
            <div class="form-group">
                <label>CALIBRE</label>
                <input class="form-control" type="text" name="calibre" id="calibre"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-default">AGREGAR</button>
            </div>
        </div>
    </form>
</div>
<?php

if (isset($_GET['pros'])) {
    $pros = $_GET['pros'];
} else {
    $pros = "";
}
?>


<?php
//if ($pros == 'si') {
//    echo "composicion agregado de manera adecuada";
//} elseif ($pros == 'no') {
//
//    echo "composicion no agregado";
//}
//
//?>
<div class="container">
    <form action="agregarcomposicion.php" method="post">
        <div id="agregarcomposicion">
            <h2>COMPOSICION</h2>
            <div class="form-group">
                <label>COMPOSICION</label>&nbsp;
                <input class="form-control" type="text" name="composicion" id="composicion">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-default">AGREGAR</button>
            </div>
        </div>
    </form>
</div>

<?php
//if ($pros == 'si') {
//    echo "color primario agregado de manera adecuada";
//} elseif ($pros == 'no') {
//
//    echo "color primario no agregado";
//}
//
//?>

<div class="container">
    <form action="agregarcolpri.php" method="post">
        <div id="agregarcolorprimario">
            <h2>COLOR PRIMARIO</h2>
            <div class="form-group">
                <label>COLOR PRIMARIO&nbsp;</label>
                <input class="form-control" type="text" name="colorprimario" id="colorprimario">&nbsp;&nbsp;
                <button class="btn btn-default">AGREGAR</button>
            </div>
        </div>
    </form>
</div>
<?php
//if ($pros == 'si') {
//    echo "color secundario agregado de manera adecuada";
//} elseif ($pros == 'no') {
//
//    echo "color secundario no agregado";
//}
//
//?>
<div class="container">
    <form action="agregarcolorsec.php" method="post">
        <table id="agregarcolorsecundario">
            <h2>COLOR SECUNDARIO</h2>
            <div id="agregarcolorprimario" class="form-group">
                <label>COLOR SECUNDARIO</label>
                <input class="form-control" type="text" name="colorsecundario" id="colorsecundario"> &nbsp;&nbsp;
                <button class="btn btn-default">AGREGAR</button>
            </div>
        </table>
    </form>
</div>

<div class="container">
    <form action="cargarimagenproducto.php" method="post">
        <div class="imagenproducto">
            <h2 align="center">IMAGEN DEL PRODUCTO</h2>
            <label>CALIBRE</label>
            <div class="form-group">
                <?php
                include 'conexion.php';
                $query = 'SELECT * FROM tablacalibre';
                $result = $conexion->query($query);
                ?>&nbsp;&nbsp;
                <SELECT class="form-control">
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
                <SELECT class="form-control">
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
                <?php
                include 'conexion.php';
                $query = 'SELECT * FROM tablacolorprimario';
                $result = $conexion->query($query);
                ?>&nbsp;
                <SELECT class="form-control">
                    <?php
                    while ($row = $result->fetch_array()) {
                        ?>
                        <option value=" <?php echo $row['colorprimario'] ?> ">
                            <?php echo $row['colorprimario']; ?>
                        </option>
                        <?php
                    }
                    ?>
                </SELECT class="form-control">
                COLOR SECUNDARIO
                <?php
                include 'conexion.php';

                $query = 'SELECT * FROM tablacolorsecundario';

                $result = $conexion->query($query);

                ?>&nbsp;
                <SELECT class="form-control">
                    <?php
                    while ($row = $result->fetch_array()) {
                        ?>
                        <option value=" <?php echo $row['colorsecundario'] ?> ">
                            <?php echo $row['colorsecundario']; ?>
                        </option>
                        </option>
                        <?php
                    }
                    ?>
                </SELECT>
                <BR/>
                <input name="imagenpro" type="file"/>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-default" type="submit" value="GUARDAR CAMBIOS"/>
                GUARDAR CAMBIOS</button>
            </div>
            &nbsp;
    </form>
</div>

<div class="container">
    <form action="albumdeproductos.html" method="post" enctype="text/plain">
        <div class="form-group">
            <button class="btn btn-default">ALBUM DE PRODUCTOS</button>
        </div>
    </form>
</div>
<?php
//if ($pros == 'si') {
//    echo "defecto agregado de manera adecuada";
//} elseif ($pros == 'no') {
//
//    echo "defecto no agregado";
//}
//
//?>

<div class="container">
    <form action="agregardefecto.php" method="post">
        <div id="agregardefecto">
            <h2>DEFECTO</h2>
            <div class="form-group">
                <label>DEFECTO</label>
                <input class="form-control" type="text" name="defecto" id="defecto"> &nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-default">AGREGAR</button>
            </div>
        </div>
    </form>
</div>
<?php
//if ($pros == 'si') {
//    echo "status etiqueta roja agregado de manera adecuada";
//} elseif ($pros == 'no') {
//
//    echo "status etiqueta roja no agregado";
//}
//
//?>

<div class="container">
    <form action="aagregarstatusroja.php" method="post">
        <div class="agregarstatusetiquetaroja">
            <h2>STATUS ETIQUETA ROJA</h2>
            <div class="form-group">
                <label>STATUS ETIQUETA ROJA</label>
                <input class="form-control" type="text" name="statusetiquetaroja" id="statusetiquetaroja"> &nbsp;&nbsp;
                <button class="btn btn-default">AGREGAR</button>
            </div>
        </div>
    </form>
</div>

<?php
//if ($pros == 'si') {
//    echo "destino agregado de manera adecuada";
//} elseif ($pros == 'no') {
//
//    echo "destino  no agregado";
//}
//
//?>
<div class="container">
<form action="agregardestino.php" method="post">
    <div CLASS="agregardestino">
        <h2>DESTINO</h2>
        <div>
            <label>DESTINO</label>
            <input class="form-control" type="text" name="destino" id="destino">
            <button class="btn btn-default">AGREGAR</button>
        </div>
    </div>
</form>
</div>
<br>
<br>
</div>
<footer>
    <h1>CALIDAD</h1>
    <h2>Gerente:Ing. Ivan Del Campo<h2>
    <h2>Subgerente:Ing. Oscar Vargas</h2>
    <h2>By: Ing. Dulce Olivia Vidales</h2>
</footer>
</body>
</html>