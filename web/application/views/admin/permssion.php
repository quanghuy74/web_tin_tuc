<?php
if ($this->session->userdata('user')){
    if($this->session->userdata('isadmin') == 0){
        redirect(admin_url('home'));
    }
}
else{
    redirect(admin_url('login'));
}
?>