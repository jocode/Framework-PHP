<?php 

/**
* A diferencia de los controladores, que deben extender de un controlador principal, en las vistas no es necesario
*/

require_once ROOT . 'libs' . DS . 'Smarty.class' . DS . 'Smarty.class.php';

class View extends Smarty {
	
	private $_request;
	private $_js;
	private $_acl;
	private$_rutas;
	private $_jsPlugin;
	private $_template;

	public function __construct(Request $peticion, ACL $_acl){
		parent::__construct();
		$this->_request = $peticion;
		$this->_js = array();
		$this->_acl = $_acl;
		$this->_rutas = array();
		$this->_jsPlugin = array();
		$this->_template = DEFAULT_LAYOUT;

		$modulo = $this->_request->getModulo();
		$controlador = $this->_request->getControlador();
		if ($modulo){
			$this->_rutas['view'] = ROOT . 'modules' . DS . $modulo . DS . 'views' . DS .  $controlador . DS;
			$this->_rutas['js'] = BASE_URL . 'modules/'. $modulo . '/views/'.$controlador.'/js/';
		} else {
			$this->_rutas['view'] = ROOT . 'views' . DS .  $controlador . DS;
			$this->_rutas['js'] = BASE_URL .'views/'.$controlador.'/js/';
		}
	}

	/**
	* Método que va hacer las llamadas a las vistas
	* Es necesario que en la carpeta views, se cree una carpeta con el mismo nombre del controlador,  y ahí incluirse los archivos para cada funcionalidad
	* @param $vista nombre del archivo a renderizar
	* @param $item item del enlace, para dejarlo seleccionado
	*/
	public function renderizar($vista, $item = false, $noLayout = false){

		# Definimos el directorio del template
		$this->template_dir = ROOT . 'views' . DS . 'layout' . DS . $this->_template . DS ;
		#Definimos el directorio de configuraciones, para guardar los archivos de configuración de las plantillas
		$this->config_dir = ROOT . 'views' . DS . 'layout' . DS . $this->_template . DS . 'configs' . DS;
		# Definimos los directorio temporales
		$this->cache_dir = ROOT . 'tmp' . DS . 'cache' . DS;
		$this->compile_dir = ROOT . 'tmp' . DS . 'template' . DS;


		$rutaView = $this->_rutas['view'] . $vista . '.tpl';

		if (is_readable($rutaView)){

			# LLamar vistas sin la presencia del layout
			if ($noLayout){
				$this->template_dir = $this->_rutas['view'];
				$this->display($this->_rutas['view'] . $vista . '.tpl');
				exit;
			}

			$menu = array(
				array(
					'id' => 'index',
					'titulo' => 'Inicio',
					'enlace' => BASE_URL,
				),
				array(
					'id' => 'post',
					'titulo' => 'Post',
					'enlace' => BASE_URL . 'post',
				),
				array(
					'id' => 'acl',
					'titulo' => 'Listas de Acceso',
					'enlace' => BASE_URL . 'acl'
				),
				array(
					'id' => 'usuarios',
					'titulo' => 'Permisos de Usuarios',
					'enlace' => BASE_URL . 'usuarios'
				)

			);

			if (Session::get('autenticado')){
				
			} else {
				$menu[] = array(
					'id' => 'registro',
					'titulo' => 'Registro',
					'enlace' => BASE_URL . 'usuarios/registro'
					);
			}

			# Menú lateral
			$menuLateral = array(
				array(
					'id' => 'ajax',
					'titulo' => 'Ajax',
					'enlace' => BASE_URL . 'ajax',
				),
				array(
					'id' => 'pdf',
					'titulo' => 'Ejemplo de PDF',
					'enlace' => BASE_URL . 'pdf',
				),
				array(
					'id' => 'paginacion',
					'titulo' => 'Paginación de Registros',
					'enlace' => BASE_URL . 'paginacion',
				),
				array(
					'id' => 'paginacion_ajax',
					'titulo' => 'Paginación de Registros con AJAX',
					'enlace' => BASE_URL . 'paginacion/ajax',
				)
			);

			$js = array();

			if (count($this->_js)){
				$js = $this->_js;
			}

			$_layoutParams = array(
				'ruta_css' => BASE_URL . 'views/layout/'. $this->_template . '/css/',
				'ruta_img' => BASE_URL . 'views/layout/'. $this->_template . '/img/',
				'ruta_js' => BASE_URL . 'views/layout/'. $this->_template . '/js/',
				'menu' => $menu,
				'menuLateral' => $menuLateral,
				'item' => $item,
				'js' => $js,
				'js_plugin' => $this->_jsPlugin,
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
			# Le pasamos la lista de control de acceso
			$this->assign('_acl', $this->_acl);
			# LLamamos el template
			$this->display('template.tpl');
		} else {
			throw new Exception("No se encontró la vista $vista");
		}

	}


	public function setJs(array $js){
		if (is_array($js) && count($js)){
			for ($i = 0; $i < count($js); $i++){
				$this->_js[] = $this->_rutas['js'] . $js[$i] . '.js'; 
			}
		} else {
			throw new Exception("Error al cargar JS en $this->_controlador");
		}
	}

	public function setJsPlugin(array $js){
		if (is_array($js) && count($js)){
			for ($i = 0; $i < count($js); $i++){
				$this->_jsPlugin[] = BASE_URL . 'public/js/'. $js[$i] . '.js';
			}
		} else {
			throw new Exception("Error de Plugin de Javascript");
			
		}
	}

	/**
	* Método para cambiar de template desde los controladores
	*/
	public function setTemplate($template){
		$this->_template = (string) $template;
	}

	/**
	* Método que llama Widget
	*/
	public function widget($widget, $method, $options = array() ){
		if (!is_array($options)){
			$options = array($options);
		}

		$rutaWidget = ROOT . 'widgets' . DS . $widget .  '.php';

		if (is_readable($rutaWidget)){
			include_once $rutaWidget;

			$widgetClass = $widget . 'Widget';
			if (!class_exists($widgetClass)){
				throw new Exception("No se encontró el Widget " . $widget);
			}

			// Verifica si exite el método en la clase wigdet
			if (is_callable($widgetClass, $method)){
				if (count($options)){
					return call_user_func_array(array(new $widgetClass, $method), $options);
				} else {
					return call_user_func(array(new $widgetClass, $method));
				}
			}
			throw new Exception("Error de método widget ". $widget);
			
		}

		throw new Exception("Error de Widget " . $widget);
		
	}

}

?>