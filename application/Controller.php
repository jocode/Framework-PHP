<?php 
/**
* La clase principal de los controladores.
* Esta clase debe ser abstracta para que no pueda ser instanciada
*/
abstract class Controller {

	/*Este método abstacto index, obliga a que todas las clases que hereden de Controller, implementen un método index por obligación.
	* De esta manera nos aseguramos que siempre haya un método index, en todos los controladores, que es el método por defecto colocado en Request.php
	*/
	abstract public function index();

}

?>