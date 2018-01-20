<?php 

/**
* El Bootstrap va a llamar el Controlador y el Método que se envío por la URL, sino se envía un método va a ir al método index() por defecto
*/
class Bootstrap {

	public static function run(Request $peticion){
		$controller = $peticion->getControllador() . 'Controller';
		$rutaControlador = ROOT . 'controllers' . DS . $controller . '.php';

		$metodo = $peticion->getMetodo();
		$args = $peticion->getArgs();

		// Verificamos si el archivo existe y si es legible
		if (is_readable($rutaControlador)){
			require_once($rutaControlador);
			$controller = new $controller;

			if (is_callable(array($controller, $metodo))){
				$metodo = $peticion->getMetodo();
			} else {
				$metodo = 'index';
			}

			if (isset($args)){
				# call_user_func_array(), le pasamos la clase y el método, y los parámetros que queremos pasarle al método
				call_user_func_array(array($controller, $metodo), $args);
			} else {
				# Si no hay argumentos, llamamos la clase y el método que estamos solicitando
				call_user_func(array($controller, $metodo));
			}

		} else {
			# Para que se muestre este error, debemos agregar la instancia de Bootstrap en el archivo index.php dentro de un try catch
			throw new Exception("Controlador $controller no encontrado");
			
		}
	}

}

?>