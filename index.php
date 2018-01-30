<?php 

define('DS', DIRECTORY_SEPARATOR); // Declaramos este separador de directorios, porque en sistemas operativos son diferentes. Por ejemplo en Windows (\) y Linux (/)
define('ROOT', realpath(dirname(__FILE__)) . DS); // Ruta raíz de la aplicación
define('APP_PATH', ROOT . 'application' . DS);

try {

	require_once(APP_PATH . 'Config.php');
	require_once(APP_PATH . 'Request.php');
	require_once(APP_PATH . 'Bootstrap.php');
	require_once(APP_PATH . 'Controller.php');
	require_once(APP_PATH . 'Model.php');
	require_once(APP_PATH . 'View.php');
	require_once(APP_PATH . 'Registro.php');
	require_once(APP_PATH . 'Database.php');
	require_once(APP_PATH . 'Session.php');
	require_once(APP_PATH . 'Hash.php');
	require_once(APP_PATH . 'ACL.php');

	# Inicializamos las variables de sesion
	Session::init();

	Bootstrap::run(new Request());
} catch (Exception $e){
	echo $e->getMessage();
}

?>