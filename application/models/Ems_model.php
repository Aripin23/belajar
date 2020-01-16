<?php

class Ems_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

    public function get_Data(){
        return $this->db->get('ems')->result();
    }

    public function get_Data_id($id)
    {
        return $this->db->get_where('ems',['id'=>$id])->row();
    }

    public function insert_Data($data){
        $this->db->insert('ems', $data);
    }

    public function update_Data($data, $id){
        $this->db->where('id', $id);
        $this->db->update('ems', $data);
    }

    public function delete_Data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('ems');
    }

}