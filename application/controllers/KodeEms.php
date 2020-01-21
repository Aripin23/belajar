<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class KodeEms extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('general_m');
    }

    public function index()
    {
        $data['title'] = 'Kode Ems'; 
        $data['breadcumb1'] = 'Kode Ems'; 
        $data['breadcumb2'] = 'Data'; 
        $data['content']="kode_ems/index";
        $data['data'] = $this->general_m->getData('ems');
        $this->load->view('template/master',$data);
    }
}
