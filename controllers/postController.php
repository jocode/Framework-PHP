<?php 

class postController extends Controller {

	private $_post;

	# Inicializamos para tener disponible el objeto View
	public function __construct(){
		parent::__construct();
		# Cargar el Modelo
		$this->_post = $this->loadModel('post');
	}

	public function index($pagina = false){

		# Agregar los datos del modelo en la variable posts
		$this->getLibrary('Paginador'.DS.'Paginador');
		$paginador = new Paginador();
		$this->_view->assign('posts', $paginador->paginar($this->_post->getPosts(), $pagina));
		$this->_view->assign('paginacion', $paginador->getView('prueba', 'post/index'));
		$this->_view->assign('titulo', 'Post');
		$this->_view->renderizar('index', 'post');
	}

	public function nuevo(){
		$this->_view->assign('titulo', 'Nuevo Post');
		$this->_view->setJs(array('nuevo'));

		if ($this->getInt('guardar') == 1){

			$this->_view->assign('datos', $_POST);

			if (!$this->getTexto('titulo')){
				$this->_view->assign('_error','Debes introducir el título del post');
				$this->_view->renderizar('nuevo', 'post');
				exit;
			}
			if (!$this->getTexto('cuerpo')){
				$this->_view->assign('_error', 'Debes introducir el cuerpo del post');
				$this->_view->renderizar('nuevo', 'post');
				exit;
			}

			$imagen = '';
			if (isset($_FILES['imagen']['name'])){
				$this->getLibrary('upload' . DS . 'class.upload');
				$ruta = ROOT . 'public' . DS . 'img' . DS . 'POST' . DS;
				$upload = new upload($_FILES['imagen'], 'es_ES');
				$upload->allowed = array('image/*'); # Acepta todo tipo de imagenes
				$upload->file_new_name_body = 'upl_' . uniqid();
				$upload->process($ruta);

				if ($upload->processed){
					$imagen = $upload->file_dst_name;
					$thumb = new upload($upload->file_dst_pathname);
					$thumb->image_resize = true; # Habilita la redimensión
					$thumb->image_x = 100;
					$thumb->image_y = 70;
					# Agrega el prefijo en la imagen de miniatura
					$thumb->file_name_body_pre = 'thumb_';
					$thumb->process($ruta . 'thumb' . DS);
				} else {
					$this->_view->assign('_error', $upload->error);
					$this->_view->renderizar('nuevo', 'post');
					exit;
				}
			}

			$this->_post->insertar(
				$this->getPostParam('titulo'), 
				$this->getPostParam('cuerpo'),
				$imagen
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

		$this->_view->assign('titulo', 'Editar Post');
		$this->_view->setJs(array('nuevo'));

		if ($this->getInt('guardar') == 1){

			$this->_view->assign('datos', $_POST);

			if (!$this->getTexto('titulo')){
				$this->_view->assign('_error', 'Debes introducir el título del post');
				$this->_view->renderizar('editar', 'post');
				exit;
			}
			if (!$this->getTexto('cuerpo')){
				$this->_view->assign('_error', 'Debes introducir el cuerpo del post');
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

		$this->_view->assign('datos', $post);
		$this->_view->renderizar('editar', 'post');

	}

	/**
	* Método para eliminar post
	*/
	public function eliminar($id){
		$this->_acl->acceso('eliminar_post');
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

	public function prueba($pagina = false){
		if (!$this->filtrarInt($pagina)){
			$paginacion = false;
		} else {
			$pagina = (int) $pagina;
		}

		$this->getLibrary('Paginador'.DS.'Paginador');
		$paginador = new Paginador();
		$this->_view->assign('posts', $paginador->paginar($this->_post->getPosts(), $pagina));
		$this->_view->assign('paginacion', $paginador->getView('prueba', 'post/prueba'));
		$this->_view->assign('titulo', 'Post');
		$this->_view->renderizar('index', 'prueba');
	}

}

?>