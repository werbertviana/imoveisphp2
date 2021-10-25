<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Sign-Up - Elleven';
        $this->load->view('pages/signup', $data);
	}

    public function guardar()
    {
        $this->load->model('usuarios_model');
        $usuario = array(
            "nome" => $_POST["nome"],
            "email" => $_POST["email"], 
            "senha" => md5($_POST["senha"])
        );

        $this->usuarios_model->guardar($usuario);
        redirect("login");
    }
}
