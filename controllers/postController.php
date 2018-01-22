<?php 

class postController extends Controller {

	private $_post;

	# Inicializamos para tener disponible el objeto View
	public function __construct(){
		parent::__construct();
		# Cargar el Modelo
		$this->_post = $this->loadModel('post');
	}

	public function index(){
		# Agregar los datos del modelo en la variable posts
		$this->_view->posts = $this->_post->getPosts();
		$this->_view->titulo = 'Post';
		$this->_view->renderizar('index', 'post');
	}

	public function nuevo(){
		$this->_view->titulo = 'Nuevo Post';
		$this->_view->setJs(array('nuevo'));

		if ($this->getInt('guardar') == 1){

			$this->_view->datos = $_POST;

			if (!$this->getTexto('titulo')){
				$this->_view->_error = 'Debes introducir el título del post';
				$this->_view->renderizar('nuevo', 'post');
				exit;
			}
			if (!$this->getTexto('cuerpo')){
				$this->_view->_error = 'Debes introducir el cuerpo del post';
				$this->_view->renderizar('nuevo', 'post');
				exit;
			}
			$this->_post->insertar(
				$this->getPostParam('titulo'), 
				$this->getPostParam('cuerpo')
			);
			# Redireccionar al usuario
			$this->redirect('post');
		}
		$this->_view->renderizar('nuevo', 'post');
	}

	/**
	* Función para editar post
	*/
	public function editar($id){

		# Verificamos si es un entero
		if (!$this->filtrarInt($id)){
			$this->redirect('post');
		}

		# Hacemos la consulta del post a la base de datos
		$post = $this->_post->getPost($this->filtrarInt($id));

		# Verificamos que el post exista en la base de datos
		if (! $post) {
			$this->redirect('post');
		}

		$this->_view->titulo = 'Editar Post';
		$this->_view->setJs(array('nuevo'));

		if ($this->getInt('guardar') == 1){

			$this->_view->datos = $_POST;

			if (!$this->getTexto('titulo')){
				$this->_view->_error = 'Debes introducir el título del post';
				$this->_view->renderizar('editar', 'post');
				exit;
			}
			if (!$this->getTexto('cuerpo')){
				$this->_view->_error = 'Debes introducir el cuerpo del post';
				$this->_view->renderizar('editar', 'post');
				exit;
			}
			$this->_post->editarPost(
				$this->filtrarInt($id),
				$this->getPostParam('titulo'),
				$this->getPostParam('cuerpo')
			);
			# Redireccionar al usuario
			$this->redirect('post');
		}

		$this->_view->datos = $post;
		$this->_view->renderizar('editar', 'post');

	}

	/**
	* Método para eliminar post
	*/
	public function eliminar($id){
		# Verificamos si es un entero
		if (!$this->filtrarInt($id)){
			$this->redirect('post');
		}

		$post = $this->_post->getPost($this->filtrarInt($id));

		# Verificamos que el post exista en la base de datos
		if (! $post) {
			$this->redirect('post');
		}

		$this->_post->eliminarPost($this->filtrarInt($id));
		$this->redirect('post');
	}

}

?>