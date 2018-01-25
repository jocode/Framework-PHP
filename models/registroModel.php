<?php 

class registroModel extends Model {

	public function __construct(){
		parent::__construct();
	}

	public function index(){

	}

	/**
	* Verifica si ya existe un registro con ese usuario
	*/
	public function verificarUsuario($usuario){
		$id = $this->_db->query(
				"SELECT id FROM usuario WHERE usuario = '$usuario'"
			);

		if ($id->fetch()){
			return true;
		}
		return false;
	}

	/**
	* Verifica en la base de datos si ya hay un usuario registrado con ese correo
	*/
	public function verificarEmail($email){
		$id = $this->_db->query(
				"SELECT id FROM usuario WHERE email = '$email'"
			);

		if ($id->fetch()){
			return true;
		}
		return false;
	}

	public function registrarUsuario($nombre, $usuario, $password, $email){
		$this->_db->prepare(
			"INSERT INTO usuario VALUES (null, :nombre, :usuario, :pass, :email, now(), '".USER_DEFAULT."', 1)"
			)
			->execute(array(
				':nombre' => $nombre,
				':usuario' => $usuario,
				':pass' => Hash::getHast('sha1', $password, HASH_KEY),
				':email' => $email
			));
	}

} 

?>