<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('kategori_model');
		$this->load->helper('url_helper');
	}

	function index()
	{
		$data['kategori'] = $this->kategori_model->get_Data();
		$data['view'] = 'kategori/index';
		$this->load->view('template/master', $data);
	}

	function form_tambah()
	{
		$data['view'] = 'kategori/add_kategori';
		$this->load->view('template/master', $data);
	}

	public function create()
	{
		$nama = $this->input->post('nama');
		$slug = url_title($nama, 'dash', true);

		$data = array(
			'nama' => $nama,
			'slug' => $slug
		);

		$this->kategori_model->insert_data($data);
		
		redirect('kategori');
		
	}

	public function form_update($id)
	{
		$data['data_id'] = $this->kategori_model->get_id($id);
		$data['view'] = 'kategori/edit_kategori';
		$this->load->view('template/master', $data);
	}

	public function update($id)
	{
		$nama = $this->input->post('nama');
		$slug = url_title($nama, 'dash', true);
		$data = array(
			'nama' => $nama,
			'slug' => $slug
		);
		if($nama !=''){
			$this->kategori_model->update_Data($data, $id);
		}
		redirect ('kategori');
	}

	public function delete($id)
	{	
		$this->kategori_model->delete_Data($id);
		redirect('kategori');
	}

}