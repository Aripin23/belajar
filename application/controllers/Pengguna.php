<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('general_m');
    }

    public function index()
    {
        $data['title'] = 'Pengguna'; 
        $data['breadcumb1'] = 'Pengguna'; 
        $data['breadcumb2'] = 'Data'; 
        $data['content']="pengguna/index";
        $data['data'] = $this->general_m->getData('pengguna');
        $this->load->view('template/master',$data);
    }

    public function save()
    {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $email = $this->input->post('email');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $role = $this->input->post('role');
        
        $data = [
            'nama' => $nama,
            'alamat' => $alamat,
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'tgl_lahir' => $tgl_lahir,
            'role' => $role            
        ];
        $this->general_m->insertData('pengguna', $data);
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('pengguna');
    }

    





}