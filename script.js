$(document).ready(function(){
	formSubmit()
})

function formSubmit(){
	$('#formDatos').submit(function(e){
		e.preventDefault()

	var idempleado=$('#idempleado').val()
	var nomempleado=$('#nomempleado').val()
	var contra=$('#contra').val()

	var data ='idempleado='+idempleado+'&nomempleado='+nomempleado+'&contra='+contra;

	$.ajax({
		url: 'form.php',
		type: 'POST',
		data:data,

		beforeSend: function(){
			console.log('enviando dato a la base de datos')
		}
		succes:function(resp){
			console.log('resp')
		}
		})
	})
}
