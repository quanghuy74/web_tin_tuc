<?php

class Home extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('nhomtin_model');
        $this->load->model('baiviet_model');
        $this->load->model('binhluan_model');
        $this->load->model('video_model');
        $this->load->model('phanhoi_model');
        $this->load->model('user_model');



    }
    function index(){
        $data = array();
        $data['nhomtin'] = $this->nhomtin_model->get_list();
        $data['baiviet'] = $this->baiviet_model->get_list();
        $data['temp'] = 'user/home';
        $this->load->view('user/index', $data);
    }
    function logout(){
        $this->session->unset_userdata('user');
        redirect(admin_url('login'));
    }
    function listbaiviet($id){
        $data = array();
        $data['nt'] = $this->nhomtin_model->get_info($id);
        $data['baiviet'] = $this->baiviet_model->get_list();
        $data['nhomtin'] = $this->nhomtin_model->get_list();
        $data['temp'] = 'user/list_bv';
        $this->load->view('user/index', $data);
    }
    function tinhot(){
        $data = array();
        $data['baiviet'] = $this->baiviet_model->get_list();
        $data['nhomtin'] = $this->nhomtin_model->get_list();
        $data['temp'] = 'user/tinhot';
        $this->load->view('user/index', $data);
    }
    function baiviet($id){
        $data = array();
        $bv = $this->baiviet_model->get_info($id);
        $LuotXem = $bv[0]->LuotXem+1;
        $input = array('LuotXem' => $LuotXem);
        $this->baiviet_model->update($id,$input);
        $data['bv'] = $bv;
        $data['baiviet'] = $this->baiviet_model->get_list();
        $data['nhomtin'] = $this->nhomtin_model->get_list();
        $data['binhluan'] = $this->binhluan_model->get_list();

        if ($this->input->post()) {
            $this->form_validation->set_rules('comment', 'comment', 'required');
            if ($this->form_validation->run()) {
                $comment = $this->input->post('comment');
                $user = $this->session->userdata('user');
                $ngay = date("y/m/d");

                $input = array('IDTin' => $id, 'NoiDung'=>$comment, 'Username'=>$user, 'NgayBL'=>$ngay);
                $this->binhluan_model->create($input);
            }
        }
        $data['temp'] = 'user/baiviet';
        $this->load->view('user/index', $data);
    }
    function tinvideo(){
        $data = array();
        $data['baiviet'] = $this->baiviet_model->get_list();
        $data['nhomtin'] = $this->nhomtin_model->get_list();
        $data['video'] = $this->video_model->get_list();
        $data['temp'] = 'user/tinvideo';
        $this->load->view('user/index', $data);
    }
    function dangky(){
        $this->load->view('dangky');
        if ($this->input->post()) {
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');

            if ($this->form_validation->run()) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $input = array('username' => $username, 'password'=>$password, 'isadmin'=>0);
                if(!$this->user_model->get_info($username)){
                    $this->user_model->create($input);
                    $this->session->set_userdata('user', $username);
                    $this->session->set_userdata('user', 0);

                    redirect(user_url('home'));
                }else{
                    $this->session->set_flashdata('mess', 'Tên đã tồn tại. vui lòng đặt tên khác');
                    redirect(user_url('home/dangky'));

                }

            }
        }
    }
    function phanhoi(){
        $data = array();
        if ($this->input->post()) {
            $this->form_validation->set_rules('message', 'message', 'required');
            $this->form_validation->set_rules('subject', 'subject', 'required');
            if ($this->form_validation->run()) {
                $message = $this->input->post('message');
                $subject = $this->input->post('subject');
                $user = $this->session->userdata('user');
                $ngay = date("y/m/d");

                $input = array('NoiDung' => $message, 'tieude'=>$subject, 'Username'=>$user, 'Ngay'=>$ngay);
                $this->phanhoi_model->create($input);
                redirect(user_url('home'));
            }
        }
        $data['temp'] = 'user/phanhoi';
        $this->load->view('user/index', $data);
    }
    function about(){
        $data = array();
        $data['temp'] = 'user/aboutus';
        $this->load->view('user/index', $data);
    }
}
?>