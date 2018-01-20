<?php 

define('DS', DIRECTORY_SEPARATOR); // Declaramos este separador de directorios, porque en sistemas operativos son diferentes. Por ejemplo en Windows (\) y Linux (/)
define('ROOT', realpath(dirname(__FILE__)) . DS); // Ruta raíz de la aplicación
define('APP_PATH', ROOT . 'application' . DS);

require_once(APP_PATH . 'Config.php');
require_once(APP_PATH . 'Request.php');
require_once(APP_PATH . 'Bootstrap.php');
require_once(APP_PATH . 'Controller.php');
require_once(APP_PATH . 'Model.php');
require_once(APP_PATH . 'View.php');
require_once(APP_PATH . 'Registro.php');

echo '<pre>';
print_r(get_required_files());

?>