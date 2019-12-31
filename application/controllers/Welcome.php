<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()	{
		// $data['content'] = 'kategori';
		// $this->load->view('template/master',$data);
		
		$this->load->view('template/master');
	}
}