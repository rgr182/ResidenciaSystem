<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link REL=StyleSheet HREF="estilos.css" TYPE="text/css" MEDIA=screen>
<header>
  
<img class="imagen" src="COFICAB.jpg">
<h1 >BASE DE DATOS DE EXTRUSION</h1>
<h2 ALIGN="CENTER">REPORTES</h2>
<nav>
  <ul>
   <li><a href="Administrador.html">AGREGAR</a></li>
   <li><a href="Administradoreliminar.html">ELIMINAR</a></li>
    <li><a href="formulariodeingreso.html">SALIR</a></li>
  </ul>
</nav>
 
</header>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd"
>
<html lang="es">
<head>
<title>Probando el plugin jQuery de calendario_dw</title>
   <link href="calendario_dw/calendario_dw-estilos.css" type="text/css" rel="STYLESHEET">
 
   <script type="text/javascript" src="calendario_dw/jquery-1.4.4.min.js"></script>
   <script type="text/javascript" src="calendario_dw/calendario_dw.js"></script>
   <script type="text/javascript">
   $(document).ready(function(){
      $(".campofecha").calendarioDW();
   })
   </script>
   <form>
      Fecha: <input type="text" name="fecha" class="campofecha" size="12">
   </form>
</body>
</html>

<STYLE TYPE="text/css">

#mostarinformacion{
  margin-left:10%;
  margin-right:10%;
  background-color:#3498bd;


}
#submit{
  background-color:blue;
  color:white;
  width: 500%;
  height:100px;
}
#buscador{
  margin-left:5%;
  margin-right: 5%;
  margin-top:5%;
  background-color: blue;
  color:white;


}
#bbuscador{
  margin-left: 60%;
}

</STYLE>
<body>

   <form>
  <fieldset id="generareportes">
    <legend>GENERAR REPORTES</legend>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DESDE: <input type="text" name="fecha" class="campofecha"><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HASTA: <input type="text"><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="submit"  value="GENERAR REPORTES" />

   &nbsp;<input type="submit"  value="GENERAR/DIARIOS" />
    
  </fieldset>
</form>
<style type="text/css">
body{
  
}
#generareportes{
  margin-right:50%;
  margin-left: 7%;
  margin-top:10%;
  color:blue;
  position:absolute;
  font-size:180%;
}
#listarreportes{
  margin-right:7%;
  margin-left: 50%;
  margin-top:10%;
  color:blue;
  position:absolute;
  font-size:180%;
}
#bbuscador{
  margin-top:35%;
   font-size:130%;
}

</style>
<form>
  <fieldset id="generareportes">
    <legend>GENERAR REPORTES</legend>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DESDE: <input type="text" NAME="fechain"><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HASTA: <input type="text"><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="submit"  value="GENERAR REPORTES" />

   &nbsp;<input type="submit"  value="GENERAR/DIARIOS" />
    
  </fieldset>
</form>
<form>
  <fieldset id="listarreportes">
    <legend>GENERAR REPORTES</legend>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DESDE: <input type="text" NAME="fechain"><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HASTA: <input type="text"><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="submit"  value="GENERAR REPORTES" />

   &nbsp;<input type="submit"  value="GENERAR/DIARIOS" />
    
  </fieldset>
</form>


<form  action="buscador.php"method="post" enctype="multipart/form-data">
 <div id="buscador">
     <TABLE id="bbuscador">
      <TR><TD>BUSCADOR</td>
      <td><input type="text" value="" name="busca"></td>
      <td><input type="submit" name="submit" value="buscar"</td>
      </TR>
      </TABLE>
    </div>
  </form>

  <div class="mostrarinformacion">
  </div>
  
    



<footer>CALIDAD </br>
Gerente:Ing. Ivan Del Campo</br>
Subgerente:Ing. Oscar Vargas</br>
By: Ing. Dulce Olivia Vidales 
</footer>
</body>
</html>