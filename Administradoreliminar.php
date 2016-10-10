<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link REL=StyleSheet HREF="estilos.css" TYPE="text/css" MEDIA=screen>
 
<header>

<img class="imagen" src="COFICAB.jpg">
<h1 >BASE DE DATOS DE EXTRUSION</h1>
<h2>ELIMINAR</h2>
<nav>
  <ul>
   <li><a href="Reportes.html">REPORTES</a></li>
   <li><a href="Administrador.html">AGREGAR</a></li>
    <li><a href="formulariodeingreso.html">SALIR</a></li>
  </ul>
</nav>  
</header>



<body>
<form action="eliminarempleado.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table id="eliminarempleado">
    <tr>
     <th>EMPLEADO</th>
    </tr>
    <tr>
    <td>No DE EMPLEADO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="idempleado" id="idempleado">&nbsp;<button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
 <form action="eliminarturno.php" method="post" class="form-register" onsubmit="returnvalida();"> 
  <table id="eliminarturno">
    <tr>
     <th>TURNO</th>
    </tr>
    <tr>
    <td>TURNO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="turno">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<form action="eliminarfrecuencia.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table id="eliminarfrecuencia">
    <tr>
     <th>FRECUENCIA</th>
    </tr>
    <tr>
    <td>FRECUENCIA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="frecuencia">&nbsp;&nbsp;&nbsp;&nbsp;
      <button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<form action="eliminarlinea.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table id="eliminarlinea">
    <tr>
     <th>LINEA</th>
    </tr>
    <tr>
    <td>LINEA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="linea">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<form action="eliminarproducto.php" method="post" class="form-register" onsubmit="returnvalida();">
   <table id="eliminarproducto">
    <tr>
     <th>PRODUCTO</th>
    </tr>
    <tr>
    <td>PRODUCTO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="producto">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<form action="eliminarcalibre.php" method="post" class="form-register" onsubmit="returnvalida();">
   <table id="eliminarcalibre">
    <tr>
     <th>CALIBRE</th>
    </tr>
    <tr>
    <td>CALIBRE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="calibre">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<form action="eliminarcalibre.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table id="eliminarcomposicion">
    <tr>
     <th>COMPOSICION</th>
    </tr>
    <tr>
    <td>COMPOSICION&nbsp;&nbsp;&nbsp;
    <input type="text" name="composicion">
    &nbsp;&nbsp;<button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<form action="eliminarcolorprimario.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table id="eliminarcolorprimario">
    <tr>
     <th>COLOR PRIMARIO</th>
    </tr>
    <tr>
    <td>COLOR PRIMARIO&nbsp;
      <input type="text" name="colorprimario">&nbsp;&nbsp;
      <button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<form action="eliminarcolorsecundario.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table id="eliminarcolorsecundario">
    <tr>
     <th>COLOR SECUNDARIO</th>
    </tr>
    <tr>
    <td>COLOR SECUNDARIO&nbsp;&nbsp;
      <input type="text" name="colorsecundario">
      &nbsp;&nbsp;<button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<form action="eliminardefecto.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table id="eliminardefecto">
    <tr>
     <th>DEFECTO</th>
    </tr>
    <tr>
    <td>DEFECTO&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="defecto">
      &nbsp;&nbsp;&nbsp;&nbsp;<button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<form action="eliminarstatusetiquetaroja.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table CLASS="eliminarstatusetiquetaroja">
    <tr>
     <th>STATUS ETIQUETA ROJA</th>
    </tr>
    <tr>
    <td>STATUS ETIQUETA ROJA&nbsp;&nbsp;
      <input type="text" name="statusetiquetaroja">&nbsp;&nbsp;
      <button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>
<form action="eliminardestino.php" method="post" class="form-register" onsubmit="returnvalida();">
  <table CLASS="eliminardestino">
    <tr>
     <th>DESTINO</th>
    </tr>
    <tr>
    <td>DESTINO&nbsp;&nbsp;
      <input type="text" name="destino">
      &nbsp;&nbsp;<button>ELIMINAR</button>
    </td>
    </tr>
  </table>
</form>


   
</body>
</html>