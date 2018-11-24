<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SistemaZonaAzul extends CI_Controller {

	public function index()
	{
		$active = array('c1' => 'active', 'c2' => '', 'c3' => '',  'c4' => '');
		$this->load->view('header', $active);
		$this->load->view('header');
		$this->load->view('footer');
	}
}
?>