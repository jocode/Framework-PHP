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
				"SELECT id, codigo FROM usuario WHERE usuario = '$usuario'"
			);

		return $id->fetch();		
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

		# La función rand() genero un número aleatorio entre los números min y max pasados por parámetro
		$random = rand(000000000, 999999999);

		$this->_db->prepare(
			"INSERT INTO usuario VALUES (null, :nombre, :usuario, :pass, :email, now(), :codigo, '".USER_DEFAULT."', 0)"
			)
			->execute(array(
				':nombre' => $nombre,
				':usuario' => $usuario,
				':pass' => Hash::getHast('sha1', $password, HASH_KEY),
				':email' => $email,
				':codigo' => $random,
			));
	}

	/**
	* Nos devuelve la información del usuario, cuando se consulte po id y código de usuario. Se va utilizar para la validación en la activación de la cuenta
	*/
	public function getUsuario($id, $codigo){
		$usuario = $this->_db->query(
				"SELECT * FROM usuario WHERE id = $id and codigo = '$codigo'"
			);
		return $usuario->fetch();
	}

	/**
	* Método para activar Usuario
	*/
	public function activarUsuario($id, $codigo){
		$this->_db->query(
				"UPDATE usuario SET estado = 1 WHERE id = $id and codigo = '$codigo'"
			);
	}

} 

?>