<?php 

/**
* Clase Widget
* Es abstacta para que no pueda instanciarse
*/
abstract class Widget {
	
	/**
	* Método que carga el modelo a los widget, para que tenga acceso a sus propios datos
	*/
	protected function loadModel($model){
		$rutaModel = ROOT . 'widgets' . DS . 'models' . DS . $model . '.php';
		if (is_readable($rutaModel)){
			include_once $rutaModel;

			$modelClass = $model.'ModelWidget';

			if (class_exists($modelClass)){
				return new $modelClass;
			}
		}
		throw new Exception("Error de Modelo de Widget");
	}

	protected function render($view, $data = array(), $ext = 'phtml'){
		$rutaView = ROOT . 'widgets' . DS . 'views' . DS . $view . '.' . $ext;

		if (is_readable($rutaView)){
			ob_start();
			extract($data);
			include $rutaView;
			$content = ob_get_contents();
			ob_end_clean();

			return $content;
		}
		throw new Exception("Error la vista del Widget");
		
	}

}

?>