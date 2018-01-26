<?php 

class Paginador {

	private $_datos; # Registros devueltos por la paginación
	private $_paginacion; # Almacena datos de la paginacion

	public function __construct(){
		$this->_datos = array();
		$this->_paginacion = array();
	}

	/**
	* Este método permite paginar registros, de acuerdo a una consulta que se pase
	*/
	public function paginar($query, $pagina = false, $limite = false, $paginas = 10){

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

		# Obtiene el total de las páginas
		$registros = count($query);
		$total_paginas = ceil($registros / $limite);
		$this->_datos = array_slice($query, $inicio, $limite);

		# Construcción del paginador
		$paginacion = array();
		$paginacion['actual'] = $pagina;
		$paginacion['total'] = $total_paginas;

		if ($pagina > 1){
			$paginacion['primero'] = 1;
			$paginacion['anterior'] = $pagina - 1;
		} else {
			$paginacion['primero'] = '';
			$paginacion['anterior'] = '';
		}

		# Si la página es menor al total de páginas, mostramos el enlace de ultimo y siguiente
		if ($pagina < $total_paginas){
			$paginacion['ultimo'] = $total_paginas;
			$paginacion['siguiente'] = $pagina + 1;
		} else {
			$paginacion['ultimo'] = '';
			$paginacion['siguiente'] = '';
		}

		$this->_paginacion = $paginacion;
		$this->_rangoPaginacion($paginas);

		return $this->_datos;
	}

	private function _rangoPaginacion($limite = false){
		if ($limite && is_numeric($limite)){
			$limite = $limite;
		} else {
			$limite = 5;
		}

		$total_paginas = $this->_paginacion['total'];
		$pagina_seleccionada = $this->_paginacion['actual'];
		# El rango obtiene datos del lado izquierdo, y del lado derecho en base a la página actual
		$rango = ceil($limite / 2);
		$paginas = array();

		#---------------------------------------------------
		# Determinamos el rango del lado derecho |actual| ==>
		$rango_derecho = $total_paginas - $pagina_seleccionada;

		if ($rango_derecho < $rango){
			# Por ejemplo resto = 3 - 2 => 1
			$resto = $rango - $rango_derecho;
		} else {
			$resto = 0;
		}

		# ------------------------------------------------------------
		# Determinamos el rango izquierdo  <== |actual|
		$rango_izquierdo = $pagina_seleccionada - ($rango + $resto);

		for ($i = $pagina_seleccionada; $i > $rango_izquierdo; $i--){
			if ($i == 0){
				break;
			}
			# Almacenamos las páginas del rango izquierdo
			$paginas[] = $i;
		}

		# --------------------------------------------------------
		# La función sort de php,ordena el arreglo de menor a mayor
		sort($paginas);

		# --------------------------------------------------------
		# Determinamos rango del lado derecho  |actual| ==>
		if ($pagina_seleccionada < $rango){
			$rango_derecho = $limite;
		} else {
			# Esta suma puede dar un número mayor al total de páginas
			$rango_derecho = $pagina_seleccionada + $rango;
		}

		for ($i = $pagina_seleccionada + 1; $i <= $rango_derecho; $i++){
			# Si i, es mayor al total de las páginas, salga del ciclo
			if ($i > $total_paginas){
				break;
			}

			# Almacenamos las páginas del rango derecho
			$paginas[] = $i;
		}

		$this->_paginacion['rango'] = $paginas;

		return $this->_paginacion;
	}

	/**
	* Este método nos creará una vista sólo para la paginación
	*/
	public function getView($vista, $link = false){
		$rutaView = ROOT . 'views' . DS . '_paginador' . DS . $vista . '.php';

		if ($link)
			$link = BASE_URL . $link . '/';

		if (is_readable($rutaView)){
			# ob_start da apertura al buffer
			ob_start();
			# Almacenamos la vista en el buffer
			include $rutaView;
			# Lo que tenemos en el buffer lo almacenamos en la variable contenido
			$contenido = ob_get_contents();
			# Limpia el buffer 
			ob_end_clean();

			return $contenido;
		}
		throw new Exception("Error de paginación");
	}

}

?>