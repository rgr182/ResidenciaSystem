 function valida_dia (){
    semana = document.getElementById("semana").selectedIndex;
    linea = document.getElementById("linea").selectedIndex;
    turno = document.getElementById("turno").selectedIndex;
    frecuencia = document.getElementById("frecuencia").selectedIndex;
    producto = document.getElementById("producto").selectedIndex;
    var validacion_dia = true;
    var cadena_error = " ";
	if( semana == null || semana == 0 ) {
		cadena_error += (" ESTA VACIO EL CAMPO SEMANA ");
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
	 
	 if(!validacion_dia){
		alert("El formulario turno tiene campos vacios");
	 }

	 $('#error_turno').html(cadena_error);
	  return validacion_dia;
};

///////////////////////////////////////////////////////////



