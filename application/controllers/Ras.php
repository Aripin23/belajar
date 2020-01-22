<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ras extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('general_m');
    }

    public function index()
    {
        $data['title'] = 'Ras';
        $data['breadcumb1'] = 'Ras';
        $data['breadcumb2'] = 'Data';
        $data['content']="ras/index";
        $data['data'] = $this->general_m->getData('ras');
        $this->load->view('template/master',$data);
    }

    public function save()
    {
        $nama = $this->input->post('nama_ras');
        $data = [
            'nama_ras' => $nama
        ];
        $this->general_m->insertData('ras', $data);
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('ras'); 
    }

    public function edit()
    {
        $nama = $this->input->post('nama_ras');
        $id = $this->input->post('id');
        $data = [
            'nama_ras' => $nama
        ];
        $this->general_m->editData('ras', $data,$id);
        redirect('ras');   
    }

    public function delete($id)
    {
        $this->general_m->deleteData('ras', $id);
        redirect('ras');
    }
}

