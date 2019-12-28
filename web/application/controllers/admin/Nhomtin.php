<?php

class nhomtin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('nhomtin_model');
    }

    function themnt()
    {
        $data = array();
        $data['temp'] = 'admin/nhomtin/addnt';
        if ($this->input->post()) {
            $this->form_validation->set_rules('nhomtin', 'nhomtin', 'required');
            if ($this->form_validation->run()) {
                $tennt = $this->input->post('nhomtin');
                $input = array('TenNhomTin' => $tennt);
                $this->nhomtin_model->create($input);
                $this->session->set_flashdata('mess', 'Đã thêm thành công');
                $this->listnt();
            }
        }
        $this->load->view('admin/index', $data);
    }

    function listnt()
    {
        $data = array();
        $data['temp'] = 'admin/nhomtin/listnt';
        $data['nhomtin'] = $this->nhomtin_model->get_list();
        $this->load->view('admin/index', $data);
    }

    function suant()
    {
        $data = array();
        $id = $this->uri->segment(4);
        $data['row'] = $this->nhomtin_model->get_info($id);
        if ($this->input->post()) {
            $this->form_validation->set_rules('nhomtin', 'nhomtin', 'required');
            if ($this->form_validation->run()) {
                $tennt = $this->input->post('nhomtin');
                $input = array('TenNhomTin' => $tennt);
                $this->nhomtin_model->update($id, $input);
                $this->session->set_flashdata('mess', 'Đã sua thành công');
                redirect(admin_url('nhomtin/listnt'));
            }
        }
        $data['temp'] = 'admin/nhomtin/suant';
        $this->load->view('admin/index', $data);
    }

    function xoant($id)
    {
        $id = $this->uri->segment(4);
        $this->nhomtin_model->delete($id);
        $this->session->set_flashdata('mess', 'Bạn vừa xóa 1 nhóm tin');
        $this->listnt();

    }

}

?>