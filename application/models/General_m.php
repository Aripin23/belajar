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
}


?>