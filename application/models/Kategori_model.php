<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

    function get_Data()
    {

        return $this->db->get('kategori')->result();
    }
    public function insert_data($data)
    {
        $this->db->insert('kategori', $data);
    }

    public function get_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('kategori')->row();

    }

    public function update_Data($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('kategori', $data);
    }

    public function delete_Data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kategori');
    }

}