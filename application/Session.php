<?php 

/**
* Esta clase nos proporcionará los métodos para manejar sesiones, variables de sesion
*/
class Session {

	public static function init(){
		session_start();
	}

	/**
	* Este método nos servirá para destruir una o varias variables de sesion enviadas en un arreglo
	*/
	public static function destroy($clave = false){

		if ($clave){
			if (is_array($clave)){
				for ($i = 0; $i < count($clave); $i++){
					if (isset($_SESSION[$clave[$i]])){
						unset($_SESSION[$clave[$i]]);
					}
				} 
			} else {
				if (isset($_SESSION[$clave])){
					unset($_SESSION[$clave]);
				}
			}
		} else {
			session_destroy();
		}
	}

	/**
	* Definimos una variable de session, recibiendo la clave y el valor
	*/
	public static function set($clave, $valor){
		if (!empty($clave)){
			$_SESSION[$clave] = $valor;
		}
	}

	/**
	* Obtenemos el valor de la variable de sesion
	*/
	public static function get($clave){
		if ( isset($_SESSION[$clave]) ){
			return $_SESSION[$clave];
		}
	}

	/**
	* Los siguientes son métodos de seguridad, los que nos van a restringir el acceso
	*/ 


	/**
	* Este método establece el nivel de acceso de un método
	*/
	public static function acceso($level){
		if (!Session::get('autenticado')){
			header('Location: ' . BASE_URL . 'error/access/5050');
			exit;
		}

		Session::tiempo();

		# Si el nivel de acceso es mayor que el del usuario autenticado, no lo va a dejar ingresar
		if (Session::getLevel($level) > Session::getLevel(Session::get('level'))){
			header('Location: ' . BASE_URL . 'error/access/5050');
			exit;
		}
	}

	/**
	* Este método es útil para mostrar u ocultar vistas, por ejemplo un botón. 
	* Recibe el nivel de acceso para la vista y lo compara con la session del usuario
	*/
	public static function accesoView($level){
		if (!Session::get('autenticado')){
			return false;
		}

		# Si el nivel de acceso es mayor que el del usuario no lo va a dejar ingresar
		if (Session::getLevel($level) > Session::getLevel(Session::get('level'))){
			return false;
		}

		return true;
	}

	/**
	* Aquí colocamos los distintos niveles de acceso en la aplicación
	* Entre mayor sea el número más poder tiene el usuario
	*/
	public static function getLevel($level){
		$role['admin'] = 3;
		$role['especial'] = 2;
		$role['usuario'] = 1;

		if (!array_key_exists($level, $role)){
			throw new Exception("Error de Acceso");
		} else {
			return $role[$level];
		}
	}

	/**
	* Me permite seleccionar cierto grupo de usuarios para darle permiso
	*/
	public static function accesoEstricto(array $level, $noAdmin = false){
		if (!Session::get('autenticado')){
			header('Location: ' . BASE_URL . 'error/access/5050');
			exit;
		}

		Session::tiempo();

		if ($noAdmin == false){
			if (Session::get('level') == 'admin'){
				return;
			}
		}

		if (count($level)){
			if (in_array(Session::get('level'), $level)){
				return;
			}
		}
		header('Location: ' . BASE_URL . 'error/access/5050');
	}

	/**
	* Muestra u oculta una vista a un determinado nivel de usuario
	*/
	public static function accesoViewEstricto(array $level, $noAdmin = false){
		if (!Session::get('autenticado')){
			return false;
		}

		if ($noAdmin == false){
			if (Session::get('level') == 'admin'){
				return true;
			}
		}

		if (count($level)){
			if (in_array(Session::get('level'), $level)){
				return true;
			}
		}
		return false;
	}

	/**
	* Compara el tiempo de la Sesión del usuario
	*/ 
	public static function tiempo(){
		if (!Session::get('time') || !defined('SESSION_TIME')){
			throw new Exception("No se ha definido el tiempo de sesión");
		}

		# Si establecemos el tiempo de sesión en 0, la aplicación va a asumir que es un tiempo de sesión indefinido
		if (SESSION_TIME == 0){
			return;
		}

		# Si la resta del tiempo actual, con el definido en la sesión del usuario es mayor al tiempo se sesión de la aplicación
		if (time() - Session::get('time') > (SESSION_TIME * 60)){
			Session::destroy();
			header('location: ' . BASE_URL . 'error/access/8080');
		} else {
			Session::set('time', time());
		}
	}

}

?>