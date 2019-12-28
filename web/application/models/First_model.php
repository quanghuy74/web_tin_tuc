<?php if (! defined ('BASEPATH')) exit('No direct script access allowed');

class First_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function inserttin($nhomtin, $tieude, $noidungtd, $anhtrichdan, $noidung, $luotlike, $luotxem, $ngay){
        $data = array('NhomTin' => $nhomtin,
            'TieuDe' => $tieude,
            'NoiDungTD' => $noidungtd,
            'AnhTrichDan' => $anhtrichdan,
            'NoiDUng'=>$noidung,
            'LuotLike'=>$luotlike,
            'LuotXem'=>$luotxem,
            'Ngay'=>$ngay
            );
        $this->db->insert('tin',$data);
        return $this->db->insert_id();
    }

    function update($id, $data)
    {
        if (!$id)
        {
            return FALSE;
        }

        $where = array();
        $where[$this->key] = $id;
        $this->update_rule($where, $data);

        return TRUE;
    }
    function delete($id)
    {
        if (!$id)
        {
            return FALSE;
        }
        if(is_numeric($id))
        {
            $where = array($this->key => $id);
        }else
        {
            //xoa nhieu row
            //$id = 1,2,3...
            $where = $this->key . " IN (".$id.") ";
        }
        $this->del_rule($where);

        return TRUE;
    }
    public function getAllTin()
    {
        $this->db->select('*');
        $data=$this->db->get('tin');
        $data = $data->result_array();
        return $data;
    }


    public function getTinByID($ID)
    {
        $this->db->select('*');
        $this->db->where('IDTin', $ID);
        $data=$this->db->get('tin');
        $data = $data->result_array();
        return $data;
    }
    public function getAllNhomTin(){
        $this->db->select('*');
        $data=$this->db->get('nhomtin');
        return $data;
    }

    function get_info($id, $field = '')
    {
        if (!$id)
        {
            return FALSE;
        }

        $where = array();
        $where[$this->key] = $id;

        return $this->get_info_rule($where, $field);
    }
    /**
     * Lay tong so
     */
    function get_total($input = array())
    {
        $this->get_list_set_input($input);

        $query = $this->db->get($this->table);

        return $query->num_rows();
    }

    /**
     * Lay danh sach
     * $input : mang cac du lieu dau vao
     */
    function get_list($input = array())
    {
        //xu ly ca du lieu dau vao
        $this->get_list_set_input($input);

        //thuc hien truy van du lieu
        $query = $this->db->get($this->table);
        //echo $this->db->last_query();
        return $query->result();
    }

    /**
     * Gan cac thuoc tinh trong input khi lay danh sach
     * $input : mang du lieu dau vao
     */

    protected function get_list_set_input($input = array())
    {
        // Thêm điều kiện cho câu truy vấn truyền qua biến $input['where']
        //(vi du: $input['where'] = array('email' => 'hocphp@gmail.com'))
        if ((isset($input['where'])) && $input['where'])
        {
            $this->db->where($input['where']);
        }
    }

    /**
     * kiểm tra sự tồn tại của dữ liệu theo 1 điều kiện nào đó
     * $where : mang du lieu dieu kien
     */
    function check_exists($where = array())
    {
        $this->db->where($where);
        //thuc hien cau truy van lay du lieu
        $query = $this->db->get($this->table);

        if($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
?>
}