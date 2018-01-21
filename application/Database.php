<?php 
/**
* Esta clase Database extiende de PDO
*/
class Database extends PDO {

	public function __construct(){
		# Al constructor padre le enviamos los parámetros de conexión
		parent::__construct(
			'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, 
			array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '. DB_CHAR)
		);
	}

}

?>