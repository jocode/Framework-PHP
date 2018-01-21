<?php 

/**
*  Todos los modelos deben estender de la clase Model
*/
class postModel extends Model {
	
	// Creamos el constructor para inicializar la instancia de la clase Database
	public function __construct(){
		parent::__construct();
	}

	public function getPosts(){
		$post = $this->_db->query("SELECT * FROM post");
		return $post->fetchAll();
	}

}

?>