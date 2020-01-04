<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asosiasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('asosiasi_model');
		$this->load->helper('url_helper');

	}

	public function index()
	{	
		$data['asosiasi'] = $this->asosiasi_model->get_Data();
		$this->load->view('asosiasi/index', $data);
	
	}

	// tutorial sekolahkoding

	// public function index()
	// {
	// 	$this->load->view('welcome_message');
	// }

	// public function view($asosiasi = 'test')
	// {

	// 	if(!file_exists(APPPATH."views/asosiasi/".$asosiasi.'.php')){
	// 		show_404();
	// 	}

	// 	$data['judul'] = $asosiasi;

	// 	$this->load->view('plat/header', $data);
	// 	$this->load->view('asosiasi/'.$asosiasi);
	// 	$this->load->view('plat/footer');

	// }
	

    
}