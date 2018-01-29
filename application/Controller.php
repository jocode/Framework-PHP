<?php 
/**
* La clase principal de los controladores.
* Esta clase debe ser abstracta para que no pueda ser instanciada
*/
abstract class Controller {

	protected $_view;

	# Con este método constructor, creamos una instancia de la clase View, y queda disponible para todos los controladores
	public function __construct(){
		$this->_view = new View(new Request);
	}

	/*Este método abstacto index, obliga a que todas las clases que hereden de Controller, implementen un método index por obligación.
	* De esta manera nos aseguramos que siempre haya un método index, en todos los controladores, que es el método por defecto colocado en Request.php
	*/
	abstract public function index();

	/**
	* Este método crea una instancia del Modelo. Verifica si el modelo existe, entonces lo importa y devuelve una objeto de ese modelo.
	*/
	protected function loadModel($modelo){
		$modelo = $modelo . 'Model';
		$rutaModelo = ROOT . 'models' . DS . $modelo . '.php';

		if (is_readable($rutaModelo)){
			require_once($rutaModelo);
			$modelo = new $modelo();
			return $modelo;
		} else {
			throw new Exception("Error de Modelo: $model");
		}
	}


	/**
	* Método para cargar librerías
	*/ 
	protected function getLibrary($library){
		$rutaLibrary = ROOT . 'libs' . DS . $library . '.php';

		if (is_readable($rutaLibrary)){
			require_once($rutaLibrary);
		} else {
			throw new Exception("Error de Librería $library");
			
		}
	}

	protected function getTexto($clave){
		if (isset($_POST[$clave]) && !empty($_POST[$clave])){
			# Va a transformar las comillas simples y dobles
			$_POST[$clave] = htmlspecialchars($_POST[$clave], ENT_QUOTES);
			return $_POST[$clave];
		} 
		return '';
	}

	protected function getInt($clave){
		if (isset($_POST[$clave]) && !empty($_POST[$clave])){
			# Va a transformar las comillas simples y dobles
			$_POST[$clave] = filter_input(INPUT_POST, $clave, FILTER_VALIDATE_INT);
			return $_POST[$clave];
		} 
		return 0;
	}

	protected function redirect($ruta = false){
		if ($ruta){
			header("Location: " . BASE_URL . $ruta);
			exit;
		} else {
			header('Location: '. BASE_URL);
			exit;
		}
	}

	/**
	* @param $int 
	* Recibe el parámetro y lo convierte a entero
	*/
	protected function filtrarInt($int){
		$int = (int) $int;

		if (is_int($int)){
			return $int;
		} else {
			return 0;
		}
		
	}

	/**
	* Esta función devuelve el parámetro del método POST del HTTP 
	*/
	protected function getPostParam($clave){
		if (isset($_POST[$clave])){
			return $_POST[$clave];
		}
	}

	/**
	* Sólo acepta caracteres alfanumericos y se va a utilizar para sanitizar el nombre se usuario
	*/ 
	protected function getAlphaNum($clave){
		if (isset($_POST[$clave]) && !empty($_POST[$clave])){
			$_POST[$clave] = (string) preg_replace('/[^a-zA-Z0-9_]/i', '', $_POST[$clave]);
			return trim($_POST[$clave]);
		}
	}

	/**
	* Valida la dirección del Email
	*/
	public function validarEmail($email){
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
			return false;
		}
		return true;
	}

}

?>