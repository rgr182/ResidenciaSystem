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

  
  <div class="generareportes">
    <h2 >GENERAR REPORTES</h2>
    <TABLE id="reportes" >
      <tr>
      <td>DESDE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="4" maxlength="8" value="" name="fechain"></td>
      </tr>
       <tr>
      <td>HASTA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="4" maxlength="8" value="" name="fechaout"></td><td>
      <tr><td></td><td></td><TD>              
      </TD></tr>
      </tr>
    </table>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit"  value="GENERAR" />
        &nbsp;&nbsp;&nbsp;<input type="submit"  value="GENERAR REPORTES DIARIOS" />
</div>
</div>
<div id="listarreportes">
  <h2>LISTAR REPORTES</h2>
    <TABLE id="listar" >
      <tr>
      <td>DESDE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="4" maxlength="8" value="" name="fechain"></td>
      </tr>
       <tr>
      <td>HASTA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="4" maxlength="8" value="" name="fechaout"></td><td>
      <tr><td></td><td></td><TD>              
      </TD></tr>
      </tr>
    </table>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit"  value="GENERAR" />&nbsp;&nbsp;&nbsp;<input type="submit"  value="GENERAR REPORTES DIARIOS" />
</div>
</div>



<form  action="buscador.php"method="post" enctype="multipart/form-data">
 <div id="buscador">
     <TABLE id="bbuscador">
      <TR><TD>BUSCADOR</td>
      <td><input type="text" value="" name="busca"></td>
      <td><input type="submit" name="submit" value="buscar"</td>
      </TR>
      </TABLE>
    </div>

  <div class="mostrarinformacion">
  
    <TABLE id="mostrarinformacion"  border="2">
      <tr>
      <td></td>
      </tr>
       <tr>
      <td></td><td>
      <tr><td></td><td></td><TD>              
      </TD></tr>
      </tr>
    </table>
</div>
</div>


<body>
<div class="generarotroseportes">
  <div id="generarotrosreportes">GENERAR OTROS REPORTES</div>
    <TABLE id="reportesotros" >
      <tr>
      <td>DESDE<input type="text" size="4" maxlength="8" value="" name="fechain"></td>
      </tr>
       <tr>
      <td>HASTA<input type="text" size="4" maxlength="8" value="" name="fechaout"></td><td>
      <tr><td></td><td></td><TD><input type="submit"  value="GENERAR" />    
      </TD></tr>
      </tr>
    </table>
</div>

<footer>CALIDAD </br>
Gerente:Ing. Ivan Del Campo</br>
Subgerente:Ing. Oscar Vargas</br>
By: Ing. Dulce Olivia Vidales 
</footer>
</body>
</html>