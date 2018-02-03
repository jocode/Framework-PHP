$(document).ready(function(){

	$("#lista_registros").on('click', '.pagina', function(){
        paginacion($(this).attr("pagina"));
    });﻿

	$("#pais").change(function(){
	 	getCiudades();
		paginacion();
	});

	$("#lista_registros").on('change', '#registros', function(){
        paginacion();
    });﻿

	$("#ciudad").change(function(){
		if($("#pais").val() != 0){
			paginacion();
		}
	});

	$("#btnEnviar").click(function(){
		paginacion();
	});

	paginacion = function(pagina){
		var pagina = 'pagina=' + pagina;
		var nombre = '&nombre='+$("#nombre").val();
		var pais = '&pais='+$("#pais").val();
		var ciudad = '&ciudad='+$("#ciudad").val();
		var registros = '&registros='+$("#registros").val();

		$.post(
			_root_ + 'paginacion/pruebaAjax',
			pagina+nombre+pais+ciudad+registros, 
			function(data){
				$("#lista_registros").html('');
				$("#lista_registros").html(data);
			}
		);
	}

	var getCiudades = function(){
		$.post(
			_root_+'ajax/getCiudades', 
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
		$('#ciudad').val('0');
	}

});