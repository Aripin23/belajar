<?php

class Ras_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

    public function get_Data(){
        return $this->db->get('ras')->result();
    }

    public function get_Data_id($id){
        return $this->db->get_where('ras',['id'=>$id])->row();
    }

    public function insert_Data($data){
        $this->db->insert('ras', $data);
    }

    public function update_Data($data, $id){
        $this->db->where('id', $id);
        $this->db->update('ras', $data);
    }

    public function delete_Data($id){
        $this->db->where('id', $id);
        $this->db->delete('ras');
    }

}