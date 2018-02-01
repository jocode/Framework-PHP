<?php 

class paginacionModel extends Model {
	
	function __construct(){
		parent::__construct();
	}

	public function getDatos(){
		$datos = $this->_db->query("
			SELECT * FROM prueba
			");

		$data = array();
		while ($registro = $datos->fetch(PDO::FETCH_ASSOC)) {
			$data[] = $registro;
		}
		return $data;
	}

		public function insertarDatos($nombre){
		$this->_db->query("
			INSERT INTO prueba (`id`, `nombre`) VALUES (null, '$nombre')
			");
	}


}

?>