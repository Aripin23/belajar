<?php

class Asosiasi_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }
    
    public function get_Data(){
        return $this->db->get('asosiasi')->result();
    }

    public function get_Data_id($id)
    {
        return $this->db->get_where('asosiasi',['id'=>$id])->row();
    }

    public function insert_Data($data){
        $this->db->insert('asosiasi', $data);
    }
    
    public function update_Data($data, $id){
        $this->db->where('id', $id);
        $this->db->update('asosiasi', $data);
    }

    public function delete_Data($id){
        $this->db->where('id', $id);
        $this->db->delete('asosiasi');
    }


}