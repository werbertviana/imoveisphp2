<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		permissao();
		$data['title'] = 'Home - Elleven';
		
		$data['user'] = $this->session->userdata()['logado']['nome'];
		
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('templates/js', $data);
		$this->load->view('templates/footer', $data);
	}
}
