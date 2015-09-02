<?php

class User_model extends CI_Model{
    
    
    public function authenticate($username,$password){
        
        $headers = array(); 
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Basic '. base64_encode($username.":".$password);

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://clockworks.ca/support/helpdesk/api/authorization");
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $output = curl_exec($curl); //json output from the api

        $json = json_decode($output, true); //Convert json to PHP array
        
        echo $json;
    }
    
}