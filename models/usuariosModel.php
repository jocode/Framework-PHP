<?php 

class usuariosModel extends Model {

	public function __construct(){
		parent::__construct();
	}

	public function getUsuarios(){
		$usuarios = $this->_db->query(
			"SELECT usuario.*, rol.`role` FROM usuario INNER JOIN rol ON usuario.`role`=rol.`id_role`
			"
		);
		return $usuarios->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getUsuario($id){
		$usuarios = $this->_db->query(
			"SELECT usuario.*, rol.`role` FROM usuario INNER JOIN rol ON usuario.`role`=rol.`id_role` WHERE id = '$id'"
		);
		return $usuarios->fetch(PDO::FETCH_ASSOC);
	}

	public function getPermisosUsuario($id_usuario){
		$acl = new ACL($id_usuario);
		return $acl->getPermisos();
	}

	/**
	* Consultará los permisos del rol, asignados a ese usuario
	*/
	public function getPermisosRole($usuario_id){
		$acl = new ACL($usuario_id);
		return $acl->getPermisosRole();
	}

	public function eliminarPermiso($usuario_id, $id_permiso){
		$this->_db->query(
			"DELETE FROM permiso_usuario WHERE usuario = '$usuario_id' AND permiso = '$id_permiso'"
		);
	}

	public function editarPermiso($usuario_id, $id_permiso, $valor){
		$this->_db->query(
			"REPLACE INTO permiso_usuario SET usuario = '$usuario_id', permiso = '$id_permiso', valor = '$valor'"
		);
	}
}

?>