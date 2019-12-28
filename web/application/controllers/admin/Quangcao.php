<?php

class Quangcao extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('quangcao_model');
    }
    function add()
    {
        $data = array();
        $data['temp'] = 'admin/quangcao/add';
        $this->load->model('khachhang_model');
        $data['khachhang']=$this->khachhang_model->get_list();
        if ($this->input->post()) {
            $this->form_validation->set_rules('NgayBatDau', 'NgayBatDau', 'required');
            $this->form_validation->set_rules('NgayKetThuc', 'NgayKetThuc', 'required');
            $this->form_validation->set_rules('sotien/click', 'sotien/click', 'required');
            $this->form_validation->set_rules('link', 'link', 'required');
            $this->form_validation->set_rules('IDKH', 'IDKH', 'required');
            if ($this->form_validation->run()) {
                $NgayBatDau = $this->input->post('NgayBatDau');
                $NgayKetThuc = $this->input->post('NgayKetThuc');
                $tien = $this->input->post('sotien/click');
                $link = $this->input->post('link');
                $SoClick = 0;
                $IDKH = $this->input->post('IDKH');
                $input = array('NgayBatDau' => $NgayBatDau, 'NgayKetThuc' =>$NgayKetThuc, 'sotientrenclick'=>$tien, 'link'=>$link, 'SoClick'=>$SoClick, 'IDKH'=>$IDKH);
                echo var_dump($input);
                $this->quangcao_model->create($input);
                $this->session->set_flashdata('mess', 'Đã thêm thành công');
                redirect(admin_url('quangcao/listqc'));
            }
        }
        $this->load->view('admin/index', $data);
    }
    function listqc()
    {
        $data = array();
        $data['temp'] = 'admin/quangcao/listqc';
        $data['quangcao'] = $this->quangcao_model->get_list();
        $this->load->view('admin/index', $data);
    }
    function delete()
    {
        $id = $this->uri->segment(4);
        $this->session->set_flashdata('mess', 'xóa thành công');
        $this->user_model->delete($id);
       redirect(admin_url('quangcao/listqc'));
    }
    function edit()
    {
        $data = array();
        $data['temp'] = 'admin/quangcao/edit';
        $this->load->model('khachhang_model');
        $id = $this->uri->segment(4);
        $data['quangcao'] = $this->quangcao_model->get_info($id);
        $data['khachhang']=$this->khachhang_model->get_list();
        if ($this->input->post()) {
            $this->form_validation->set_rules('NgayBatDau', 'NgayBatDau', 'required');
            $this->form_validation->set_rules('NgayKetThuc', 'NgayKetThuc', 'required');
            $this->form_validation->set_rules('sotien/click', 'sotien/click', 'required');
            $this->form_validation->set_rules('link', 'link', 'required');
            $this->form_validation->set_rules('IDKH', 'IDKH', 'required');
            if ($this->form_validation->run()) {
                $NgayBatDau = $this->input->post('NgayBatDau');
                $NgayKetThuc = $this->input->post('NgayKetThuc');
                $tien = $this->input->post('sotien/click');
                $link = $this->input->post('link');
                $SoClick = 0;
                $IDKH = $this->input->post('IDKH');
                $input = array('NgayBatDau' => $NgayBatDau, 'NgayKetThuc' =>$NgayKetThuc, 'sotientrenclick'=>$tien, 'link'=>$link, 'SoClick'=>$SoClick, 'IDKH'=>$IDKH);
                echo var_dump($input);
                $this->quangcao_model->update($id,$input);
                $this->session->set_flashdata('mess', 'Đã thêm thành công');
                redirect(admin_url('quangcao/listqc'));
            }
        }
        $this->load->view('admin/index', $data);
    }
}
?>