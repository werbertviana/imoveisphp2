<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imoveis extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
		permissao();
		$this->load->model('imoveis_model');
	}

	public function index()

	{
		
		$data['user'] = $this->session->userdata()['logado']['nome'];
		$data['title'] = 'Listar - Elleven';
		$this->load->view('templates/header2', $data);

	}

	public function editar($id)
	{
		$data['molde'] = array (
			array("Apartamento", "Comercial", "Imóvel Rural", "Residencial"),
			array("0","1","2","3"),
			array("0","1","2","3"),
			array("0","1","2","3"),
		);
		

		$data['edit'] = $this->imoveis_model->editar($id);
		$data['title'] = 'Editar - Elleven';
		

        $this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/editar', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);	
	}

	public function atualizar($id)
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
		$this->Imoveis_model->atualizar($id, $imovel, $imagem);
		redirect('listar');
	}

	public function deletar($id)
	{
	
		$this->Imoveis_model->deletar($id);
		redirect('listar');
	}
}
