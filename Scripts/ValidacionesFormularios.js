var valida_empleado = function (){
//Valida la contraseña
var selector_Contraseña = $('input[name="contra"]');
var selector_Nombre =  $('input[name="nombre"]');
var selector_Idempleado = $('input[name="idempleado"]');
var validacion = true;
	if (!selector_Contraseña.val()) { 
	    alert("Constraseña esta vacia");
	    validacion = false;
	  }

/*	if(typeof(selector_Contraseña.val()) != 'number'){
    	alert("revisa el formato de la contraseña solo pueden ir numeros");
    	 validacion = false;
    } */

	if (!selector_Nombre.val()) { 
	    alert("Nombre del empleado esta vacio");
	     validacion = false;
	}

	/*if(typeof(selector_Contraseña.val()) != 'string'){
    	alert("revisa el formato del nombre solo pueden ir letras");
    	 validacion = false;
	}*/

	if (!selector_Idempleado.val()) { 
	    alert("Numero del empleado esta vacio");
	     validacion = false;
	}

	/*if(typeof(selector_Contraseña.val()) != 'number'){
    	alert("revisa el formato de la  Constraseña solo pueden ir numeros");
    	 validacion = false;
	}*/

	if (validacion) {
		$('#guardaEmpleado').submit()
	}
};