<?php

class user extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    function themuser()
    {
        $data = array();
        $data['temp'] = 'admin/user/add';
        if ($this->input->post()) {
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('isadmin', 'isadmin', 'required');

            if ($this->form_validation->run()) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $isadmin = $this->input->post('isadmin');

                $input = array('username' => $username, 'password' =>$password, 'isadmin'=>$isadmin);
                $this->user_model->create($input);

                $this->session->set_flashdata('mess', 'Đã thêm thành công');
                redirect(admin_url('user/listuser'));
            }
        }
        $this->load->view('admin/index', $data);
    }

    function listuser()
    {
        $data = array();
        $data['temp'] = 'admin/user/list';
        $data['user'] = $this->user_model->get_list();
        $this->load->view('admin/index', $data);
    }

    function suauser()
    {
        $data = array();
        $id = $this->uri->segment(4);
        $data['temp'] = 'admin/user/edit';
        $user = $this->user_model->get_info($id);
        $data['user'] = $user;

        if ($this->input->post()) {
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('isadmin', 'isadmin', 'required');


            if ($this->form_validation->run()) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $isadmin = $this->input->post('isadmin');

                $input = array('username' => $username, 'password' =>$password, 'isadmin'=>$isadmin);

                $this->user_model->update($id, $input);
                $this->session->set_flashdata('mess', 'Đã sửa thành công');
                redirect(admin_url('user/listuser'));
            }
        }
        $this->load->view('admin/index', $data);
    }

    function xoauser($id)
    {
        $id = $this->uri->segment(4);
        $this->user_model->delete($id);
        $this->session->set_flashdata('mess', 'Bạn vừa xóa 1 user');
        redirect(admin_url('user/listuser'));
    }
}
?>