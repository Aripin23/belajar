<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Asosiasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('general_m');
    }

    public function index()
    {
        $data['title'] = 'Asosiasi'; 
        $data['breadcumb1'] = 'Asosiasi'; 
        $data['breadcumb2'] = 'Data'; 
        $data['content']="asosiasi/index";
        $data['data'] = $this->general_m->getData('asosiasi');
        $this->load->view('template/master',$data);
    }

    public function save()
    {
        $nama = $this->input->post('nama');
        $data = [
            'nama' => $nama
        ];
        $this->general_m->insertData('asosiasi', $data);
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('asosiasi');
    }
    public function edit()
    {
        $nama = $this->input->post('nama');
        $id = $this->input->post('id');
        $data = [
            'nama' => $nama
        ];
        $this->general_m->editData('asosiasi',$data, $id);
        redirect('asosiasi');
    }

    public function delete($id)
    {
        $this->general_m->deleteData('asosiasi', $id);
        redirect('asosiasi');
    }

}



?>