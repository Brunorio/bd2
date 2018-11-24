<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servical_model extends CI_Model {

	public function insertServical($nome, $email, $cpf, $senha, $nivel){
		$sql = 'CALL insertServical(?, ?, ?, ?, ?)';
		return $this->db->query($sql, array($nome, $email, $cpf, $senha, $nivel))->result()[0];
	}

	public function removeServical($id){
		$sql = 'CALL removeServical(?)';
		return $this->db->query($sql, array($id))->result()[0];
	}

	public function updateServical($id, $nome, $email, $cpf, $senha, $nivel){
		$sql = 'CALL updateServical(?, ?, ?, ?, ?, ?)';
		return $this->db->query($sql, array($id, $nome, $email, $cpf, $senha, $nivel))->result()[0];
	}

	public function selecionarFuncionario($ele){
		if($ele == -1){
			$sql = 'CALL selectAll()';
			return $this->db->query($sql)->result();
		} else {
			$sql = 'CALL selectFuncionario(?)';
			return $this->db->query($sql, array($ele))->result();
		}
	}
}
?>