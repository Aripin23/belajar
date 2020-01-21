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
}

