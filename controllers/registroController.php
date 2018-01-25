<?php 

class registroController extends Controller {

	private $_registro;

	public function __construct(){
		parent::__construct();
		$this->_registro = $this->loadModel('registro');
	}

	public function index(){
		# Si el usuario está logueado, no puede entrar al registro de usuario
		if (Session::get('autenticado')){
			$this->redirect();
		}

		$this->_view->titulo = 'Registro';

		if ($this->getInt('enviar')==1){
			$this->_view->datos = $_POST;

			if (!$_POST['nombre']){
				$this->_view->_error = 'Debe introducir su nombre';
				$this->_view->renderizar('index', 'registro');
				exit;
			}

			if (!$this->getAlphaNum('usuario')){
				$this->_view->_error = 'Debe introducir su Usuario';
				$this->_view->renderizar('index', 'registro');
				exit;
			}

			if ($this->_registro->verificarUsuario($this->getAlphaNum('usuario'))){
				$this->_view->_error = 'El usuario '.$this->getAlphaNum('usuario'). ' ya existe';
				$this->_view->renderizar('index', 'registro');
				exit;
			}

			if ($this->_registro->verificarEmail($this->getPostParam('email'))){
				$this->_view->_error = 'El email ya está registrado.';
				$this->_view->renderizar('index', 'registro');
				exit;
			}

			if (!$this->validarEmail($this->getPostParam('email'))){
				$this->_view->_error = 'La dirección de email es inválida';
				$this->_view->renderizar('index', 'registro');
				exit;
			}

			if (!$this->getPostParam('pass')){
				$this->_view->_error = 'Debe introducir la contraseña.';
				$this->_view->renderizar('index', 'registro');
				exit;
			}

			if ($this->getPostParam('pass') != $this->getPostParam('confirmar')){
				$this->_view->_error = 'Las contraseñas no coinciden.';
				$this->_view->renderizar('index', 'registro');
				exit;
			}

			$this->_registro->registrarUsuario(
				$this->getPostParam('nombre'),  
				$this->getAlphaNum('usuario'), 
				$this->getPostParam('pass'), 
				$this->getPostParam('email')
			);

			if (!$this->_registro->verificarUsuario($this->getAlphaNum('usuario'))){
				$this->_view->_error = 'Error al registrar el usuario.';
				$this->_view->renderizar('index', 'registro');
				exit;
			} 

			$this->_view->datos = false;
			$this->_view->_error = 'Registro completado.';
			$this->_view->renderizar('index', 'registro');

		}

		$this->_view->renderizar('index', 'registro');
	}

}

?>