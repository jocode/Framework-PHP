<?php 

/**
* 
*/
class ajaxController extends Controller
{

	private $_ajax;
	
	function __construct(){
		parent::__construct();
		$this->_ajax = $this->loadModel('ajax');
	}

	public function index(){
		$this->_view->assign('titulo', 'Ejemplo de Ajax');
		$this->_view->setJs(array('ajax'));
		$this->_view->assign('paises', $this->_ajax->getPaises());
		$this->_view->renderizar('index', 'ajax');
	}

	public function getCiudades(){
		if ($this->getInt('pais'))
			echo json_encode($this->_ajax->getCiudades($this->getInt('pais')));
	}

	public function insertarCiudad(){
		if ($this->getInt('pais') && $this->getPostParam('ciudad')){
			$this->_ajax->insertarCiudad($this->getPostParam('ciudad'), $this->getInt('pais') );
		} else {
			json_encode('error');
		}
	}
}

 ?>