<?php 

/**
* 
*/
class Registry {

	private static $_instancia; # Guardará la instancia del registro
	private $_data; # Se guardarán las clases que serán almacenadas en la clase Regustry

	/**
	* Con el constructor privado nos aseguramos que no se cree una instancia de la clase
	*/
	private function __construct(){}

	/**
	* Singleton
	* Verificamos si el atributo tiene una instancia del registro, si es así la crea y devuelve la instancia del registro.
	* De esta manera nos aseguramos que la clase se instancie una sola vez
	*/
	public static function getInstancia(){
		if (!self::$_instancia instanceof self){
			self::$_instancia = new Registry();
		}
		return self::$_instancia;
	}

	/*
	* Para poder guardar los objetos, sobreescribimos los métodos get y set de la clase
	* La forma más sencilla de hacer el registro, es con un arreglo de objetos
	*/
	public function __set($name, $value){
		$this->_data[$name] = $value;
	}

	public function __get($name){
		if (isset($this->_data[$name])){
			return $this->_data[$name];
		}
		return false;
	}

}

?>