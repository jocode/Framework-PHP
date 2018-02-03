<?php 

class menuWidget extends Widget {

	public function menu(){
		# Se coloca nombre al arreglo, para poder ser usados como variable, porque el método extract() de la clase Widget así lo requiere
		$menuLateral['menu'] = array(
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

		return $this->render('menu-right', $menuLateral);
	}

}

?>