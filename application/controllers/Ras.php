<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ras extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ras_model');
		$this->load->helper('url_helper');

	}

	public function index()
	{	
		$data['ras'] = $this->ras_model->get_Data();
		$this->load->view('asosiasi/ras', $data);
	
    }
}