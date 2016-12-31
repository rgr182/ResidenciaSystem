$(function(){
	$('#search_form').submit(function(e){
       e.preventDefault();
	})

	 $('#search').keyup(function(){

	     var enivo =$('search').val();
	     $('#resultados').html('<h2><img src="carga.gif" width="20px" alt=""/>CARGANDO<H2>');
	     $.ajax({
	     	 type:'POST',
	     	 url:'php/bbuscador.php',
	     	 data:('search='+envio),
	     	 success: function(resp){
	     	 	if(resp!=""){
	     	 		$('#resultados').html(resp);
	     	 	}
	     	 }
	     })
	 })
})