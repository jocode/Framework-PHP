<?php 


class indexController extends usuariosController {

	private $_usuarios;

	public function __construct(){
		parent::__construct();
		$this->_usuarios = $this->loadModel('index');
	}

	public function index(){
		$this->_view->assign('titulo', 'Gestión de Usuarios');
		$this->_view->setJs(array('archivo'));
		$this->_view->assign('usuarios', $this->_usuarios->getUsuarios());
		$this->_view->renderizar('index', 'usuarios');
	}

	public function permisos($id_usuario){

		$id = $this->filtrarInt($id_usuario);
		if (!$id){ $this->redirect('usuarios'); }

		if ($this->getInt('guardar') == 1){
			$values = array_keys($_POST);
			$replace = array();
			$eliminar = array();

			for ($i = 0; $i < count($values); $i++){

				# Verificamos que los primeros 5 caracteres sean igual a 'perm_'
				if (substr($values[$i], 0, 5) == 'perm_'){

					$permiso = (strlen($values[$i]) - 5);

					# En el caso de los usuarios 'x', quiere decir que el permiso es heredado del rol
					if ($_POST[$values[$i]] == 'x'){
						$eliminar[] = array(
							'usuario' => $id,
							'permiso' => substr($values[$i], -$permiso)
						);
					} else {
						if ($_POST[$values[$i]] == 1){
							$valor = 1;
						} else {
							$valor = 0;
						}

						$replace[] = array(
							'usuario' => $id,
							'permiso' => substr($values[$i], -$permiso), 
							'valor' => $valor
						);
					}
				}
			}

			for ($i = 0; $i < count($eliminar); $i++){
				$this->_usuarios->eliminarPermiso(
					$eliminar[$i]['usuario'],
					$eliminar[$i]['permiso']
				);
			}

			for ($i = 0; $i < count($replace); $i++){
				$this->_usuarios->editarPermiso(
					$replace[$i]['usuario'],
					$replace[$i]['permiso'],
					$replace[$i]['valor']
				);
			}
		}

		$permisosUsuario = $this->_usuarios->getPermisosUsuario($id);
		$permisosRole = $this->_usuarios->getPermisosRole($id);

		if (!$permisosUsuario || !$permisosRole){
			$this->redirect('usuarios');
		}

		$this->_view->assign('titulo', 'Permisos de Usuarios');
		# array_keys, obtiene los key del arreglo
		$this->_view->assign('permisos', array_keys($permisosUsuario));
		$this->_view->assign('usuario', $permisosUsuario);
		$this->_view->assign('role', $permisosRole);
		$this->_view->assign('info', $this->_usuarios->getUsuario($id));
		$this->_view->renderizar('permisos');

	}


}

?>