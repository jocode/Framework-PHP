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

	# Este método nos va a devolver un post, solicitado por el id
	public function getPost($id){
		$id = (int) $id; # Estamos haciendo un Parse, una conversión de tipo de dato, para convertirlo a entero
		$post = $this->_db->query("SELECT * FROM post WHERE id = $id");
		return $post->fetch();
	}

	public function editarPost($id, $titulo, $cuerpo){
		$id = (int) $id;
		$this->_db->prepare("UPDATE post SET 
			titulo = :titulo,
			cuerpo = :cuerpo
			WHERE id = :id
			")->execute(
				array(
					':id' => $id,
					':titulo' => $titulo,
					':cuerpo' => $cuerpo
				)
			);
	}

	public function eliminarPost($id){
		$id = (int) $id;
		$this->_db->query("DELETE FROM post WHERE id = $id");
	}

}

?>