<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	public function client()
	{
		$this->load->model("clientes_model");
		$lista = $this->clientes_model->buscaTodos();
		$dados = array("clientes" => $lista);
		$this->load->view("cliente/pageClient", $dados);
	}

	public function novo()
	{	
		$usuarioId = $this->session->userdata($usuario);
		$cliente = array(
			"cpf" => $this->input->post('cpf'),
			"nome" => $this->input->post("nome"),
			"email" => $this->input->post('email'),
			"telefone" => $this->input->post("telefone"),
			"endereco" => $this->input->post('endereco'),
			"usuario_id" => $usuarioId["id"]
		);
		$this->load->model("clientes_model");
		$this->clientes_model->salvar($cliente);
		redirect("cliente/client");
	}

	public function consultar(){
		$id = $this->input->get("id");
		$this->load->model("clientes_model");
		$cliente = $this->clientes_model->buscarPorId($id);
		$dados = array("cliente" => $cliente);

		$this->load->view("cliente/detalheClient", $dados);
	}

	public function delete($id){
		$this->load->model("clientes_model");
		$this->clientes_model->deletar($id);
		$this->session->set_flashdata("success", "Cliente deletado com sucesso");
		redirect("cliente/client");
	}

	

	public function atualizar($id){
		$this->load->model("clientes_model");
		$this->clientes_model->atualizar($id);
		$this->session->set_flashdata("success", "Cliente Alterado");
		redirect("cliente/client");
	}
}
