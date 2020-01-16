<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class KodeEms extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ems_model');
    }

    public function index()
    {
        $data['ems'] = $this->ems_model->get_Data();
        $data['view'] = 'ems/index';
        $this->load->view('template/master', $data);

        // var_dump($data);
        // die;
    }


    public function form_add()
    {
        $data['view'] = 'ems/add_ems';
        $this->load->view('template/master', $data);
    }

    public function create()
    {
        $ems = $this->input->post('ems');
        $data = array(
            'kode_ems' => $ems
        );

        if($ems !=''){
            $this->ems_model->insert_Data($data);
        }
        // var_dump('oke');
        // die;
        redirect('kodeEms');

    }

    public function form_update($id)
    {
        $data['ems'] = $this->ems_model->get_Data_id($id);
        $data['view'] = 'ems/edit_ems';
        $this->load->view('template/master', $data);
    }

    public function update($id)
    {
        $ems = $this->input->post('ems');
        $data = array(
            'kode_ems' => $ems
        );
        if($ems !=''){
            $this->ems_model->update_Data($data, $id);
        }
        // var_dump($data);
        // die;
        redirect('kodeEms');
    }


    public function delete($id)
    {
        $this->ems_model->delete_Data($id);
        redirect('kodeEms');
    }
   
}