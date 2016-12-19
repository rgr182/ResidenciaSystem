$(document).ready(function(){
  function getParameterByName(name) {    
      url = window.location.href;    
      name = name.replace(/[\[\]]/g, "\\$&");
      var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
          results = regex.exec(url);
      if (!results) return null;
      if (!results[2]) return '';
      return decodeURIComponent(results[2].replace(/\+/g, " "));
  }

  var linea = getParameterByName("linea");
  var idEmpleado = getParameterByName("idEmpleado");  
  var frecuencia = getParameterByName("frecuencia");  
  var turno = getParameterByName("turno"); 
  var producto = getParameterByName("producto");  
  var colorsecundario = getParameterByName("colorsecundario");
  var colorprimario = getParameterByName("colorprimario");  
  var defecto = getParameterByName("defecto");  
  var statusetiquetaroja = getParameterByName("statusetiquetaroja"); 
   var destino = getParameterByName("destino"); 

  

  if (linea == "si"){  
    $('#miVentana').css("display","block");
    $('#miVentana').html("linea borrado correctamente");

  }else if(linea == "no"){
    $('#miVentana').css("display","block");
    $('#miVentana').html(" Hubo un error al tratar de borrar el elemento buscado en el formualario de linea ");
  }

 if (idEmpleado == "si"){  
    $('#miVentana').css("display","block");
    $('#miVentana').html("linea borrado correctamente");

  }else if(idEmpleado == "no"){
    $('#miVentana').css("display","block");
    $('#miVentana').html(" Hubo un error al tratar de borrar el empleado por su id");
  }


 if (frecuencia == "si"){  
    $('#miVentana').css("display","block");
    $('#miVentana').html("FRECUENCIA BORRADA CORRACTAMENTE");

  }else if(frecuencia == "no"){
    $('#miVentana').css("display","block");
    $('#miVentana').html("HUBO U ERROR AL TRATAR DE BORRAR FRECUENCIA");
  }

  if (turno == "si"){  
    $('#miVentana').css("display","block");
    $('#miVentana').html("TURNO BORRADA CORRACTAMENTE");

  }else if(turno == "no"){
    $('#miVentana').css("display","block");
    $('#miVentana').html("HUBO U ERROR AL TRATAR DE BORRAR TURNO");
  }

 if (producto == "si"){  
    $('#miVentana').css("display","block");
    $('#miVentana').html("PRODUCTO BORRADA CORRACTAMENTE");

  }else if(producto == "no"){
    $('#miVentana').css("display","block");
    $('#miVentana').html("HUBO U ERROR AL TRATAR DE BORRAR PRODUCTO");
  }

  if (colorsecundario == "si"){  
    $('#miVentana').css("display","block");
    $('#miVentana').html("COLOR SECUNDARIO BORRADA CORRACTAMENTE");

  }else if(colorsecundario == "no"){
    $('#miVentana').css("display","block");
    $('#miVentana').html("HUBO U ERROR AL TRATAR DE BORRAR COLOR SECUNDARIO");
  }
  if (colorprimario == "si"){  
    $('#miVentana').css("display","block");
    $('#miVentana').html("COLOR PRIMARIO BORRADA CORRACTAMENTE");

  }else if(colorprimario == "no"){
    $('#miVentana').css("display","block");
    $('#miVentana').html("HUBO U ERROR AL TRATAR DE BORRAR COLO PRIMARIO");
  }
   if (defecto == "si"){  
    $('#miVentana').css("display","block");
    $('#miVentana').html("COLOR PRIMARIO BORRADA CORRACTAMENTE");

  }else if(defecto == "no"){
    $('#miVentana').css("display","block");
    $('#miVentana').html("HUBO U ERROR AL TRATAR DE BORRAR COLO PRIMARIO");
  }
 if (statusetiquetaroja == "si"){  
    $('#miVentana').css("display","block");
    $('#miVentana').html("COLOR PRIMARIO BORRADA CORRACTAMENTE");

  }else if(statusetiquetaroja == "no"){
    $('#miVentana').css("display","block");
    $('#miVentana').html("HUBO U ERROR AL TRATAR DE BORRAR COLO PRIMARIO");
  }
if (destino == "si"){  
    $('#miVentana').css("display","block");
    $('#miVentana').html("COLOR PRIMARIO BORRADA CORRACTAMENTE");

  }else if(destino == "no"){
    $('#miVentana').css("display","block");
    $('#miVentana').html("HUBO U ERROR AL TRATAR DE BORRAR COLO PRIMARIO");
  }







});




	
