<?php 


class indexController extends Controller {

	// Inicializamos el método constructor de la clase padre, para tener disponible el objeto view
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->_view->titulo = 'Portada';
		$this->_view->renderizar('index');
	}

}

?>