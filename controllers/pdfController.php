<?php 

class pdfController extends Controller {

	# Vamos a usar la librería FPDF para todo el Controlador
	private $_pdf;

	public function __construct(){
		parent::__construct();
		$this->getLibrary('fpdf'.DS.'fpdf');
		$this->_pdf = new FPDF();
	}

	public function index(){
		$this->_view->assign('titulo', 'Pdf');
		$this->_view->renderizar('index', 'pdf');
	}

	public function pdf1(){
		$this->_pdf->AddPage();
		$this->_pdf->SetFont('Arial','B',16);
		$this->_pdf->Cell(40,10, utf8_decode('¡Hola, Mundo!'));
		$this->_pdf->Output();
	}

}

?>