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
		$data['view'] = 'asosiasi/index';
		$this->load->view('template/master', $data);
		// $this->load->view('asosiasi/index', $data);
	}


	public function form_add()
	{	
		$data['view'] = 'asosiasi/add_asosiasi';
		$this->load->view('template/master', $data);
		// $this->load->view('asosiasi/add_asosiasi');
	}


	public function create()
	{
		$asosiasi = $this->input->post('asosiasi');
		$data = array(
			'nama' => $asosiasi
		);
		if($asosiasi !=''){
			$this->asosiasi_model->insert_Data($data);
		}
		redirect('asosiasi');
	}

	public function form_update($id)
	{	
		$data['asosiasi'] = $this->asosiasi_model->get_Data_id($id);
		$data['view'] = 'asosiasi/edit_asosiasi';
		$this->load->view('template/master', $data);
	}

	public function update($id)
	{
		$asosiasi = $this->input->post('asosiasi');
		$data = array(
			'nama' => $asosiasi
		);
		if($asosiasi !=''){
			$this->asosiasi_model->update_Data($data, $id);
		}
		redirect('asosiasi');
	}

	public function delete($id)
	{
		$this->asosiasi_model->delete_Data($id);
		redirect('asosiasi');
	}
	
  
}