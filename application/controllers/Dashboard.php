<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('asosiasi_model');
    }

    public function index(){
        // $data['kategori'] = $this->asosiasi_model->get_Data();
        $data['title'] = 'Dashboard'; 
        $data['breadcumb1'] = 'Dashboard'; 
        $data['breadcumb2'] = 'Content'; 
        $data['content']="dashboard/index";
        $this->load->view('template/master',$data);

        
    }

   
}