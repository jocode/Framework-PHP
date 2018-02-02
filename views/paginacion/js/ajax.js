$(document).ready(function(){

	$("#lista_registros").on('click', '.pagina', function(){
        paginacion($(this).attr("pagina"));
        console.log($(this).attr('pagina'));
    });﻿

	paginacion = function(pagina){
		var pagina = 'pagina=' + pagina;

		$.post(
			_root_ + 'paginacion/pruebaAjax',
			pagina, 
			function(data){
				$("#lista_registros").html('');
				$("#lista_registros").html(data);
			}
		);
	}

});