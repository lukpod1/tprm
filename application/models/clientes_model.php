<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model {

	public function buscaTodos(){
		return $this->db->get("clientes")->result_array();
	}

	public function salvar($cliente) {
		$this->db->insert("clientes", $cliente);
	}	

	public function deletar($id){
		$this->db->where("id", $id);
		$this->db->delete("clientes");
		return TRUE;
	}

	public function buscarPorId($id){
		return $this->db->get_where("clientes", array(
			"id" => $id
		))->row_array();
	}

	public function atualizar(){
		$id = $this->input->post("id");
		$cliente = array(
			'cpf' => $this->input->post("cpf"),
			'nome' => $this->input->post("nome"),
			'email' => $this->input->post("email"),
			"telefone" => $this->input->post("telefone"),
			"endereco" => $this->input->post('endereco')
		);

		$this->db->where("id", $id);
		return $this->db->update("clientes", $cliente);
	}
	

}



