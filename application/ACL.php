<?php 

class ACL {

	private $_db;
	private $_id;
	private $_role;
	private $_permisos;

	public function __construct($id = false){
		if ($id){
			$this->_id = (int) $id;
		} else {
			if (Session::get('id_usuario')){
				$this->_id = Session::get('id_usuario');
			} else {
				$this->_id = 0;
			}
		}

		try {
			// Creamos la instancia de la clase Database
			$this->_db = new Database();
		} catch (PDOException $e){
			echo $e->getMessage();
		}
		$this->_role = $this->_getRole();
		$this->_permisos = $this->getPermisosRole();
		$this->_compilarAcl();
	}

	/**
	* Este método va a combinar los arreglos de los permisos del rol con los permisos de usuario.
	* Todas las claves del arreglo del rol, que también estén contenidas en el arreglo de permisos, las reemplazará en el arreglo final
	*/
	private function _compilarAcl(){
		$this->_permisos = array_merge(
			$this->_permisos, # Permisos del rol
			$this->_getPermisosUsuario()
		);
	}

	/**
	* Consulta el rol por el id del usuario
	*/
	private function _getRole(){
		$role = $this->_db->query(
			"SELECT role FROM usuario WHERE id = '$this->_id'"
		);

		$role = $role->fetch();
		return $role['role'];
	}

	/**
	* Devuelve todos los permisos que estén asignados al rol
	*/
	private function _getPermisosRoleId(){
		$permisos = $this->_db->query(
			"SELECT permiso FROM permiso_rol WHERE rol='$this->_role'"
		);

		$permiso = array();
		while ($registro = $permisos->fetch(PDO::FETCH_ASSOC)){
			$permiso[] = $registro['permiso'];
		}

		return $permiso;
	}

	/**
	* Nos devolverá los permisos del rol, ya procesados
	*/
	public function getPermisosRole(){
		$permisos = $this->_db->query(
			"SELECT * FROM permiso_rol WHERE rol='$this->_role'"
		);

		$data = array();
		
		while ($permiso = $permisos->fetch(PDO::FETCH_ASSOC)){
			$key =  $this->_getPermisoKey($permiso['permiso']);
			if ($key == ''){ continue;}
			if ($permiso['valor'] == 1){
				$valor = true;
			} else {
				$valor = false;
			}
			$data[$key] = array(
				'key'=> $key,
				'permiso' => $this->_getPermisoNombre($permiso['permiso']),
				'valor'=> $valor, 
				'heredado'=>true,  
				'id'=>$permiso['permiso']
			);
		}

		return $data;
	}

	/**
	* Obtiene la llave del permiso que se consulte por id de permiso
	*/
	private function _getPermisoKey($id_permiso){
		$id_permiso = (int) $id_permiso;
		$key = $this->_db->query(
			"SELECT `key` FROM permiso WHERE id_permiso = '$id_permiso'"
		);

		$key = $key->fetch();
		return $key['key'];
	}

	/**
	* Obtiene el nombre del permiso, consultando por id de permiso
	*/
	private function _getPermisoNombre($id_permiso){
		$id_permiso = (int) $id_permiso;
		$permiso = $this->_db->query(
			"SELECT permiso FROM permiso WHERE id_permiso = '$id_permiso'"
		);

		$permiso = $permiso->fetch();
		return $permiso['permiso'];
	}

	/**
	* Método que consulta los permisos de los usuarios
	*/
	private function _getPermisosUsuario(){
		$permisos_rol = $this->_getPermisosRoleId();
		$permisos = $this->_db->query(
			"SELECT * FROM permiso_usuario WHERE usuario = '$this->_id' AND permiso IN (".implode(',', $permisos_rol).")"
		);

		$data = array();
		if ($permisos){
			while ($permiso = $permisos->fetch(PDO::FETCH_ASSOC)){
			$key = $this->_getPermisoKey($permiso['permiso']);
			if ($key == ''){ continue;}
			if ($permiso['valor'] == 1){
				$valor = true;
			} else {
				$valor = false;
			}
			$data[$key] = array(
				'key'=> $key,
				'permiso' => $this->_getPermisoNombre($permiso['permiso']),
				'valor'=> $valor, 
				'heredado'=>false,  
				'id'=>$permiso['permiso']
			);
		}
		}

		return $data;
	}

	/**
	* Devuelve los permisos del usuario
	*/
	public function getPermisos(){
		if (isset($this->_permisos) and count($this->_permisos)){
			return $this->_permisos;
		}
	}

	/**
	* Este método se puede usar en la vistas, donde verificamos si un usuario tiene permiso para realizar una determinada acción
	*/
	public function permiso($key){
		if (array_key_exists($key, $this->_permisos)){
			if ($this->_permisos[$key]['valor'] == true){
				return true;
			}
		}
		return false;
	}

	/**
	* Este método se usará en los controladores, donde le pasamos el key del permiso, y nos consultará si está habilitado para ese usuario
	*/
	public function acceso($key, $error_code = false){

		if ($this->permiso($key)){
			// Para definir el tiempo de la sesión agregamos la siguiente línea
			# Session::tiempo();
			return;
		}
		header('Location: '. BASE_URL . 'error/access/5050');
		exit;
	}
}

?>