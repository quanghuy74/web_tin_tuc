<?php

class Khachhang extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('khachhang_model');
    }
    function add()
    {
        $data = array();
        $data['temp'] = 'admin/khachhang/add';
        if ($this->input->post()) {
            $this->form_validation->set_rules('Ten', 'Ten', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('sdt', 'sdt', 'required');

            if ($this->form_validation->run()) {
                $Ten = $this->input->post('Ten');
                $email = $this->input->post('email');
                $sdt = $this->input->post('sdt');
                $input = array('Ten' => $Ten, 'email' =>$email, 'sdt'=>$sdt);
                echo var_dump($input);
                if($this->khachhang_model->create($input)){
                    $this->session->set_flashdata('mess', 'Đã thêm thành công');
                    redirect(admin_url('khachhang/listkh'));
                }
                else{
                    $this->session->set_flashdata('mess', 'lỗi !!! thêm thất bại');

                }
            }
        }
        $this->load->view('admin/index', $data);
    }

    function listkh()
    {
        $data = array();
        $data['temp'] = 'admin/khachhang/listkh';
        $data['khachhang'] = $this->khachhang_model->get_list();
        $this->load->view('admin/index', $data);
    }

    function edit()
    {
        $data = array();
        $id = $this->uri->segment(4);
        $data['temp'] = 'admin/khachhang/edit';
        $data['khachhang'] = $this->khachhang_model->get_info($id);

        if ($this->input->post()) {
            $this->form_validation->set_rules('Ten', 'Ten', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('sdt', 'sdt', 'required');

            if ($this->form_validation->run()) {
                $Ten = $this->input->post('Ten');
                $email = $this->input->post('email');
                $sdt = $this->input->post('sdt');
                $input = array('Ten' => $Ten, 'email' =>$email, 'sdt'=>$sdt);
                echo var_dump($input);
                if($this->khachhang_model->update($id, $input)){
                    $this->session->set_flashdata('mess', 'thành công');
                    redirect(admin_url('khachhang/listkh'));
                }
                else{
                    $this->session->set_flashdata('mess', 'lỗi !!!');

                }
            }
        }
        $this->load->view('admin/index', $data);
    }

    function delete()
    {
        $id = $this->uri->segment(4);
        $this->khachhang_model->delete($id);
        $this->session->set_flashdata('mess', 'Xóa thành công');
        redirect(admin_url('khachhang/listkh'));
    }

}
?>