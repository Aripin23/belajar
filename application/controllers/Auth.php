<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
    }

    public function index()
    {
        $data ['title'] = 'Login Pets';
        $this->load->view('template/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('template/auth_footer');
    }

   

    public function daftar()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');

        $this->form_validation->set_rules('password1', 'Password', 'required');

        // $this->form_validation->set_rules('password2', 'Password', 'required');

        // var_dump($this->form_validation->run());

        if( $this->form_validation->run() == false){

            $data ['title'] = 'Daftar Pets';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/daftar');
            $this->load->view('template/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email',true)),
                'password' => password_hash($this->input->post('password1'),
                PASSWORD_DEFAULT),
                'gambar' => 'default.jpg',
                'role_id' => '2',
                'is_active' => '1',
                'tgl_buat' => time()
            ];

            $this->db->insert('pengguna', $data);     //INSERT DATA KE TABEL PENGGUNA
            redirect('auth');
        }

    }

}