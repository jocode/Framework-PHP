<?php 

/**
* De esta Clase Model, es de donde van a extender todos los modelos
*/
class Model {

	private $_registry;
	protected $_db;

	public function __construct(){
		try {
			$this->_registry = Registry::getInstancia();
			$this->_db = $this->_registry->_db;
		} catch (PDOException $e){
			echo $e->getMessage();
		}
	}

}

?>