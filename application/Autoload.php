<?php 

function autoloadCore($class){
	$ruta = APP_PATH . $class. '.php';
	if (file_exists($ruta)){
		include_once $ruta;
	}
}

function autoloadLibs($class){
	$ruta =  ROOT . 'libs' . DS . $class . DS  .$class. '.php';
	if (file_exists($ruta)){
		include_once $ruta;
	}
}

spl_autoload_register('autoloadCore');
spl_autoload_register('autoloadLibs');

?>