<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Login - Elleven';
        $this->load->view('pages/login', $data);
	}

  public function guardar()
  {
    $this->load->model("login_model");
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);
    $usuario = $this->login_model->guardar($email, $senha);

    if($usuario){
      $this->session->set_userdata("logado", $usuario);
      redirect("home");
    } else {
        redirect("login");
    }
  }

  public function logout()
  {
    $this->session->unset_userdata("logado");
    redirect("login");
  }
}
