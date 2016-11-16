/*$(':input')
 .not(':button, :submit, :reset, :hidden')
 .val('')
 .removeAttr('checked')
 .removeAttr('selected');*/
var contador_error = 0;

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
		alert("El formulario Caracteristicas tiene campos vacios");
	 }

	 $('#error_turno').html(cadena_error);
	  return validacion_dia;
};

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
var selector_resistencia = $('input[name="resistencia"]');
var selector_RESISTENCIA2= $('input[name="RESISTENCIA"]');
var selector_diametroAislante = $('input[name="diametroaislante"]');
var selector_diametroAislante2 = $('input[name="DIAMETRO_DEL_AISLANTE"]');

var selector_grosorDelAislante =  $('input[name="Grosor_del_Aislante"]');
var selector_grosorDelAislante2 =  $('input[name="Grosor_del_Aislante"]:last');

var selector_concentricidad = $('input[name="Concentricidad"]');
var selector_concentricidad2 = $('input[name="Concentricidad"]:nth-child(2)');

var selector_factorA = $('input[name="Factor_a"]');
var selector_factorA2 = $('input[name="Factor_A"]');

var selector_abrasion = $('input[name="Abrasion"]');
var selector_abrasion2 = $('input[name="Abrasion"]:nth-child(2)');

var selector_elogacion = $('input[name="Elogacion"]');
var selector_elogacion2 = $('input[name="Elogacion"]:nth-child(2)');

var selector_roturadeElogacion = $('input[name="Rotura_de_Elogacion"]:first');
var selector_roturadeElogacion2 = $('input[name="Rotura_de_Elogacion"]:last');

var selector_desforre1 = $('input[name="Desforre_1"]');
var selector_desforre1_2 = $('input[name="Desforre_1"]:nth-child(2)');

var selector_desforre2 = $('input[name="Desforre_2"]');
var selector_desforre2_2 = $('input[name="Desforre_2"]:nth-child(2)');

var selector_encogimientoalCalor = $('input[name="Encogimiento_al_Calor"]');
var selector_encogimientoalCalor2 = $('input[name="Encogimiento_al_Calor"]:nth-child(2)');

var selector_usw = $('input[name="USW"]');
var selector_usw2 = $('input[name="USW"]:nth-child(2)');

var selector_hotSet = $('input[name="HOT_SET"]');
var selector_hotSet2 = $('input[name="HOT_SET"]:nth-child(2)');
var validacion = true;

if (!selector_resistencia.val()) { 
	    cadenaDeEror+=(" El campo resistencia esta vacio, ");
	    selector_RESISTENCIA2.val("NOK");
	    selector_RESISTENCIA2.css("color","red");
	    validacion = false;
	  }else if (selector_resistencia.val()<20 || selector_resistrencia.val()>50){
	  	validacion = false;
        cadenaDeEror+=(" El campo Diametro debe de estar entre 20 y 50");
	    selector_RESISTENCIA2.val("NOK");
	    selector_RESISTENCIA2.css("color","red");	    
	  }else{
	    selector_RESISTENCIA2.val("OK");
	    selector_RESISTENCIA2.css("color","green");	
	  }



	if (!selector_diametroAislante.val()) { 
	    cadenaDeEror+=(" El campo Diametro Aislante esta vacio, ");
	    selector_diametroAislante2.val("NOK");
	    selector_diametroAislante2.css("color","red");
	    validacion = false;
	  }else if (selector_diametroAislante.val()<20 || selector_diametroAislante.val()>50){
	  	validacion = false;
        cadenaDeEror+=(" El campo Diametro debe de estar entre 20 y 50");
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
		validacion = false;
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
		validacion = false;
        cadenaDeEror+=("  El campo Hot Set  tiene un valor menor a 50 ");
	    selector_hotSet2.val("NOK");
	    selector_hotSet2.css("color","red");	    
	  }else{
	    selector_hotSet2.val("OK");
	    selector_hotSet2.css("color","green");	
	  }	

var validacionGlobal = validacion_global();
var validaFormularioDia = valida_dia();
if (validacion && validaFormularioDia && validacionGlobal) {	
    alert("todo esta bien  =D");	
	window.location.href = '#openModal2';	
	}else if(contador_error <= 0){		
		contador_error++;
	}else{
		window.location.href = '#openModal';
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
   
  if (!validacion){
    alert("existe algun campo vacio");
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
	var checkbox_burbujadeaire = $('input[name="burbujadeaire"]');


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
    
     && valida_checkbox(checkbox_burbujadeaire)
    
	 )
	{
	 
	}else{
	  alert("un checkbox esta vacio");
	}

	return validacion;
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

//////////////////////////////////////////
var valida_turno = function (){

var selector_turno = $('input[name="turno"]');
var validacion = true;

if (!selector_turno.val()) { 
	    alert("TURNO NO  AGREGADO POR PORQUE ESTA VACIO");
	    validacion = false;
	  }
 if (validacion) {
 	/// es un id que debe de ir en cada formulario.
		$('#aagregaturno').submit()
	}
};
var valida_Frecuencia = function (){

var selector_Frecuencia = $('input[name="Frecuencia"]');
var validacion = true;

if (!selector_Frecuencia.val()) { 
	    alert("FRECUENCIA NO  AGREGADO POR	PORQUE ESTA VACIO");
	    validacion = false;
	  }
 if (validacion) {
 	/// es un id que debe de ir en cada formulario.
		$('#aagregaFrecuancia').submit()
	}
};
var valida_linea = function (){

var selector_linea = $('input[name="linea"]');
var validacion = true;

if (!selector_linea.val()) { 
	    alert("LINEA NO  AGREGADO POR	PORQUE ESTA VACIO");
	    validacion = false;
	  }
 if (validacion) {
 	/// es un id que debe de ir en cada formulario.
		$('#aagregalinea').submit()
	}
};
var valida_producto = function (){

var selector_producto = $('input[name="producto"]');
var validacion = true;

if (!selector_producto.val()) { 
	    alert("PRODUCTO NO  AGREGADO POR	PORQUE ESTA VACIO");
	    validacion = false;
	  }
 if (validacion) {
 	/// es un id que debe de ir en cada formulario.
		$('#aagregaproducto').submit()
	}
};
var valida_calibre = function (){

var selector_calibre = $('input[name="calibre"]');
var validacion = true;

if(typeof(selector_calibre.val()) != 'number'){
    	alert("revisa el formato de la  calibre solo pueden ir numeros");
    	 validacion = false;
	}

if (!selector_calibre.val()) { 
	    alert("calibre NO  AGREGADO POR	PORQUE ESTA VACIO");
	    validacion = false;
	  }

 if (validacion) {
 	/// es un id que debe de ir en cada formulario.
		$('#aagregarcalibre').submit()
	}
};
var valida_composicion = function (){

var selector_composicion = $('input[name="composicion"]');
var validacion = true;

if (!selector_composicion.val()) { 
	    alert("COMPOSICION NO  AGREGADO POR	PORQUE ESTA VACIO");
	    validacion = false;
	  }
 if (validacion) {
 	/// es un id que debe de ir en cada formulario.
		$('#aagregacomposicion').submit()
	}
};
var valida_colorprimario = function (){

var selector_colorprimario = $('input[name="colorprimario"]');
var validacion = true;

if (!selector_colorprimario.val()) { 
	    alert("COLOR PRIMARIO NO  AGREGADO POR	PORQUE ESTA VACIO");
	    validacion = false;
	  }
 if (validacion) {
 	/// es un id que debe de ir en cada formulario.
		$('#aagregacolorprimario').submit()
	}
};
var valida_colorsecundario = function (){

var selector_colorsecundario = $('input[name="colorsecundario"]');
var validacion = true;

if (!selector_colorsecundario.val()) { 
	    alert("COLOR SECUNDARIO NO  AGREGADO POR	PORQUE ESTA VACIO");
	    validacion = false;
	  }
 if (validacion) {
 	/// es un id que debe de ir en cada formulario.
		$('#aagregacolorsecundario').submit()
	}
};
var valida_defecto = function (){

var selector_defecto = $('input[name="defecto"]');
var validacion = true;
if(isNumeric(selector_defecto.val())){
    	alert("REVISE EL FORMATO DE DEFECTO SOLO PUEDEN IR LETRAS");
    	 validacion = false;
	}

if (!selector_defecto.val()) { 
	    alert("DEFECTO NO  AGREGADO POR	PORQUE ESTA VACIO");
	    validacion = false;
	  }
 if (validacion) {
 	/// es un id que debe de ir en cada formulario.
		$('#aagregardefecto').submit()
	}
};
var valida_statusetiquetaroja = function (){

var selector_statusetiquetaroja = $('input[name="statusetiquetaroja"]');
var validacion = true;
if(isNumeric(selector_statusetiquetaroja.val())){
    	alert("REVISE EL FORMATO DE STATUSETIQUETAROJA SOLO PUEDEN IR LETRAS");
    	 validacion = false;
	}

if (!selector_statusetiquetaroja.val()) { 
	    alert("STATUS DE ETIQUETAROJA NO  AGREGADO POR	PORQUE ESTA VACIO");
	    validacion = false;
	  }
 if (validacion) {
 	/// es un id que debe de ir en cada formulario.
		$('#aagregarstatusroja').submit()
	}
};
var valida_destino = function (){

var selector_destino = $('input[name="destino"]');
var validacion = true;
if(isNumeric(selector_destino.val())){
    	alert("REVISE EL FORMATO DEL DESTINO SOLO PUEDEN IR LETRAS");
    	 validacion = false;
	}

if (!selector_destino.val()) { 
	    alert("DESTINO NO  AGREGADO POR	PORQUE ESTA VACIO");
	    validacion = false;
	  }
 if (validacion) {
 	/// es un id que debe de ir en cada formulario.
		$('#aagregardestino').submit()
	}
};









