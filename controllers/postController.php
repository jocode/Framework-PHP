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
				$this->getTexto('titulo'), 
				$this->getTexto('cuerpo')
			);
			# Redireccionar al usuario
			$this->redirect('post');
		}
		$this->_view->renderizar('nuevo', 'post');
	}

}

?>