<?php 

/**
* A diferencia de los controladores, que deben extender de un controlador principal, en las vistas no es necesario
*/
class View {
	
	private $_controlador;

	public function __construct(Request $peticion){
		$this->_controlador = $peticion->getControllador();
	}

	/**
	* Método que va hacer las llamadas a las vistas
	* Es necesario que en la carpeta views, se cree una carpeta con el mismo nombre del controlador,  y ahí incluirse los archivos para cada funcionalidad
	*/
	public function renderizar($vista, $item = false){
		$rutaView = ROOT . 'views' . DS . $this->_controlador . DS . $vista . '.phtml';

		if (is_readable($rutaView)){

			$menu = array(
				array(
					'id' => 'Inicio',
					'titulo' => 'Inicio',
					'enlace' => BASE_URL,
				),
				array(
					'id' => 'Hola',
					'titulo' => 'Hola',
					'enlace' => BASE_URL,
				),
			);

			$_layoutParams = array(
				'ruta_css' => BASE_URL . 'views/layout/'. DEFAULT_LAYOUT . '/css/',
				'ruta_img' => BASE_URL . 'views/layout/'. DEFAULT_LAYOUT . '/img/',
				'ruta_js' => BASE_URL . 'views/layout/'. DEFAULT_LAYOUT . '/js/',
				'menu' => $menu,
			);

			# Incluimos el header de views/layouts/default/
			require_once(ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'header.php');
			# Incluimos la vista del contolador
			require_once($rutaView);
			# Incluimos el footer de views/layouts/default/
			require_once(ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'footer.php');
		} else {
			throw new Exception("No se encontró la vista $vista");
			
		}
	}
}

?>