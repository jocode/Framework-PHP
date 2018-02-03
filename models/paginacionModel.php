<?php 

class paginacionModel extends Model {
	
	function __construct(){
		parent::__construct();
	}

	public function getDatos($condicion = ''){
		$condicion = (strlen($condicion)>10) ? $condicion : '';
		$query = "SELECT prueba.*, paises.`pais`, ciudades.`ciudad` FROM prueba INNER JOIN paises ON prueba.`id_pais`=paises.`id` INNER JOIN ciudades ON prueba.`id_ciudad`=ciudades.`id` $condicion ORDER BY id ASC;
			";
		$datos = $this->_db->query($query);
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

	public function getPaises(){
		$paises = $this->_db->query(
				"SELECT * FROM paises"
			);
		return $paises->fetchAll();
	}


}

?>