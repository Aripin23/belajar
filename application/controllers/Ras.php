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
		$data['view'] = 'ras/index';
		$this->load->view('template/master', $data);

		// var_dump($data);
		// die;
	}

	public function form_add()
	{
		$data['view'] = 'ras/add_ras';
		$this->load->view('template/master', $data);

	}

	public function create()
	{
		$ras = $this->input->post('ras');
		$data = array(
			'nama_ras' => $ras
		);
		if($ras !=''){
			$this->ras_model->insert_Data($data);
		}
		redirect('ras');
	}

	public function form_update($id)
	{
		$data['ras'] = $this->ras_model->get_Data_id($id);
		$data['view'] = 'ras/edit_ras';
		$this->load->view('template/master', $data);
	}

	public function update($id)
	{
		$ras = $this->input->post('ras');
		$data = array(
			'nama_ras' => $ras
		);
		// var_dump($ras);
		// die;
		if($ras !=''){
			$this->ras_model->update_Data($data, $id);
		}
		redirect('ras');
	}

	public function delete($id)
	{
		$this->ras_model->delete_Data($id);
		redirect('ras');
	}

}