<?php 

class loginModel extends Model {

	public function __construct(){
		parent::__construct();
	}

	public function getUsuario($usuario, $password){
		$datos = $this->_db->query(
							"SELECT * FROM usuario
							WHERE usuario = '$usuario'
							and pass = '" . md5($password) . "'"
						);
		return $datos->fetch();
	}

}

?>