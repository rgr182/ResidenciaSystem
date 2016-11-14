function valida_1ETIQUETAROJA (){
	var selector_cantidadenmetros = $("#cantidadenmetros");
	//var selector_Noetiquetaroja = $('input[name="Noetiquetaroja"]');
	//var selector_semanaFPS = $('input[name="semanaFPS"]');
	//var selector_fechadescrap = $('input[name="fechadescrap"]');
	defecto = document.getElementById("defecto").selectedIndex;
	statusetiquetaroja = document.getElementById("statusetiquetaroja").selectedIndex;
    destino = document.getElementById("destino").selectedIndex;
    var validacion_dia = true;
    if( defecto == null || defecto == 0 ) {
		 alert(" ESTA VACIO EL CAMPO DEFECTO ");
		validacion_dia = false;

	}
	if( statusetiquetaroja == null || statusetiquetaroja == 0 ) {
		 alert(" ESTA VACIO EL CAMPO STATUS ETIQUETA ROJA ");
		validacion_dia = false;

	}
	if( destino == null || destino == 0 ) {
		 alert(" ESTA VACIO EL CAMPO DESTINO ");
		validacion_dia = false;

	}
	/*if (!selector_Noetiquetaroja.val()) { 
    	alert(" ESTA VACIO EL CAMPO No ETIQUETA ROJA ESTA VACIO ");
		validacion_dia = false;
	   
	  }*/
	/*if (!selector_semanaFPS.val()) { 
    	alert(" ESTA VACIO EL CAMPO  SEMANA FPS  ESTA VACIO ");
		validacion_dia = false;
	   
	  }*/
	/*if (!selector_fechadescrap.val()) { 
    	alert(" ESTA VACIO EL CAMPO  FECHA DE SCRAP  ESTA VACIO ");
		validacion_dia = false;
	   
	  }*/
	 if (!selector_cantidadenmetros.val()) { 
    	alert(" ESTA VACIO EL CAMPO  FECHA DE SCRAP  ESTA VACIO ");
		validacion_dia = false;
	   
	  }


 
 



};
