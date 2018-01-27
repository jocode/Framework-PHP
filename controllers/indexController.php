<?php 


class indexController extends Controller {

	// Inicializamos el método constructor de la clase padre, para tener disponible el objeto view
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$post = $this->loadModel('post');

		# Para pasar parámetros a las vistas con Smarty, usamos el método assign
		$this->_view->assign('titulo', 'Portada');
		$this->_view->renderizar('index');
	}

}

?>