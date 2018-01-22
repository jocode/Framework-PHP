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

	# Este método guardará los post en la base de datos
	public function insertar($titulo, $cuerpo){
		$this->_db->prepare("INSERT INTO post VALUES (null, :titulo, :cuerpo)")
			->execute(
				array(
					':titulo' => $titulo,
					':cuerpo' => $cuerpo
				)
			);
	}

}

?>