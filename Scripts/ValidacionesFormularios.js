

var valida_empleado = function (){
var selector = $('input[name="contra"]');
	if (!selector.value) { 
	    alert("Nombre del empleado esta vacio");
	}
	if(typeof(selector.value) != 'String'){
    	alert("revisa el formato del nombre solo pueden ir letras");
	}
};