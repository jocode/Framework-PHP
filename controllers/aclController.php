<?php 


class aclController extends Controller {

	private $_aclModel;

	// Inicializamos el método constructor de la clase padre, para tener disponible el objeto view
	public function __construct(){
		parent::__construct();
		$this->_aclModel = $this->loadModel('acl');
	}

	public function index(){
		# Para pasar parámetros a las vistas con Smarty, usamos el método assign
		$this->_view->assign('titulo', 'Listas de Acceso');
		$this->_view->renderizar('index');
	}

	public function roles(){
		$this->_view->assign('titulo', 'Administración de Roles');
		$this->_view->assign('roles', $this->_aclModel->getRoles());
		$this->_view->renderizar('roles');
	}

	/**
	* Este método gestiona los permisos asignados a los roles.
	* Habilitado: El permiso está habilitado al rol
	* Denegado: El permiso está denegado
	* Ignorar: Este permiso no pertenece al rol
	*/
	public function permisos_role($rol_id){
		$id = $this->filtrarInt($rol_id);

		if (!$id){
			$this->redirect('acl/roles');
		}

		$row = $this->_aclModel->getRole($id);

		if (!$row){
			$this->redirect('acl/roles');
		}

		$this->_view->assign('titulo', 'Administración de Permisos de Rol');

		if ($this->getInt('guardar') == 1){
			$values = array_keys($_POST);
			$replace = array();
			$eliminar = array();

			for ($i = 0; $i < count($values); $i++){

				if (substr($values[$i], 0, 5) == 'perm_'){

					$permiso = (strlen($values[$i]) - 5);

					if ($_POST[$values[$i]] == 'x'){
						$eliminar[] = array(
							'role' => $id,
							'permiso' => substr($values[$i], -$permiso)
						);
					} else {
						if ($_POST[$values[$i]] == 1){
							$valor = 1;
						} else {
							$valor = 0;
						}

						$replace[] = array(
							'role' => $id,
							'permiso' => substr($values[$i], -$permiso), 
							'valor' => $valor
						);
					}
				}
			}

			for ($i = 0; $i < count($eliminar); $i++){
				$this->_aclModel->elimininarPermisoRole(
					$eliminar[$i]['role'],
					$eliminar[$i]['permiso']
				);
			}

			for ($i = 0; $i < count($replace); $i++){
				$this->_aclModel->editarPermisoRole(
					$replace[$i]['role'],
					$replace[$i]['permiso'],
					$replace[$i]['valor']
				);
			}
		}

		$this->_view->assign('rol', $row);
		$this->_view->assign('permisos', $this->_aclModel->getPermisosRole($id));
		$this->_view->renderizar('permisos_role');
	}

	public function nuevo_role(){
		$this->_view->assign('titulo', 'Agregar Rol');

		if ($this->getInt('guardar') == 1){
			if (!$this->getTexto('rol')){
				$this->_view->assign('_error', 'Debes ingresar el nombre del Rol');
				$this->_view->renderizar('acl/nuevo_role', 'nuevo_role');
				exit;
			}
			$this->_aclModel->addRole($this->getTexto('rol'));
			$this->_view->assign('_mensaje', 'Se ha guardado el rol');
			$this->redirect('acl/roles');
		}

		$this->_view->renderizar('nuevo_role', 'rol');
	}

	public function editar_role($id_role) {

		$id = $this->filtrarInt($id_role);

		if (!$id){
			$this->redirect('acl/roles');
		}

		$this->_view->assign('titulo', 'Agregar Rol');

		if ($this->getInt('guardar') == 1){

			if (!$this->getTexto('rol')){
				$this->_view->assign('_error', 'Debes ingresar el nombre del Rol');
				$this->_view->renderizar('editar_role', 'editar_role');
				exit;
			}

			$this->_aclModel->updateRole($id, $this->getTexto('rol'));

			$this->_view->assign('_mensaje', 'Se ha modificado el rol');
		}

		$role = $this->_aclModel->getRole($id_role);
		if (!$role){
			$this->redirect('acl/roles');
		}
		$this->_view->assign('role', $role);
		$this->_view->renderizar('editar_role', 'editar_role');
	}

	public function permisos(){
		$this->_view->setJs(array('funciones'));
		$this->_view->assign('titulo', 'Permisos');
		$permisos = $this->_aclModel->getPermisos();
		$this->_view->assign('permisos', $permisos);
		$this->_view->renderizar('permisos');
	}

	public function agregar_permiso(){
		$this->_view->assign('titulo', 'Guardar Permiso');

		if ($this->getInt('guardar') == 1){
			$this->_view->assign('datos', $_POST);
			if (!$this->getTexto('permiso')){
				$this->_view->assign('_error', 'Debes registrar el Permiso');
				$this->_view->renderizar('agregar_permiso', 'agregar_permiso');
				exit;
			}
			if (!$this->getTexto('key')){
				$this->_view->assign('_error', 'Debes registrar el key');
				$this->_view->renderizar('agregar_permiso', 'agregar_permiso');
				exit;
			}

			$this->_aclModel->guardarPermiso($this->getTexto('permiso'), $this->getTexto('key') );
			$this->_view->assign('_mensaje', 'Se ha agregado el registro');
			$this->redirect('acl/permisos');
		}

		$this->_view->renderizar('agregar_permiso', 'agregar_permiso');
	}

	public function editar_permiso($id){
		$permiso = $this->_aclModel->getPermisoId($id);
		if (!$permiso) { $this->redirect(); }
		$this->_view->assign('permiso', $permiso);
		$this->_view->assign('titulo', 'Editar Permiso');

		if ($this->getInt('guardar') == 1){
			if (!$this->getTexto('permiso')){
				$this->_view->assign('_error', 'Debes registrar el Permiso');
				$this->_view->renderizar('editar_permiso', 'editar_permiso');
				exit;
			}
			if (!$this->getTexto('key')){
				$this->_view->assign('_error', 'Debes registrar el key');
				$this->_view->renderizar('editar_permiso', 'editar_permiso');
				exit;
			}

			$this->_aclModel->editarPermiso($id, $this->getTexto('permiso'), $this->getTexto('key') );
			$this->_view->assign('_mensaje', 'Se ha modificado el registro');
			$this->redirect('acl/permisos');
		}

		$this->_view->renderizar('editar_permiso', 'editar_permiso');
	}

	public function eliminar_permiso($id){
		$permiso = $this->_aclModel->getPermisoId($id);
		if (!$permiso) { $this->redirect(); }
		$this->_aclModel->eliminarPermiso($id);
		$this->redirect('acl/permisos');
	}

}

?>