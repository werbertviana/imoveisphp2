<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listar extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
		permissao();
		$this->load->model('Imoveis_model');
	}

	public function index()

	{
		
		$data['list'] = $this->Imoveis_model->listar();
		$data['title'] = 'Listar - Elleven';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/listar', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function editar($id)
	{
		$data['molde'] = array (
			array("Apartamento", "Comercial", "Imóvel Rural", "Residencial"),
			array("0","1","2","3"),
			array("0","1","2","3"),
			array("0","1","2","3"),
		);
		

		$data['edit'] = $this->Imoveis_model->editar($id);
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
		$this->imoveis_model->atualizar($id, $imovel, $imagem);
		redirect('listar');
	}

	public function deletar($id)
	{
	
		$this->imoveis_model->deletar($id);
		redirect('listar');
	}
}
