/*$(':input')
 .not(':button, :submit, :reset, :hidden')
 .val('')
 .removeAttr('checked')
 .removeAttr('selected');*/


var valida_empleado = function (){
//Valida la contraseña
var selector_Contraseña = $('input[name="contra"]');
var selector_Nombre =  $('input[name="nombredelauditor"]');
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

	if(isNumeric(selector_Nombre.val())){
    	alert("revisa el formato del nombre solo pueden ir letras");
    	 validacion = false;
	}

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

var valida_funcionesGenerales = function (){

var cadenaDeEror = "";
var selector_diametroAislante = $('input[name="diametroaislante"]');
var selector_diametroAislante2 = $('input[name="DIAMETRO DEL AISLANTE"]');

var selector_grosorDelAislante =  $('input[name="Grosor del Aislante"]');
var selector_grosorDelAislante2 =  $('input[name="Grosor del Aislante"]:last');

var selector_concentricidad = $('input[name="Concentricidad"]');
var selector_concentricidad2 = $('input[name="Concentricidad"]:nth-child(2)');

var selector_factorA = $('input[name="Factor a"]');
var selector_factorA2 = $('input[name="Factor A"]');

var selector_abrasion = $('input[name="Abrasión"]');
var selector_abrasion2 = $('input[name="Abrasión"]:nth-child(2)');

var selector_elogacion = $('input[name="Elogación"]');
var selector_elogacion2 = $('input[name="Elogación"]:nth-child(2)');

var selector_roturadeElogacion = $('input[name="Rotura de Elogación"]:first');
var selector_roturadeElogacion2 = $('input[name="Rotura de Elogación"]:last');

var selector_desforre1 = $('input[name="Desforre 1"]');
var selector_desforre1_2 = $('input[name="Desforre 1"]:nth-child(2)');

var selector_desforre2 = $('input[name="Desforre 2"]');
var selector_desforre2_2 = $('input[name="Desforre 2"]:nth-child(2)');

var selector_encogimientoalCalor = $('input[name="Encogimiento al Calor"]');
var selector_encogimientoalCalor2 = $('input[name="Encogimiento al Calor"]:nth-child(2)');

var selector_usw = $('input[name="USW"]');
var selector_usw2 = $('input[name="USW"]:nth-child(2)');

var selector_hotSet = $('input[name="HOT SET"]');
var selector_hotSet2 = $('input[name="HOT SET"]:nth-child(2)');
var validacion = true;

	if (!selector_diametroAislante.val()) { 
	    cadenaDeEror+=(" El campo Diametro Aislante esta vacio, ");
	    selector_diametroAislante2.val("NOK");
	    selector_diametroAislante2.css("color","red");
	    validacion = false;
	  }else if (selector_diametroAislante.val()<50){
	  	validacion = false;
        cadenaDeEror+=(" El campo Diametro tiene un valor menor a 50 ");
	    selector_diametroAislante2.val("NOK");
	    selector_diametroAislante2.css("color","red");	    
	  }else{
	    selector_diametroAislante2.val("OK");
	    selector_diametroAislante2.css("color","green");	
	  }

	if (!selector_grosorDelAislante.val()) { 
	    cadenaDeEror+=(" El campo Grosor del Aislante esta vacio, ");
	    selector_grosorDelAislante2.val("NOK");
	    selector_grosorDelAislante2.css("color","red");
	    validacion = false;
	}else if (selector_grosorDelAislante.val()<50){
		validacion = false;
        cadenaDeEror+=(" El campo Grosor del Aislante tiene un valor menor a 50 ");
	    selector_grosorDelAislante2.val("NOK");
	    selector_grosorDelAislante2.css("color","red");	    
	  }else{
	    selector_grosorDelAislante2.val("OK");
	    selector_grosorDelAislante2.css("color","green");	
	  }


	if (!selector_concentricidad.val()) { 
		selector_concentricidad2.val("NOK");
	    selector_concentricidad2.css("color","red");
	    cadenaDeEror+=(" El campo Concentricidad esta vacio ");
	    validacion = false;
	 }else if (selector_concentricidad.val()<50){
	 	validacion = false;
        cadenaDeEror+=(" El campo Concentricidad tiene un valor menor a 50 ");
	    selector_concentricidad2.val("NOK");
	    selector_concentricidad2.css("color","red");	    
	  }else{
	    selector_concentricidad2.val("OK");
	    selector_concentricidad2.css("color","green");	
	  }

	

	if (!selector_factorA.val()) { 
		selector_factorA2.val("NOK");
	    selector_factorA2.css("color","red");
	    cadenaDeEror+=(" El campo Factor A esta vacio ");
	    validacion = false;
	}else if (selector_factorA.val()<50){
		  validacion = false;
        cadenaDeEror+=("  El campo Factor A tiene un valor menor a 50 ");
	    selector_factorA2.val("NOK");
	    selector_factorA2.css("color","red");	    
	  }else{
	    selector_factorA2.val("OK");
	    selector_factorA2.css("color","green");	
	  }


	if (!selector_abrasion.val()) { 
		selector_abrasion2.val("NOK");
	    selector_abrasion2.css("color","red");
	    cadenaDeEror+=(" El campo Abrasión esta vacio ");
	    validacion = false;
	}else if (selector_abrasion.val()<50){
		validacion = false;
        cadenaDeEror+=("  El campo Abrasión  A tiene un valor menor a 50 ");
	    selector_abrasion2.val("NOK");
	    selector_abrasion2.css("color","red");	    
	  }else{
	    selector_abrasion2.val("OK");
	    selector_abrasion2.css("color","green");	
	  }

	if (!selector_elogacion.val()) { 
		selector_elogacion2.val("NOK");
	    selector_elogacion2.css("color","red");
	    cadenaDeEror+=(" El campo Elogación esta vacio ");
	    validacion = false;
	}else if (selector_elogacion.val()<50){
		validacion = false;
        cadenaDeEror+=("  El campo Elogación   A tiene un valor menor a 50 ");
	    selector_elogacion2.val("NOK");
	    selector_elogacion2.css("color","red");	    
	  }else{
	    selector_elogacion2.val("OK");
	    selector_elogacion2.css("color","green");	
	  }


	if (!selector_roturadeElogacion.val()) { 
		selector_roturadeElogacion2.val("NOK");
	    selector_roturadeElogacion2.css("color","red");
	    cadenaDeEror+=(" El campo Rotura de Elogación esta vacio  ");
	    validacion = false;
	}else if (selector_roturadeElogacion.val()<50){
		validacion = false;
        cadenaDeEror+=("  El campo Rotura de Elogación A tiene un valor menor a 50 ");
	    selector_roturadeElogacion2.val("NOK");
	    selector_roturadeElogacion2.css("color","red");	    
	  }else{
	    selector_roturadeElogacion2.val("OK");
	    selector_roturadeElogacion2.css("color","green");	
	  }		

    if (!selector_desforre1.val()) { 
    	selector_desforre1_2.val("NOK");
	    selector_desforre1_2.css("color","red");
	    cadenaDeEror+=(" El campo Desforre 1 esta vacio ");
	     validacion = false;
	}else if (selector_desforre1.val()<50){
		validacion = false;
        cadenaDeEror+=(" El campo Desforre 1 A tiene un valor menor a 50 ");
	    selector_desforre1_2.val("NOK");
	    selector_desforre1_2.css("color","red");	    
	  }else{
	    selector_desforre1_2.val("OK");
	    selector_desforre1_2.css("color","green");	
	  }		


    if (!selector_desforre2.val()) { 
    	selector_desforre2_2.val("NOK");
	    selector_desforre2_2.css("color","red");
	    cadenaDeEror+=(" El campo Desforre 2 esta vacio ");
	     validacion = false;
	}else if (selector_desforre2.val()<50){
		validacion = false;
        cadenaDeEror+=("  El campo Desforre 2  A tiene un valor menor a 50 ");
	    selector_desforre2_2.val("NOK");
	    selector_desforre2_2.css("color","red");	    
	  }else{
	    selector_desforre2_2.val("OK");
	    selector_desforre2_2.css("color","green");	
	  }				

	if (!selector_encogimientoalCalor.val()) { 
		selector_encogimientoalCalor2.val("NOK");
	    selector_encogimientoalCalor2.css("color","red");
	    cadenaDeEror+=(" El campo Encogimiento al calor esta vacio ");
	     validacion = false;
	}else if (selector_encogimientoalCalor.val()<50){
		  validacion = false;
        cadenaDeEror+=("  El campo Encogimiento al calor tiene un valor menor a 50 ");
	    selector_encogimientoalCalor2.val("NOK");
	    selector_encogimientoalCalor2.css("color","red");	    
	  }else{
	    selector_encogimientoalCalor2.val("OK");
	    selector_encogimientoalCalor2.css("color","green");	
	  }	


	if (!selector_usw.val()) { 
		selector_usw2.val("NOK");
	    selector_usw2.css("color","red");
	    cadenaDeEror+=("El campo USW esta vacio");
	     validacion = false;
	}else if (selector_usw.val()<50){
        cadenaDeEror+=("  El campo USW tiene un valor menor a 50 ");
	    selector_usw2.val("NOK");
	    selector_usw2.css("color","red");	    
	  }else{
	    selector_usw2.val("OK");
	    selector_usw2.css("color","green");	
	  }	
		

	if (!selector_hotSet.val()) { 
		selector_hotSet2.val("NOK");
	    selector_hotSet2.css("color","red");
	    cadenaDeEror+=(" El campo Hot Set esta vacio ");
	     validacion = false;
	}else if (selector_hotSet.val()<50){
        cadenaDeEror+=("  El campo Hot Set  tiene un valor menor a 50 ");
	    selector_hotSet2.val("NOK");
	    selector_hotSet2.css("color","red");	    
	  }else{
	    selector_hotSet2.val("OK");
	    selector_hotSet2.css("color","green");	
	  }	


if (validacion) {		
	window.location.href = '#openModal';	
	}else{
		alert("revise los campos, no pueden haber campos vacios ni valores menores a 50");
	}
	$('#textErrorsCaraNum').html(cadenaDeEror);
	cadenaDeEror="";
	var validacion = true;
};

var validacion_global = function(){
	var validacion = true;
	var texto = $('input[type=text]');
	for (var i = 0 ; i < texto.length - 1; i++) {
		if (!($(texto[i]).val())) {
	     validacion = false;
	     $(texto[i]).css("color","red");
		}
    }
   


    var checkbox_efectomemoria = $('input[name="efectomemoria"]');
    var checkbox_encogimientoalcorte = $('input[name="encogimientoalcorte"]');

    var checkbox_formadelconductor = $('input[name="formadelconductor"]');
    var checkbox_colordecobre = $('input[name="colordecobre"]');
    var checkbox_reporte = $('input[name="reporte"]');
    var checkbox_marcaciondecable = $('input[name="marcaciondecable"]');
     var checkbox_aspectogeneral = $('input[name="aspectogeneral"]');
    var checkbox_anchosecundario = $('input[name="anchosecundario"]');
	var checkbox_etiqueta = $('input[name="etiqueta"]');
	var checkbox_condiciondeconipack = $('input[name="condiciondeconipack"]');
	var checkbox_embobinado = $('input[name="embobinado"]');

	if (valida_checkbox(checkbox_etiqueta) 
	 && valida_checkbox(checkbox_condiciondeconipack)
	 && valida_checkbox(checkbox_embobinado)
	 && valida_checkbox(checkbox_anchosecundario)
	 && valida_checkbox(checkbox_aspectogeneral)
	 && valida_checkbox(checkbox_marcaciondecable)
	 && valida_checkbox(checkbox_colordecobre)
	 && valida_checkbox(checkbox_formadelconductor)
	 && valida_checkbox(checkbox_reporte)
	 && valida_checkbox(checkbox_encogimientoalcorte)
     && valida_checkbox(checkbox_efectomemoria)
	 )
	{
	  alert("todo esta bien  =D");
	}else{
	  alert("un checkbox esta vacio");
	}
};

var valida_checkbox = function(checkbox){
	for (var i = 0;i < checkbox.length;i++) {	
		if ($(checkbox[i]).prop('checked')) {
			return true;
		}
	}
	return false;	   
};

function isNumeric(n) {
 var matches = n.match(/\d+/g);
	if (matches != null) {
	    return true;
	}else{

		return false;
	}
}