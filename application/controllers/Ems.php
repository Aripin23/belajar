<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Ems extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('general_m');
    }
    
    public function ras()
    {
        $data['title'] = 'EMS Ras'; 
        $data['breadcumb1'] = 'EMS Ras'; 
        $data['breadcumb2'] = 'Data'; 
        $data['content']="kode_ems/ras";
        $data['data'] = $this->general_m->getData('ems_ras');
        $this->load->view('template/master',$data);
    }
    
    public function warna()
    {
        $data['title'] = 'EMS Warna'; 
        $data['breadcumb1'] = 'EMS Warna'; 
        $data['breadcumb2'] = 'Data'; 
        $data['content']="kode_ems/warna";
        $data['data'] = $this->general_m->getData('ems_warna');
        $this->load->view('template/master',$data);
    }
    
    public function pola()
    {
        $data['title'] = 'EMS Pola'; 
        $data['breadcumb1'] = 'EMS Pola'; 
        $data['breadcumb2'] = 'Data'; 
        $data['content']="kode_ems/pola";
        $data['data'] = $this->general_m->getData('ems_pola');
        $this->load->view('template/master',$data);
    }

    // public function index()
    // {
    //     $data['title'] = 'Ems'; 
    //     $data['breadcumb1'] = 'Ems'; 
    //     $data['breadcumb2'] = 'Data'; 
    //     $data['content']="kode_ems/index";
    //     $data['data'] = $this->general_m->getData('ems');
    //     $this->load->view('template/master',$data);
    // }

    public function save()
    {
        $kode_ems = $this->input->post('kode_ems');
        $data = [
            'kode_ems' => $kode_ems
        ];
        $this->general_m->insertData('ems', $data);
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('Ems');
    }

    public function edit()
    {
        $kode_ems = $this->input->post('kode_ems');
        $id = $this->input->post('id');
        $data = [
            'kode_ems' => $kode_ems
        ];
        $this->general_m->editData('ems',$data, $id);
        redirect('Ems');
    }

    public function delete($id)
    {
        $this->general_m->deleteData('ems', $id);
        redirect('Ems');
    }
}
