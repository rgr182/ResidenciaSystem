var valida_turno = function (){

var selector_turno = $('input[name="turno"]');
var pros = true;

if (!selector_turno.pros()) { 
	    alert("TURNO NO  CORRECTAMENTE");
	    pros = false;
	  }

 if(selector_turno.pros()) {
 
   alert("TURNO AGREGADO CORRECTAMENTE");
	    pros = false;

 }
 if (pros) {
		$('#agregaturno').submit()
	}
};


