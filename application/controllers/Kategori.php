<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function index()	{
		$data['content'] = 'kategori/index';
		$this->load->view('template/master', $data);
	}
}
