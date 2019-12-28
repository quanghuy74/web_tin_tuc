<?php

class Video extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('video_model');
    }
    function add(){
        $data = array();
        $this->load->model('nhomtin_model');
        $data['nhomtin'] = $this->nhomtin_model->get_list();
        $data['temp'] = 'admin/video/add';
        if ($this->input->post()) {
            $this->form_validation->set_rules('TieuDe', 'TieuDe', 'required');
            $this->form_validation->set_rules('Link', 'Link', 'required');
            $this->form_validation->set_rules('nhomtin', 'nhomtin', 'required');

            if ($this->form_validation->run()) {
                $Ngay = date("y/m/d");
                $TieuDe = $this->input->post('TieuDe');
                $link = $this->input->post('Link');
                $nhomtin = $this->input->post('nhomtin');
                $user = $this->session->userdata('user');

                $input = array('TieuDe' => $TieuDe, 'Link' =>$link, 'nhomtin'=>$nhomtin, 'username'=>$user, 'Ngay'=>$Ngay);

                if($this->video_model->create($input)){
                    $this->session->set_flashdata('mess', 'Đã thêm thành công');
                    redirect(admin_url('video/listvideo'));
                }else{
                    echo 'error';
                }

            }
        }
        $this->load->view('admin/index', $data);
    }
    function listvideo()
    {
        $data = array();
        $data['temp'] = 'admin/video/list';
        $data['video'] = $this->video_model->get_list();
        $this->load->view('admin/index', $data);
    }
    function edit(){
        $data = array();
        $id = $this->uri->segment(4);
        $this->load->model('nhomtin_model');
        $data['nhomtin'] = $this->nhomtin_model->get_list();
        $data['video'] = $this->video_model->get_info($id);
        $data['temp'] = 'admin/video/edit';

        if ($this->input->post()) {
            $this->form_validation->set_rules('TieuDe', 'TieuDe', 'required');
            $this->form_validation->set_rules('Link', 'Link', 'required');
            $this->form_validation->set_rules('nhomtin', 'nhomtin', 'required');

            if ($this->form_validation->run()) {
                $Ngay = date("y/m/d");
                $TieuDe = $this->input->post('TieuDe');
                $link = $this->input->post('Link');
                $nhomtin = $this->input->post('nhomtin');
                $user = $this->session->userdata('user');

                $input = array('TieuDe' => $TieuDe, 'Link' =>$link, 'nhomtin'=>$nhomtin, 'username'=>$user, 'Ngay'=>$Ngay);

                if($this->video_model->update($id, $input)){
                    $this->session->set_flashdata('mess', 'Đã thêm thành công');
                    redirect(admin_url('video/listvideo'));
                }else{
                    echo 'error';
                }

            }
        }
        $this->load->view('admin/index', $data);
    }
    function delete($id)
    {
        $id = $this->uri->segment(4);
        $this->video_model->delete($id);
        $this->session->set_flashdata('mess', 'xóa thành công');
        redirect(admin_url('video/listvideo'));
    }
}
?>