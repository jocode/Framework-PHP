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
		$this->getLibrary('Paginador'.DS.'Paginador');
		#Instanciar la librería
		$paginador = new Paginador();
		# Le pasamos los datos y la página actual al método paginar
		$this->_view->assign('datos', $paginador->paginar($datos, $pagina, 5, 5));
		$this->_view->assign('paginacion', $paginador->getView('prueba', 'paginacion/index'));
		$this->_view->renderizar('index', 'paginacion');
	}

	public function ajax($pagina = false){

		$this->_view->assign('titulo', 'Paginación');
		$datos = $this->_paginacionModel->getDatos();
		$this->_view->setJs(array('ajax'));

		# Cargar la librería del Paginador
		$this->getLibrary('Paginador'.DS.'Paginador');
		$paginador = new Paginador();
		# Le pasamos los datos y la página actual al método paginar
		$this->_view->assign('datos', $paginador->paginar($datos, $pagina));
		$this->_view->assign('paises', $this->_paginacionModel->getPaises());
		$this->_view->assign('paginacion', $paginador->getView('paginacion_ajax', 'paginacion/prueba'));
		$this->_view->renderizar('index', 'paginacion_ajax');
	}

	public function pruebaAjax(){
		$pagina = $this->getInt('pagina');
		$nombre = $this->getTexto('nombre');
		$pais = $this->getInt('pais');
		$ciudad = $this->getInt('ciudad');
		$registros = $this->getInt('registros');

		$condicion = 'WHERE ';
		$condicion.= "nombre LIKE '%$nombre%' ";
		if ($pais){
			$condicion.= "AND prueba.id_pais = $pais ";
		}
		if ($ciudad){
			$condicion.= "AND prueba.id_ciudad = $ciudad";
		}
		

		$this->_view->setJs(array('ajax'));
		$datos = $this->_paginacionModel->getDatos($condicion);
		# Cargar la librería del Paginador
		$this->getLibrary('Paginador'.DS.'Paginador');
		$paginador = new Paginador();
		$this->_view->assign('datos', $paginador->paginar($datos, $pagina, $registros));
		$this->_view->assign('paginacion', $paginador->getView('paginacion_ajax'));
		$this->_view->renderizar('ajax/ajax', false, true);
	}

}

?>