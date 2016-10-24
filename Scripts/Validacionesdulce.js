 function valida_dia (){
 	var selector_dia = $('input[name="dia"]');
 	var selector_NoBobina = $('input[name="NoBobina"]');

 	
 	
    semana = document.getElementById("semana").selectedIndex;
    linea = document.getElementById("linea").selectedIndex;
    turno = document.getElementById("turno").selectedIndex;
    frecuencia = document.getElementById("frecuencia").selectedIndex;
    producto = document.getElementById("producto").selectedIndex;
    calibre = document.getElementById("calibre").selectedIndex;
    composicion = document.getElementById("composicion").selectedIndex;
    statuscom = document.getElementById("statuscom").selectedIndex;
    colorprimario = document.getElementById("colorprimario").selectedIndex;
    statuscolpri = document.getElementById("statuscolpri").selectedIndex;
    colorsecundario = document.getElementById("colorsecundario").selectedIndex;
    statuscolsec = document.getElementById("statuscolsec").selectedIndex;
    

   
    



    var validacion_dia = true;
    var cadena_error = " ";
    if (!selector_dia.val()) { 
    	cadena_error += (" ESTA VACIO EL CAMPO DIA ");
		validacion_dia = false;
	   
	  }
	  if( composicion == null || composicion == 0 ) {
		cadena_error += (" ESTA VACIO EL CAMPO COMPOSICION ");
		validacion_dia = false;

	}
	if( semana == null || semana == 0 ) {
		cadena_error += (" ESTA VACIO EL CAMPO SEMANA ");
		validacion_dia = false;

	}
	if( colorprimario == null || colorprimario == 0 ) {
		cadena_error += (" ESTA VACIO EL CAMPO COLOR PRIMARIO ");
		validacion_dia = false;

	}
	if( statuscolpri == null || statuscolpri == 0 ) {
		cadena_error += (" ESTA VACIO EL CAMPO STATUS COLOR PRIMARIO ");
		validacion_dia = false;

	}
	if( colorsecundario  == null || colorsecundario == 0 ) {
		cadena_error += (" ESTA VACIO EL CAMPO COLOR SECUNDARIO ");
		validacion_dia = false;

	}

	if( statuscolsec  == null || statuscolsec == 0 ) {
		cadena_error += (" ESTA VACIO EL CAMPO STATUS COLOR SECUNDARIO ");
		validacion_dia = false;

	}

	if( calibre == null || calibre == 0 ) {
		cadena_error += (" ESTA VACIO EL CAMPO CALIBRE ");
		validacion_dia = false;

	}
	if( statuscom == null || statuscom == 0 ) {
		cadena_error += (" ESTA VACIO EL CAMPO STATUS COMPOSICION ");
		validacion_dia = false;

	}
	if( linea == null || linea == 0 ) {
		cadena_error +=(" ESTA VACIO EL CAMPO linea ");
		validacion_dia = false;  
	}
	if( turno == null || turno == 0 ) {
		cadena_error += (" ESTA VACIO EL CAMPO TURNO ");
		validacion_dia = false;
	  
	}
	if( frecuencia == null || frecuencia == 0 ) {
		cadena_error += (" ESTA VACIO EL CAMPO FRECUENCIA ");
		validacion_dia = false;
	}

	if( producto == null || producto == 0 ) {
		cadena_error += (" ESTA VACIO EL CAMPO PRODUCTO ");
		validacion_dia = false;  
	}
	if (!selector_NoBobina.val()) { 
		cadena_error += (" ESTA VACIO EL CAMPO No BOBINA ");
		validacion_dia = false;
	    
	  }
	 
	 if(!validacion_dia){
		alert("El formulario turno tiene campos vacios");
	 }

	 $('#error_turno').html(cadena_error);
	  return validacion_dia;
};

///////////////////////////////////////////////////////////



