<?php

class User extends CI_Controller{

    public function index(){
        redirect('user/authenticate');
    }
    
    public function authenticate(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        
        $this->load->model('user_model');
        $allowed = $this->user_model->authenticate($username,$password);
        
        if($allowed == true){
            redirect('tickets');
        } else {
            redirect('main/login');
        }
    }

}