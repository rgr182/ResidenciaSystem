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



});




	
