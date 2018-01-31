<?php 

class aclModel extends Model {

	public function __construct(){
		parent::__construct();
	}

	public function getRole($id){
		$role = $this->_db->query(
				"SELECT * FROM rol WHERE id_role='$id'"
			);
		return $role->fetch();
	}

	public function getRoles(){
		$roles = $this->_db->query(
				"SELECT * FROM rol"
			);
		return $roles->fetchAll();
	}

	public function getPermisos(){
		$permisos = $this->_db->query(
				"SELECT * FROM permiso"
			);

		$data = array();
		while ($permiso = $permisos->fetch(PDO::FETCH_ASSOC)){
			if ($permiso['key'] == ''){continue;}
			$data[$permiso['key']] = array(
				'key' => $permiso['key'],
				'valor' => 'x',
				'nombre' => $permiso['permiso'],
				'id' => $permiso['id_permiso']
			);
		}
		return $data;
	}

	public function getPermisoId($id_permiso){
		$permiso = $this->_db->query(
				"SELECT * FROM permiso WHERE id_permiso='$id_permiso'"
			);

		return $permiso->fetch(PDO::FETCH_ASSOC);
	}

	public function getPermisosRole($rol_id){
		$permisos = $this->_db->query(
				"SELECT * FROM permiso_rol WHERE rol = '$rol_id'"
			);

		$data = array();
		while ($permiso = $permisos->fetch(PDO::FETCH_ASSOC)){
			$key = $this->getPermisoKey($permiso['permiso']);
			if ($key == ''){continue;}
			if ($permiso['valor'] == 1 ){
			 $valor = 1;
			} else {
				$valor = 0;
			}
			$data[$key] = array(
				'key' => $key,
				'valor' => $valor,
				'nombre' => $this->getPermisoNombre($permiso['permiso']),
				'id' => $permiso['permiso']
			);
		}
		# El array merge, reemplazará los datos por identificador, donde consultamos los permisos, y si no están definidos, se reemplazará por los permisos del rol
		$data = array_merge(
			$this->getPermisos(), $data
		);
		return $data;

	}

	public function elimininarPermisoRole($rol_id, $permiso_id){
		$this->_db->query(
			"DELETE FROM permiso_rol WHERE rol='$rol_id' AND permiso='$permiso_id' "
		);
	}

	public function editarPermisoRole($rol_id, $permiso_id, $valor){
		$this->_db->query(
			"REPLACE INTO permiso_rol SET rol='$rol_id', permiso='$permiso_id', valor='$valor' "
		);
	}

	public function getPermisoNombre($id_permiso){
		$id_permiso = (int) $id_permiso;
		$permiso = $this->_db->query(
			"SELECT permiso FROM permiso WHERE id_permiso = '$id_permiso'"
		);

		$permiso = $permiso->fetch();
		return $permiso['permiso'];
	}

	public function getPermisoKey($id_permiso){
		$id_permiso = (int) $id_permiso;
		$key = $this->_db->query(
			"SELECT `key` FROM permiso WHERE id_permiso = '$id_permiso'"
		);

		$key = $key->fetch();
		return $key['key'];
	}

	public function addRole($role){
		$this->_db->query("
			INSERT INTO rol VALUES (null, '$role')
		");
	}

	public function updateRole($id, $role){
		$this->_db->query("
			UPDATE rol SET role = '$role' WHERE id_role = '$id'
		");
	}

	public function guardarPermiso($permiso, $key){
		$this->_db->query("
			INSERT INTO permiso VALUES (null, '$permiso', '$key')
		");
	}

	public function editarPermiso($id, $permiso, $key){
		$this->_db->query("
			UPDATE permiso SET permiso = '$permiso', `key` = '$key' WHERE id_permiso = '$id'
		");
	}

	public function eliminarPermiso($id){
		$this->_db->query("
			DELETE FROM permiso WHERE id_permiso = '$id'
		");
	}

}

?>