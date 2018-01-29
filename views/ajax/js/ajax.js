$(document).ready(function(){

	var getCiudades = function(){
		$.post(
			'/Framework-PHP/ajax/getCiudades', 
			'pais='+$("#pais").val(),
			function(response){
				$("#ciudad").html('');
				$('#ciudad').append('<option value="0">-Seleccione una Ciudad-</option>');
				for (var i = 0; i < response.length; i++) {
					$('#ciudad').append('<option value="'+response[i].id+'">'+response[i].ciudad+'</option>');
				}
			},
			'json'
			);
	}

	$('#pais').change(function(){
		if ($('#pais').val() != 0){
			getCiudades();
		}
	});

	$('#btn_insertar').click(function(){
		$.post(
			'/Framework-PHP/ajax/insertarCiudad', 
			'pais='+$("#pais").val()+'&ciudad='+$('#nuevaCiudad').val()
			);
		$('#nuevaCiudad').val('');
		getCiudades();
	});

});