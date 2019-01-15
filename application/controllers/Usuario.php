<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function home(){
		$this->load->view("home/home");
	}

	public function user()
	{
		$this->load->model("usuarios_model");
		$lista = $this->usuarios_model->buscaTodos();
		$dados = array("usuarios" => $lista);
		$this->load->view("usuario/pageUser", $dados);
	}

	public function novo()
	{
		$usuario = array(
			"nome" => $this->input->post("nome"),
			"email" => $this->input->post('email'),
			"senha" => $this->input->post('senha')
		);
		$this->load->model("usuarios_model");
		$this->usuarios_model->salvar($usuario);
		redirect("usuario/user");
	}

	public function consultar(){
		$id = $this->input->get("id");
		$this->load->model("usuarios_model");
		$usuario = $this->usuarios_model->buscarPorId($id);
		$dados = array("usuario" => $usuario);

		$this->load->view("usuario/detalheUser", $dados);
	}

	public function delete($id){
		$this->load->model("usuarios_model");
		$this->usuarios_model->deletar($id);
		$this->session->set_flashdata("success", "Usuario deletado com sucesso");
		redirect('usuario/user');
	}


	public function atualizar($id){
		$this->load->model("usuarios_model");
		$this->usuarios_model->atualizar($id);
		$this->session->set_flashdata("success", "Usuario Alterado");
		redirect('usuario/user');
	}
}
