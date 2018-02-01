<?php 

/**
* El Bootstrap va a llamar el Controlador y el Método que se envío por la URL, sino se envía un método va a ir al método index() por defecto
*/
class Bootstrap {

	public static function run(Request $peticion){
		$modulo = $peticion->getModulo();
		$controller = $peticion->getControlador() . 'Controller';
		$metodo = $peticion->getMetodo();
		$args = $peticion->getArgs();

		if ($modulo){
			# Revisa si hay un controlador base, para ese módulo
			$rutaModulo = ROOT . 'controllers' . DS . $modulo.'Controller.php';
			if (is_readable($rutaModulo)){
				require_once $rutaModulo;
				$rutaControlador = ROOT . 'modules' . DS . $modulo . DS . 'controllers' . DS . $controller . '.php';
			} else {
				throw new Exception("Error de ruta de Módulo, $modulo");
			}
		} else {
			$rutaControlador = ROOT . 'controllers' . DS . $controller . '.php';
		}

		// Verificamos si el archivo existe y si es legible
		if (is_readable($rutaControlador)){
			require_once($rutaControlador);
			$controller = new $controller();

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