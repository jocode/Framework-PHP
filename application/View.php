<?php 

/**
* A diferencia de los controladores, que deben extender de un controlador principal, en las vistas no es necesario
*/
class View {
	
	private $_controlador;
	private $_js;

	public function __construct(Request $peticion){
		$this->_controlador = $peticion->getControllador();
		$this->_js = array();
	}

	/**
	* Método que va hacer las llamadas a las vistas
	* Es necesario que en la carpeta views, se cree una carpeta con el mismo nombre del controlador,  y ahí incluirse los archivos para cada funcionalidad
	* @param $vista nombre del archivo a renderizar
	* @param $item item del enlace, para dejarlo seleccionado
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
				array(
					'id' => 'Post',
					'titulo' => 'Post',
					'enlace' => BASE_URL . 'post',
				),
			);

			if (Session::get('autenticado')){
				$menu[] = array(
					'id' => 'Login',
					'titulo' => 'Cerrar Sesión',
					'enlace' => BASE_URL . 'login/cerrar'
					);
			} else {
				$menu[] = array(
					'id' => 'Login',
					'titulo' => 'Iniciar Sesión',
					'enlace' => BASE_URL . 'login'
					);
			}

			$js = array();

			if (count($this->_js)){
				$js = $this->_js;
			}

			$_layoutParams = array(
				'ruta_css' => BASE_URL . 'views/layout/'. DEFAULT_LAYOUT . '/css/',
				'ruta_img' => BASE_URL . 'views/layout/'. DEFAULT_LAYOUT . '/img/',
				'ruta_js' => BASE_URL . 'views/layout/'. DEFAULT_LAYOUT . '/js/',
				'menu' => $menu,
				'js' => $js,
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


	public function setJs(array $js){
		if (is_array($js) && count($js)){
			for ($i = 0; $i < count($js); $i++){
				$this->_js[] = BASE_URL . 'views/' . $this->_controlador . '/js/'.$js[$i] . '.js'; 
			}
		} else {
			throw new Exception("Error al cargar JS en $this->_controlador");
		}
	}

}

?>