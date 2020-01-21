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
}



?>