<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Multas_model extends CI_Model {

	public function selecionarMultas(){
		$sql = 'SELECT funcionario.nome as aplicador, veiculo.nome as veiculo_nome, veiculo.estado, veiculo.placa, usuario.nome as usuario, multa._data FROM multa INNER JOIN funcionario ON multa.aplicador = funcionario.id INNER JOIN veiculo ON multa.veiculo = veiculo.id INNER JOIN usuario ON usuario.id = veiculo.responsavel WHERE 1 ORDER BY aplicador, _data ASC';
		return $this->db->query($sql)->result();
	}
}
?>