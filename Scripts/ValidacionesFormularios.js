var valida_empleado = function (){
//Valida la contraseña
var selector_Contraseña = $('input[name="contra"]');
var selector_Nombre =  $('input[name="nombre"]');
var selector_Idempleado = $('input[name="idempleado"]');

	if (!selector_Contraseña.value) { 
	    alert("Constraseña esta vacia");	}
	if(typeof(selector_Contraseña.value) != 'Number'){
    	alert("revisa el formato del nombre solo pueden ir numeros");}

	if (!selector_Nombre.value) { 
	    alert("Nombre del empleado esta vacio");
	}
	if(typeof(selector_Contraseña.value) != 'String'){
    	alert("revisa el formato del nombre solo pueden ir letras");
	}

	if (!selector_Idempleado.value) { 
	    alert("Numero del empleado esta vacio");
	}
	if(typeof(selector_Contraseña.value) != 'Number'){
    	alert("revisa el formato del nombre solo pueden ir numeros");
	}
};