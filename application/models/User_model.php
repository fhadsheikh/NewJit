<?php

class User_model extends CI_Model{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function authenticate(){
        
        $headers = array(); 
        $headers[] = 'Content-Type: application/json';
        $headers[] = "content-length:40";
        $headers[] = 'Authorization: Basic '.$this->session->credentials;

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://clockworks.ca/support/helpdesk/api/authorization");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $output = curl_exec($curl); //json output from the api
        curl_close ($curl);

        $json = json_decode($output, true); //Convert json to PHP array
        
        if($json['CompanyId']== "1"){
            $allowed = true;
        } else {
            $allowed = false;
        }
        
        $this->session->set_userdata($json);
        $this->session->set_userdata('LoggedIn',true);
        
        return $allowed;
    }
    
    public function logout(){
        $this->session->sess_destroy();
    }
    
    
}