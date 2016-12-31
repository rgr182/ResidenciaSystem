<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link REL=StyleSheet HREF="estilos.css" TYPE="text/css" MEDIA=screen>
<header>
  <TITLE>GENERAR-REPORTES</TITLE>
<img class="imagen" src="COFICAB.jpg">
<h1 >BASE DE DATOS DE EXTRUSION</h1>
<h2 ALIGN="CENTER">REPORTES</h2>
<nav>
  <ul>
   <li><a href="Administrador.PHP">AGREGAR</a></li>
   <li><a href="Administradoreliminar.PHP">ELIMINAR</a></li>
    <li><a href="formulariodeingreso.PHP">SALIR</a></li>
  </ul>
</nav>
 
</header>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd"
>
<html lang="es">
<head>

   <link href="calendario_dw/calendario_dw-estilos.css" type="text/css" rel="STYLESHEET">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="ajax.js"></script>
   <script type="text/javascript" src="calendario_dw/jquery-1.4.4.min.js"></script>
   <script type="text/javascript" src="calendario_dw/calendario_dw.js"></script>
   <script type="text/javascript">
   $(document).ready(function(){
      $(".campofecha").calendarioDW();
   })
   </script>
   
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
  margin-left:3%;
  margin-right: 3%;
  margin-top:5%;
  background-color: blue;
  color:white;


}
#bbuscador{
  margin-left: 60%;
}
#listarreportes{
  margin-right:3%;
  margin-left:50%;
  margin-top:5%;
  color:blue;
  position:absolute;
  font-size:180%;
}
#bbuscador{
  margin-top:35%;
   font-size:130%;
}
.mostrarinformacion{
  margin-top:2%;
  color:blue;
  width: 95%;
  height:450px;
  background-color: blue;
   margin-left:3%;
  margin-right:3%;

}
body{
  
}
#generareportes{
  margin-right:50%;
  margin-left:3%;
  margin-top:5%;
  color:blue;
  position:absolute;
  font-size:180%;
}
#resultados{
  margin-right: 40%;
  margin-left:6%;
  margin-top: 10%;
  background-color:black;
  position:absolute;

}

</STYLE>
<body>

   <form >
  <fieldset id="generareportes">
    <legend>GENERAR REPORTES</legend>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DESDE: <input type="text" name="GRFECHAIN" class="campofecha"><br/><br/><br/>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HASTA: <input type="text" name="GRFECHAOUT" class="campofecha"><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
   <input type="submit"  value="GR" />

   &nbsp;<input type="submit"  value="GRD" />
    
  </fieldset>
</form>
<form >
  <fieldset id="listarreportes">
    <legend>LISTAR REPORTES</legend>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DESDE:<input type="text" name="LRFECHAIN" class="campofecha"><br/><br/><br/>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HASTA: <input type="text" name="LRFECHAOUT" class="campofecha"> <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
   <input type="submit"  value="LR" />

   &nbsp;<input type="submit"  value="LRD" />
    
  </fieldset>
</form>

<?php
 include 'conexion.php';
?>
<form  action=""method="post" enctype="multipart/form-data" name="search_form" id="search_form">
 <div id="buscador">
     <TABLE id="bbuscador">
      <TR><TD>BUSCADOR</td>
      <td><input type="text" value="search" name="search" id="search"></td>
      <td><input type="submit" name="submit" value="buscar"</td>
      </TR>
      </TABLE>
    </div>
  </form>

  <div class="mostrarinformacion">
    <div id="resultados"></div>
  </div>
  
    



<footer>CALIDAD </br>
Gerente:Ing. Ivan Del Campo</br>
Subgerente:Ing. Oscar Vargas</br>
By: Ing. Dulce Olivia Vidales 
</footer>
</body>
</html>