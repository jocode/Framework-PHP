<?php 

/**
* Esta clase permite paginar registros
*/
class Paginador {

	private $_datos;
	private $_paginacion;
	
	function __construct($query, $pagina = false, $limite = false, $paginas = false){
		if ($limite && is_numeric($limite)){
			$limite = $limite;
		} else {
			$limite = 10;
		}

		if ($pagina && is_numeric($pagina)){
			$pagina = $pagina;
			$inicio = ($pagina - 1) * $limite;
		} else {
			$pagina = 1;
			$inicio = 0;
		}

		$total = ceil($registros / $limite);
		$this->_paginacion = array_slice($query, $inicio, $limite);

	}

}

?>