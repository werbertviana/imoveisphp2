<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastrar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		permissao();
		$this->load->model('imoveis_model');
	}

	public function index()
	{
		$data['title'] = 'Cadastrar - Elleven';

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
		$config["max_size"] = 2048;
		$config["max_width"] = 1024;
		$config["max_height"] = 768;

		$this->load->library('upload',$config);
		
		$this->upload->do_upload('imagem');
		$imagem = $this->upload->data()['file_name'];
		
		$imovel  = $_POST;
		$this->load->model('imoveis_model');
		$this->imoveis_model->guardar($imovel, $imagem);
		redirect('listar');
	}

}
