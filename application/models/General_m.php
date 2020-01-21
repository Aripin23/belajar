<?php 
class General_m extends CI_Model
{
    public function getData($table)
    {
        return $this->db->get($table)->result();
    }

    public function insertData($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function editData($table, $data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update($table, $data);
    }

    public function deleteData($table, $id)
    {
        $this->db->where('id', $id);
        $this->db->delete($table);
        
    }
}


?>