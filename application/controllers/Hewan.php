<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Hewan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('general_m');
    }

    public function index()
    {
        $data['title'] = 'Hewan'; 
        $data['breadcumb1'] = 'Hewan'; 
        $data['breadcumb2'] = 'Data'; 
        $data['content']="hewan/index";
        $data['data'] = $this->general_m->getData('hewan');
        $this->load->view('template/master',$data);
    }

    public function save()
    {
        $nama = $this->input->post('nama');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $data = [
            'nama' => $nama,
            'tgl_lahir' => $tgl_lahir,
            'jenis_kelamin' => $jenis_kelamin
        ];

        // $tgl_lahir = $this->input->post('tgl_lahir');
        // // $no_pedegree = $this->input->post('no_pedegree');
        // // $pedegree_ibu = $this->input->post('pedegree_ibu');
        // // $pedegree_ayah = $this->input->post('pedegree_ayah');
        // // $asosiasi = $this->input->post('asosiasi');
        // $jenis_kelamin = $this->input->post('jenis_kelamin');
        // // $warna = $this->input->post('warna');
        // // $ras = $this->input->post('ras');
        // $data = array(
        // 'nama' => $nama,
        // 'tgl_lahir' => $tgl_lahir,
        // // 'no_pedegree' => $no_pedegree,
        // // 'pedegree_ibu' => $pedegree_ibu,
        // // 'pedegree_ayah' => $pedegree_ayah,
        // 'jenis_kelamin' => $jenis_kelamin,
        // // 'asosiasi' => $asosiasi,
        // // 'warna' => $warna,
        // // 'ras' => $ras,
        // );

        $this->general_m->insertData('hewan', $data);
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('hewan');
    }
}