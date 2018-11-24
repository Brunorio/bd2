<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servical extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('Servical_model', 'servicalModel');
    }

	public function index($ordem = -1){
		$usuarios = $this->servicalModel->selecionarFuncionario($ordem);
		$active = array('c1' => '', 'c2' => 'active', 'c3' => '', 'c3' =>  '', 'c4' => '');
		$data['s1'] = false;
		$data['s2'] = false;
		$data['s3'] = false;
		$data['s4'] =false;

		switch ($ordem) {
			case -1:
				$data['s4'] = true;		
				break;
			case 0: $data['s2'] = true; break;
			case 1: $data['s1'] = true; break;
			case 2: $data['s3'] = true; break;
		}
		 
		$data['usuarios'] = $usuarios;
		$this->load->view('header', $active);
		$this->load->view('servical/servical', $data);
		$this->load->view('footer');
	}

	public function insert(){
		if($this->input->post()){
			$nome = $this->input->post('nome');
			$email = $this->input->post('email');
			$cpf = $this->input->post('cpf');
			$senha = $this->input->post('senha');
			$nivel = $this->input->post('nivel');

			$result = $this->servicalModel->insertServical($nome, $email, $cpf, $senha, $nivel);
			if($result->success){
				$this->session->set_flashdata('notificacao', array('mensagem' => 'Usuário Cadastrado com Sucesso!', 'icone' => 'pe-7s-check', 'cor' => 2));
			} else {
				$this->session->set_flashdata('notificacao', array('mensagem' => 'Este e-mail está sendo utilizado por um outro usuário', 'icone' => 'pe-7s-attention', 'cor' => 4));
			}
			
		} else {
			$this->session->set_flashdata('notificacao', array('mensagem' => 'Não foi possível cadastrar o usuário', 'icone' => 'pe-7s-attention', 'cor' => 2));
		}

		redirect(base_url('index.php/Servical'));
	}

	public function remove(){
		if($this->input->post('id')){
			$id = $thus->input->post('id');
			return $this->servicalModel->removeServical($id);


		}
	}
}
?>