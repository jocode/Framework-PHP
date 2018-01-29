<?php 

/**
* 
*/
class ajaxModel extends Model
{
	
	function __construct(){
		parent::__construct();
	}

	public function getPaises(){
		$paises = $this->_db->query(
				"SELECT * FROM paises"
			);
		return $paises->fetchAll();
	}

	public function getCiudades($pais){
		$ciudades = $this->_db->query(
				"SELECT * FROM ciudades WHERE id_pais = {$pais}"
			);
		$ciudades->setFetchMode(PDO::FETCH_ASSOC);
		return $ciudades->fetchAll();
	}

	public function insertarCiudad($ciudad, $id_pais){
		$this->_db->query(
				"INSERT INTO ciudades VALUES (null, '$ciudad', '$id_pais')"
			);
	}
}

?>