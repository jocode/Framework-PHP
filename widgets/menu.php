<?php 

class menuWidget extends Widget {

	private $_modelo;

	public function __construct(){
		$this->_modelo = $this->loadModel('menu');
	}

	public function getMenu(){
		$data['menu'] = $this->_modelo->getMenu();
		return $this->render('menu-right', $data);
	}

	/**
	* Crearemos la configuración del widget
	*/
	public function getConfig(){
		return array(
			'position' => 'sidebar',
			'show' => 'all', # Indicamos en qué controladores mostramos el widget
			'hide' => array('index')
		);
	}

}

?>