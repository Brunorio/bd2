<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Multas extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('Multas_model', 'multasModel');
    }

	public function index(){
		$active = array('c1' => '', 'c2' => '', 'c3' => 'active',  'c4' => '');
		$multas = $this->multasModel->selecionarMultas();
		
		
		$this->load->view('header', $active);
		$this->load->view('multas/multas', array('multas' => $multas));
		$this->load->view('footer');
	}

}
?>