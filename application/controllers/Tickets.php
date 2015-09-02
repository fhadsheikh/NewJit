<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tickets extends CI_Controller{
    
    public function index(){
        
        $this->load->view('tickets');
    }
    
    public function ticket(){
        $this->load->view('ticket');
    }
    
}