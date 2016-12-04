$(document).ready(function() {
    $("a").click(function(event) {
        var id = (event.target.id);
        var list = document.getElementsByTagName("img");
        var imagen;
        for (var i = 0 ; i <= list.length; i++) {
        	if ( list[i] && list[i].id.length > 0 ) {
	        	if (id == list[i].id){
					imagen= list[i];
	        	}
            }
        }

        var imagensrc =  $(imagen).attr("src");  
        var id = $(imagen).attr("id");
         if (imagensrc) {
       	   $('.imagentrabajador').attr("src",imagensrc);
           $('#idModal').val(id);        	
         };   
        
    });

    
});
