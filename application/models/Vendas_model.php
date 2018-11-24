<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendas_model extends CI_Model {

	public function selecionarVendas(){
		$sql = 'SELECT funcionario.nome as funcionario, usuario.nome as cliente, venda.tempo, venda._data FROM venda INNER JOIN funcionario ON funcionario.id = venda.funcionario INNER JOIN usuario ON usuario.id = venda.cliente WHERE 1 ORDER BY venda._data ASC';
		return $this->db->query($sql)->result();
	}
}
?>