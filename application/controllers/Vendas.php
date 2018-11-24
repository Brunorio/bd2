<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendas extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('Vendas_model', 'vendasModel');
    }

	public function index(){
		$active = array('c1' => '', 'c2' => '', 'c3' => '', 'c4' => 'active');
		$vendas = $this->vendasModel->selecionarVendas();
		
		
		$this->load->view('header', $active);
		$this->load->view('vendas/vendas', array('vendas' => $vendas));
		$this->load->view('footer');
	}

	
}
?>