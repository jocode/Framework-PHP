<?php 

/**
* Los modelos de los widgets, deben tener el sufijo 'ModelWidget'
*/
class menuModelWidget extends Model {

	public function __construct(){
		parent::__construct();
	}

	public function getMenu(){
		$menuLateral = array(
			array(
				'id' => 'ajax',
				'titulo' => 'Ajax',
				'enlace' => BASE_URL . 'ajax',
			),
			array(
				'id' => 'pdf',
				'titulo' => 'Ejemplo de PDF',
				'enlace' => BASE_URL . 'pdf',
			),
			array(
				'id' => 'paginacion',
				'titulo' => 'Paginación de Registros',
				'enlace' => BASE_URL . 'paginacion',
			),
			array(
				'id' => 'paginacion_ajax',
				'titulo' => 'Paginación de Registros con AJAX',
				'enlace' => BASE_URL . 'paginacion/ajax',
			)
		);
		return $menuLateral;
	}

}

?>