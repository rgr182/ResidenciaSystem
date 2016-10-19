var valida_turno = function (){

var selector_turno = $('input[name="turno"]');
var validacion = true;

if (!selector_turno.val()) { 
	    alert("TURNO NO  AGREGADO POR	PORQUE ESTA VACIO");
	    validacion = false;
	  }
 if (validacion) {
		$('#agregaturno').submit()
	}
};


