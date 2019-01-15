<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view("login/formLogin");
	}

	public function autenticar()
	{
		$this->load->model("usuarios_model");
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		$usuario = $this->usuarios_model->LogarUsuarios($email, $senha);
		
		if ($usuario) {
			$this->session->set_userdata($usuario);
			$this->session->set_flashdata('success', 'Logado com sucesso');
			redirect('usuario/home');
			
		} else {
			$this->session->set_flashdata('danger', 'Usuario ou senha invalidos!');
			redirect('/');
		}
		
	}

	public function logout(){
		$this->session->unset_userdata("usuarioLogado");
		$this->session->set_flashdata("success", "Deslogado com sucesso");
		redirect('/');
	}
}
