<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function logarUsuarios($email, $senha) {
		$this->db->where("email", $email);
		$this->db->where("senha", $senha);
		$usuario = $this->db->get("usuarios")->row_array();
		return $usuario;
	}

	public function buscaTodos(){
		return $this->db->get("usuarios")->result_array();
	}

	public function salvar($usuario) {
		$this->db->insert("usuarios", $usuario);
	}	

	public function deletar($id){
		$this->db->where("id", $id);
		$this->db->delete("usuarios");
		return TRUE;
	}

	public function buscarPorId($id){
		return $this->db->get_where("usuarios", array(
			"id" => $id
		))->row_array();
	}

	public function atualizar(){
		$id = $this->input->post("id");
		$usuario = array(
			'nome' => $this->input->post("nome"),
			'email' => $this->input->post("email"),
			'senha' => $this->input->post("senha")
		);

		$this->db->where("id", $id);
		return $this->db->update("usuarios", $usuario);
	}
	

}



