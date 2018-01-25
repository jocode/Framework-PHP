<?php 

class loginController extends Controller {

	private $_login;

	public function __construct(){
		parent::__construct();
		$this->_login = $this->loadModel('login');
	}

	public function index(){

		if (Session::get('autenticado')) 
			$this->redirect();

		$this->_view->titulo ='Iniciar Sesión';

		if ($this->getInt('enviar') == 1 ){

			$this->_view->datos = $_POST;

			if (!$this->getAlphaNum('usuario')){
				$this->_view->_error = 'Debe introducir su nombre de usuario';
				$this->_view->renderizar('index', 'login');
				exit;
			}

			if (!$_POST['pass']){
				$this->_view->_error = 'Debe introducir su password';
				$this->_view->renderizar('index', 'login');
				exit;
			}

			$row = $this->_login->getUsuario(
						$this->getAlphaNum('usuario'),
						$_POST['pass']
					);

			if (!$row){
				$this->_view->_error = 'Usuario y/o password incorrectos';
				$this->_view->renderizar('index', 'login');
				exit;
			}

			if ($row['estado'] != 1){
				$this->_view->_error = 'Este usuario no está habilitado';
				$this->_view->renderizar('index', 'login');
				exit;
			}

			Session::set('autenticado', true);
			Session::set('level', $row['role']);
			Session::set('usuario', $row['usuario']);
			Session::set('id_usuario', $row['id']);
			Session::set('time', time());

			$this->redirect();

		}

		$this->_view->renderizar('index', 'login');
	}

	public function cerrar(){
		Session::destroy();
		$this->redirect();
	}

}

?>