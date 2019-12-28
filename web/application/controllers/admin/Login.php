<?php

class Login extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
    function index(){
        if ($this->input->post()) {
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user = $this->user_model->get_info($username);
            if ($this->form_validation->run()) {
                if($user){
                    if($user[0]['password'] == $password){
                        if ($user[0]['isadmin'] == 1){
                            $this->session->set_userdata('user',$username);
                            $this->session->set_userdata('isadmin',1);
                            redirect(admin_url('home'));
                        }else{
                            $this->session->set_userdata('user',$username);
                            $this->session->set_userdata('isadmin',0);
                            redirect(user_url('home'));
                        }
                    }else {
                        $this->session->set_flashdata('mess', 'username hoặc password không chính xác');
                    }
                }else{
                    $this->session->set_flashdata('mess', 'username hoặc password không chính xác');
                }
            }
        }
        $this->load->view('login');
    }
}
?>