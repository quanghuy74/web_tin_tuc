<?php

class User_model extends CI_Model
{
    public $table = '';
    public $key = '';

    function __construct()
    {
        parent::__construct();
        $this->table = 'user';
        $this->key = 'username';
    }

    function create($data = array())
    {
        if ($this->db->insert($this->table, $data)) {
            $this->session->set_flashdata('mess', 'Đã thêm thành công');

            return TRUE;
        } else {
            $this->session->set_flashdata('mess', 'Đã thêm  công');

            return FALSE;
        }
    }


    function update($id, $data)
    {
        if (!$id) {
            return FALSE;
        }

        $this->db->where($this->key, $id);
        $this->db->update($this->table, $data);

        return TRUE;
    }

    function delete($id)
    {
        if (!$id) {
            return FALSE;
        }

        $this->db->where($this->key, $id);
        $this->db->delete($this->table);

        return TRUE;
    }


    function get_info($id)
    {
        if (!$id) {
            return FALSE;
        }

        $this->db->select('*');
        $this->db->where($this->key, $id);
        $data = $this->db->get($this->table);
        $data = $data->result_array();
        return $data;
    }


    public function get_list()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

}

?>