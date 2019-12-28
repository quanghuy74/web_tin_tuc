<?php

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('nhomtin_model');
        $this->load->model('user_model');
        $this->load->model('baiviet_model');
        $this->load->model('video_model');
        $this->load->model('phanhoi_model');
    }

    function index()
    {
        $data = array();
        $data['temp'] = 'admin/home';

        $data['sobv'] = $this->baiviet_model->get_list();
        $data['sovideo'] = $this->video_model->get_list();
        $data['souser'] = $this->user_model->get_list();
        $data['sont'] = $this->nhomtin_model->get_list();
        $data['phanhoi'] = $this->nhomtin_model->get_list();
        $this->load->view('admin/index', $data);
    }

    function logout()
    {
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('isadmin');
        redirect(admin_url('login'));
    }

    function phanhoi()
    {
        $data = array();
        $data['temp'] = 'admin/phanhoi';
        $data['phanhoi'] = $this->phanhoi_model->get_list();
        $this->load->view('admin/index', $data);
    }

    function delete()
    {
        $id = $this->uri->segment(4);
        $this->session->set_flashdata('mess', 'xóa thành công');
        $this->phanhoi_model->delete($id);
        redirect(admin_url('home/phanhoi'));
    }
}

?>