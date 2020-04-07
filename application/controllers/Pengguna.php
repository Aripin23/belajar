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


    public function profile()
    {
        $data['title'] = 'Profil'; 
        $data['breadcumb1'] = 'Profil'; 
        $data['breadcumb2'] = 'Data'; 
        $data['content']="pengguna/profile";
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' =>
		$this->session->userdata('email')])->row_array();
        $this->load->view('template/master',$data);
    }

    
    public function save()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $gambar = $this($this->input->post('gambar'));
        $role = $this->input->post('role');

        
        $data = [
            'nama' => $nama,
            'email' => $email,
            'password' => $password,
            'gambar' => $gambar,
            'role' => $role            
        ];
        $this->general_m->insertData('pengguna', $data);
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('pengguna');
    }

    public function edit()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $id = $this->input->post('id');
        $data = [
            'nama' => $nama,
            'email' => $email
        ];
        $this->general_m->editData('pengguna',$data, $id);
        redirect('pengguna');
    }

    public function delete($id)
    {
        $this->general_m->deleteData('pengguna', $id);
        redirect('pengguna');
    }

}