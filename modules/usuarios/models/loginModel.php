<?php 

class loginModel extends Model {

	public function __construct(){
		parent::__construct();
	}

	public function getUsuario($usuario, $password){
		$datos = $this->_db->query(
							"SELECT * FROM usuario
							WHERE usuario = '$usuario'
							and pass = '" . Hash::getHast('sha1', $password, HASH_KEY) . "'"
						);
		return $datos->fetch();
	}

}

?>