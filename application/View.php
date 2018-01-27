<?php 

/**
* A diferencia de los controladores, que deben extender de un controlador principal, en las vistas no es necesario
*/

require_once ROOT . 'libs' . DS . 'smarty' . DS . 'libs' . DS . 'Smarty.class.php';

class View extends Smarty {
	
	private $_controlador;
	private $_js;

	public function __construct(Request $peticion){
		parent::__construct();
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

		# Definimos el directorio del template
		$this->template_dir = ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS ;
		#Definimos el directorio de configuraciones, para guardar los archivos de configuración de las plantillas
		$this->config_dir = ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'configs' . DS;
		# Definimos los directorio temporales
		$this->cache_dir = ROOT . 'tmp' . DS . 'cache' . DS;
		$this->compile_dir = ROOT . 'tmp' . DS . 'template' . DS;


		$rutaView = ROOT . 'views' . DS . $this->_controlador . DS . $vista . '.tpl';

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
				$menu[] = array(
					'id' => 'registro',
					'titulo' => 'Registro',
					'enlace' => BASE_URL . 'registro'
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
				'item' => $item,
				'js' => $js,
				'configs' => array (
					'app_name' => APP_NAME,
					'app_slogan' => APP_SLOGAN,
					'app_company' => APP_COMPANY,
				),
				'root' => BASE_URL
			);

			# Asignamos la vista al template de Smarty
			$this->assign('_contenido', $rutaView);

			# Asignamos parámetros al layout
			$this->assign('_layoutParams', $_layoutParams);
			# LLamamos el template
			$this->display('template.tpl');
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