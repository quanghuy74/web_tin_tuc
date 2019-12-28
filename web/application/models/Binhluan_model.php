<?php

class Binhluan_model extends CI_Model
{
    public $table = '';
    public $key = '';

    function __construct()
    {
        parent::__construct();
        $this->table = 'binhluan';
        $this->key = 'IDBinhLuan';
    }

    function create($data = array())
    {
        if ($this->db->insert($this->table, $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function get_list()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

}

?>