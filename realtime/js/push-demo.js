/* Push Demo
 * Josué Hernández
 */

var timestamp = null;
function cargar_push(){ 
	$.ajax({
		async:	true, 
    	type: "POST",
    	url: "httpush.php",
    	data: "&timestamp="+timestamp,
		dataType:"html",
    	success: function(data){

			var json = eval("(" + data + ")");
			timestamp = json.timestamp;
			mensaje = json.mensaje;
			id = json.id;
			status = json.status;
			tipo = json.tipo;
		
			if(timestamp != null){
				
				$.ajax({
					async:	true, 
					type: "POST",
					url: "mensajes.php",
					data: "",
					dataType:"html",
					success: function(data){							
						$('#msg_view').html(data);
					}
				});	
			}		
			setTimeout('cargar_push()',1000);
		    	
    	}
	});		
}		

$(document).ready(function(){
	cargar_push();

	$('#submit').click(function () {
		var mensaje = $('#mensaje').val();
		console.log(mensaje);
		$.ajax({

			url: 'insertar.php',
			data: ('mensaje=' + mensaje),
			type: 'POST',
			success: function(resp){
				console.log(resp);
				$('#mensaje').val("");
			}			

		});
	});

});	 