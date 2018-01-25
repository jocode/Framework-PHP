<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$rutaLibs = ROOT . 'libs' . DS ;

require $rutaLibs.'PHPMailer'.DS.'src'.DS.'Exception.php';
require $rutaLibs.'PHPMailer'.DS.'src'.DS.'PHPMailer.php';
require $rutaLibs.'PHPMailer'.DS.'src'.DS.'SMTP.php';

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

			
			# Registrar el Usuario
			$this->_registro->registrarUsuario(
				$this->getPostParam('nombre'),  
				$this->getAlphaNum('usuario'), 
				$this->getPostParam('pass'), 
				$this->getPostParam('email')
			);

			$usuario = $this->_registro->verificarUsuario($this->getAlphaNum('usuario'));

			if (!$usuario){
				$this->_view->_error = 'Error al registrar el usuario.';
				$this->_view->renderizar('index', 'registro');
				exit;
			} 

			try {
			#Importamos la librería del correo
				$mail = new PHPMailer(true);
			# Destinatarios
				$mail->From = 'jocode@github.com';
				$mail->FromName = 'Tutorial MVC';
				$mail->Subject = 'Activación de Cuenta de Usuario';
				$mail->Body = 'Hola <strong>'.$this->getPostParam('usuario').'</strong>, <p>Se ha registrado en el Framework. Para activar 
				su cuenta haga clic sobre el siguiente enlace: <br/>
				<a href="'. BASE_URL.'/registro/activar/'. $usuario['id'].'/'. $usuario['codigo'].'">Registrar Cuenta</a>
				</p>';
				$mail->CharSet = 'utf-8';
				$mail->AltBody = 'Su servidor de Correo, no soporta HTML';
				$mail->addAddress($this->getPostParam('email'));
				$mail->send();
			} catch (Exception $e) {
				echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
			}

			$this->_view->datos = false;
			$this->_view->_error = 'Registro completado, revise su email para activar su cuenta.';

		}

		$this->_view->renderizar('index', 'registro');
	}

	/**
	* Método para activar la cuenta de Usuario
	*/
	public function activar($id, $codigo){

		if (!$this->filtrarInt($id) || !$this->filtrarInt($codigo)){
			$this->_view->_error = 'Esta cuenta no existe.';
			$this->_view->renderizar('activar', 'registro');
			exit;
		}

		$row = $this->_registro->getUsuario(
			$this->filtrarInt($id), 
			$this->filtrarInt($codigo)
		);

		if (!$row){
			$this->_view->_error = 'Esta cuenta no existe.';
			$this->_view->renderizar('activar', 'registro');
			exit;
		}

		# Verificamos que la cuenta ya esté activada
		if ($row['estado'] == 1){
			$this->_view->_error = 'Esta cuenta ya ha sido activada.';
			$this->_view->renderizar('activar', 'registro');
			exit;
		}

		$this->_registro->activarUsuario(
			$this->filtrarInt($id), 
			$this->filtrarInt($codigo)
		);

		$row = $this->_registro->getUsuario(
			$this->filtrarInt($id), 
			$this->filtrarInt($codigo)
		);

		if ($row['estado'] == 0){
			$this->_view->_error = 'Error al activar la cuenta, por favor intente más tarde.';
			$this->_view->renderizar('activar', 'registro');
			exit;
		}

		$this->_view->_mensaje = 'Su cuenta ha sido Activada';
		$this->_view->renderizar('activar', 'registro');

	}

}

?>