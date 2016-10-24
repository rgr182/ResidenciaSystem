function getParameterByName(name) {    
    url = window.location.href;    
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

var valida = getParameterByName("linea");
if (valida == "si"){	
	alert("linea borrado correctamente")
}else if(valida == "no"){
	alert(" Hubo un error al tratar de borrar el elemento buscado en el formualario de linea ");
};


	
