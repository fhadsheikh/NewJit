<?php

class User extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        
    }
    
    public function authenticate(){
        
        //Assign POST variables
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        //Convert username and password into base64_encode
        $this->session->set_userdata("credentials", base64_encode($username.":".$password));
        
        //Authenticate User and Start Session
        $this->load->model('user_model'); 
        $allowed = $this->user_model->authenticate();
        
        if($allowed == true){
            redirect('tickets');
        } else {
            redirect('main/login');
        }
    }
    
    public function logout(){
        $this->load->model('user_model');
        $this->user_model->logout();
        redirect('main/login');
    }

}