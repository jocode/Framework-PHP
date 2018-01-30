<?php 

/**
* De esta Clase Model, es de donde van a extender todos los modelos
*/
class Model {

	protected $_db;

	public function __construct(){
		try {
			// Creamos la instancia de la clase Database
			$this->_db = new Database();
		} catch (PDOException $e){
			echo $e->getMessage();
		}
	}

}

?>