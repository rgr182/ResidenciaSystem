<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link REL=StyleSheet HREF="estilos.css" TYPE="text/css" MEDIA=screen>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="Scripts/Login.js"></script>
<title>FORMULARIO PRINCIPAL DE ADMINISTRADOR </title>
</head>
<img class="imagen" src="COFICAB.jpg">
<STYLE TYPE="text/css">
.imagen{
  width:100%;
  height: 40%;
  border-top:-90%;
  margin-left:0%;
  margin-right: 0%;
}
.FormAdministrador button{
  margin-left:40%;
  margin-right:10%; 
  margin-top:7%;
  font-size:100%;
  font-family:Verdana,Helvetica;
  font-weight:bold;
  color:#0404B4;
  background:#5257F7;
  border:0px; 
  width:20%;
  height:18%;
  position:absolute;

}
.FormAdministrador a{
   text-decoration:none;
   color:white;
}
.FormAdministrador button:hover{
  color:#0404B4;
  margin-top:8%;
   margin-left:41%;
   text-decoration:none;
}
.formularioAdmeliminar button{
  margin-left:40%;
  margin-right:10%; 
  margin-top:17%;
  font-size:100%;
  font-family:Verdana,Helvetica;
  font-weight:bold;
  color:#0404B4;
  background:#5257F7;
  border:0px; 
  width:20%;
  height:18%;
  position:absolute;

}
.formularioAdmeliminar a{
   text-decoration:none;
   color:white;
}
.formularioAdmeliminar button:hover{
  color:#0404B4;
  margin-top:18%;
   margin-left:41%;
   text-decoration:none;
}
.albumdeproductos button{
  margin-left:40%;
  margin-right:10%; 
  margin-top:27%;
  font-size:100%;
  font-family:Verdana,Helvetica;
  font-weight:bold;
  color:#0404B4;
  background:#5257F7;
  border:0px; 
  width:20%;
  height:18%;
  position:absolute;

}
.albumdeproductos a{
   text-decoration:none;
   color:white;
}
.albumdeproductos button:hover{
  color:#0404B4;
  margin-top:28%;
   margin-left:41%;
   text-decoration:none;
}
.reportes button{
  margin-left:40%;
  margin-right:10%; 
  margin-top:37%;
  font-size:100%;
  font-family:Verdana,Helvetica;
  font-weight:bold;
  color:#0404B4;
  background:#5257F7;
  border:0px; 
  width:20%;
  height:18%;
  position:absolute;

}
.reportes a{
   text-decoration:none;
   color:white;
}
.reportes button:hover{
  color:#0404B4;
  margin-top:38%;
   margin-left:41%;
   text-decoration:none;
}


footer{
  background-color:#3498bd;
  color:#ffffff;
  margin-top:80%;
  margin-left:10%;
  margin-right:10%;
  text-decoration:none;
  text-align: center;
  padding-bottom:5%;
  font-size:140%;
  font-family:"calibri";

}

</STYLE>
<BODY>
<h1 >BASE DE DATOS DE EXTRUSION</h1>
<h2>PAGINA PRINNCIPAL DE ADMINISTRADOR
</h2>
<nav>
  <ul>
   <li><a href="formulariodeingreso.php">SALIR</a></li>
  </ul>
</nav>
</header>
<div class="FormAdministrador" name="FormAdministrador">
	<button>
		<a href="administrador.php">ADMINISTRADOR DE AGREGAR
		</a>
    </button>
</div>
<div class="formularioAdmeliminar" name="formularioAdmeliminar">
 <button>
	<a href="administradoreliminar.php">ADMINISTRADOR ELIMINAR</a>
  </button>
</div>

<div class="albumdeproductos" name="albumdeproductos">
	<button><a href="albumdeproductos.php">ALBUM DE PRODUCTOS</a>
	</button>
</div>
<div class="reportes" name="reportes">
	<button><a href="reportes.php">GENERAR REPORTES</a>
	</button>
</div>

<footer>CALIDAD </br>
Gerente:Ing. Ivan Del Campo</br>
Subgerente:Ing. Oscar Vargas</br>
By: Ing. Dulce Olivia Vidales 
</footer>
</BODY>
</HTML>
