<?php 

class paginacionController extends Controller {

	private $_paginacionModel;

	// Inicializamos el método constructor de la clase padre, para tener disponible el objeto view
	public function __construct(){
		parent::__construct();
		$this->_paginacionModel = $this->loadModel('paginacion');
	}

	public function index($pagina = false){
		# Para pasar parámetros a las vistas con Smarty, usamos el método assign
		$this->_view->assign('titulo', 'Paginación');
		$datos = $this->_paginacionModel->getDatos();

		# Cargar la librería del Paginador
		$this->getLibrary('Paginador'.DS.'paginador');
		#Instanciar la librería
		$paginador = new Paginador();
		# Le pasamos los datos y la página actual al método paginar
		$this->_view->assign('datos', $paginador->paginar($datos, $pagina, 5, 5));
		$this->_view->assign('paginacion', $paginador->getView('prueba', 'paginacion/index'));
		$this->_view->renderizar('index', 'paginacion');
	}

	public function prueba($pagina = false){

		$this->_view->assign('titulo', 'Paginación');
		$datos = $this->_paginacionModel->getDatos();
		$this->_view->setJs(array('ajax'));

		# Cargar la librería del Paginador
		$this->getLibrary('Paginador'.DS.'paginador');
		$paginador = new Paginador();
		# Le pasamos los datos y la página actual al método paginar
		$this->_view->assign('datos', $paginador->paginar($datos, $pagina, 5, 5));
		$this->_view->assign('paginacion', $paginador->getView('paginacion_ajax', 'paginacion/prueba'));
		$this->_view->renderizar('index', 'paginacion');
	}

	public function pruebaAjax(){
		$pagina = $this->getInt('pagina');
		$this->_view->setJs(array('ajax'));
		$datos = $this->_paginacionModel->getDatos();
		# Cargar la librería del Paginador
		$this->getLibrary('Paginador'.DS.'paginador');
		$paginador = new Paginador();
		$this->_view->assign('datos', $paginador->paginar($datos, $pagina, 5, 5));
		$this->_view->assign('paginacion', $paginador->getView('paginacion_ajax'));
		$this->_view->renderizar('ajax/ajax', false, true);
	}

}

?>