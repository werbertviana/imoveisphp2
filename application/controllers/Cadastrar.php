<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastrar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		permissao();
		$this->load->model('Imoveis_model');
	}

	public function index()
	{
		$data['title'] = 'Cadastrar - Elleven';
		$data['user'] = $this->session->userdata()['logado']['nome'];

        $this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
		$this->load->view('pages/cadastrar', $data);
	}

	public function guardar()
	{
		$config["upload_path"] = "assets/images";
		$config["allowed_types"] = 'gif|jpg|png';
		$config["max_size"] = 10000;
		$config["max_width"] = 5000;
		$config["max_height"] = 5000;

		$this->load->library('upload',$config);
		
		$this->upload->do_upload('imagem');
		$imagem = $this->upload->data()['file_name'];
		
		$imovel  = $_POST;
		$this->load->model('Imoveis_model');
		$this->Imoveis_model->guardar($imovel, $imagem);
		redirect('listar');
	}

}
