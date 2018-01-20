<?php 

/**
* Esta clase recibirá las peticiones de la URL y se las pasará a Bootstrap
*/
class Request {
	
	private $_controlador;
	private $_metodo;
	private $_argumentos;

	public function __construct(){
		// Revisamos si existe una variable vía GET
		if (isset($_GET['url'])){
			# INPUT_GET le indica que va a recibir la variable 'url' vía GET
			$url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
			# explode(), Divide la url, cada vez que hay un slash, y crea un item en un array
			$url = explode("/", $url);
			# array_filter(), verifica que los elementos del arreglo sean válidos, si no los elimina. Por ejemplo elimina todos los / sobrantes
			$url = array_filter($url);

			# strtolower() Coloca todas las letras en minúscula
			# array_shift() Quita el primer valor del array y lo devuelve
			$this->_controlador = strtolower(array_shift($url));
			$this->_metodo = strtolower(array_shift($url));
			$this->_argumentos = $url;
		}

		if (!$this->_controlador){
			$this->_controlador = DEFAULT_CONTROLLER;
		}

		if (!$this->_metodo){
			$this->_metodo = 'index';
		}

		if (!isset($this->_argumentos)){
			$this->_argumentos = array();
		}
	}

	/**
	* Devuelve el controlador
	*/
	public function getControllador(){
		return $this->_controlador;
	}

	/**
	* Devuelve el método
	*/
	public function getMetodo(){
		return $this->_metodo;
	}

	/**
	* Devuelve los argumentos
	*/
	public function getArgs(){
		return $this->_argumentos;
	}

}

?>