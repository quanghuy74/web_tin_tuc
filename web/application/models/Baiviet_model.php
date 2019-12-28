<?php
class baiviet_model extends CI_Model {
    public $table = '';
    public $key = '';
    function __construct()
    {
        parent::__construct();
        $this->table = 'tin';
        $this->key = 'IDTin';
    }

    function create($data = array())
    {
        if($this->db->insert($this->table, $data))
        {
            return TRUE;
        }else{
            return FALSE;
        }
    }


    function update($id, $data)
    {
        if (!$id)
        {
            return FALSE;
        }

        $this->db->where($this->key, $id);
        $this->db->update($this->table, $data);

        return TRUE;
    }

    function delete($id)
    {
        if (!$id)
        {
            return FALSE;
        }

        $this->db->where($this->key, $id);
        $this->db->delete($this->table);

        return TRUE;
    }

    function get_info($id)
    {
        if (!$id)
        {
            return FALSE;
        }

        $this->db->select('*');
        $this->db->where($this->key, $id);
        $data=$this->db->get($this->table);
        $data = $data->result();
        return $data;
    }
    public function get_list()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

}
?>