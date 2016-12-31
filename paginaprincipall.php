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
.trefilado button{
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
.trefilado a{
   text-decoration:none;
   color:white;
}
.trefilado button:hover{
  color:#0404B4;
  margin-top:18%;
   margin-left:41%;
   text-decoration:none;
}
.bateria button{
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
.bateria a{
   text-decoration:none;
   color:white;
}
.bateria button:hover{
  color:#0404B4;
  margin-top:28%;
   margin-left:41%;
   text-decoration:none;
}
.pretorsion button{
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
.pretorsion a{
   text-decoration:none;
   color:white;
}
.pretorsion button:hover{
  color:#0404B4;
  margin-top:38%;
   margin-left:41%;
   text-decoration:none;
}
.extrusion button{
  margin-left:55%;
  margin-right:10%; 
  margin-top:50%;
  font-size:100%;
  font-family:Verdana,Helvetica;
  font-weight:bold;
  color:#0404B4;
  background:red;
  border:0px; 
  width:20%;
  height:18%;
  position:absolute;

}
.extrusion a{
   text-decoration:none;
   color:white;
}
.extrusion button:hover{
  color:#0404B4;
  margin-top:51%;
   margin-left:56%;
   text-decoration:none;
}
.XLEP button{
  margin-left:25%;
  margin-right:10%; 
  margin-top:50%;
  font-size:100%;
  font-family:Verdana,Helvetica;
  font-weight:bold;
  color:red;
  background:red;
  border:0px; 
  width:20%;
  height:18%;
  position:absolute;

}
.XLEP a{
   text-decoration:none;
   color:white;
}
.XLEP button:hover{
  color:#0404B4;
  margin-top:56%;
   margin-left:26%;
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
.informacionusuario{
 height:30%; 
 width:25%;
 background-color:#2E2EFE ;
 margin-left: 5%;
 margin-top: -5%;
 padding-left: 1%;
}

#imagentrabajador{
  width:16%;
  height: 23%; 
  margin-top: -2.5%;
  margin-left:74;
  position:absolute;
 
}
.informaciondelusuario{
  margin-top: 25%;
  margin-left:20%;
  position:absolute ;


}
</STYLE>
<BODY>
<h1 >BASE DE DATOS DE METAL</h1>
<h2>SECCIONES DE METAL</h2>
<nav>
  <ul>
   <li><a href="formulariodeingreso.php">SALIR</a></li>
  </ul>
</nav>
</header>
<div class="FormAdministrador">
	<button>
		<a href="administrador.php">PAGINA DE ADMINISTRADOR
		</a>
    </button>
</div>
<div class="TREFILADO" name="trefilado">
 <button>
	<a href="trefiladocalibres.html">TREFILADO</a>
  </button>
</div>

<div class="BATERIA" name="bateria">
	<button><a href="bateriacalibres.html">BATERIA</a>
	</button>
</div>
<div class="PRETORSION" name="pretorsion">
	<button><a href="pretorsion.html">PRETORSION</a>
	</button>
</div>
<div class="extrusion" name="extrusion">
  <button><a href="extrusionmaterialdetenido.php"> MATERIAL DE EXTRUSION A RETRABAJAR</a>
  </button>
</div>
<div class="XLEP" name="XLEP">
  <button><a href="XLPEmaterialdetenido.php">MATERIAL DE XLPE A RETRABAJAR</a>
  </button>
</div>
<footer>CALIDAD </br>
Gerente:Ing. Ivan Del Campo</br>
Subgerente:Ing. Oscar Vargas</br>
By: Ing. Dulce Olivia Vidales 
</footer>
</BODY>
</HTML>
