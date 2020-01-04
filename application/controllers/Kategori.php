<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

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
   
}


// defined('BASEPATH') OR exit('No direct script access allowed');

// class Kategori extends CI_Controller {

//     public function index()
//     {
// 		$this->load->view('welcome_message');
//     }
    
//     public function view($kategori = 'test')
//     {
//         if(!file_exists(APPPATH."views/kategori/".$kategori.'.php')){
//             show_404();
//         }

//         $data['judul'] = $kategori;

//         $this->load->view('plat/header', $data);
//         $this->load->view('$kategori/'.$kategori);
//         $this->load->view('plat/footer');



//     }
// } -->