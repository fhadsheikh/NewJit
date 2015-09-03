<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tickets extends CI_Controller{
    
    
    public function __construct(){
        parent::__construct();
        if(!$this->session->LoggedIn){
            redirect('main/login');
        }
    }
    public function index(){
        $this->load->model('Tickets_model');
        $data['tickets'] = $this->Tickets_model->allOpenTickets();
        $data['count'] = $this->Tickets_model->generalStats();
        $this->load->view('tickets', $data);
    }
    public function open(){
        $this->load->model('Tickets_model');
        $data['tickets'] = $this->Tickets_model->openTickets();
        $data['count'] = $this->Tickets_model->generalStats();
        $this->load->view('tickets', $data);
    }
    public function unassigned(){
        $this->load->model('Tickets_model');
        $data['tickets'] = $this->Tickets_model->unassigned();
        $data['count'] = $this->Tickets_model->generalStats();
        $this->load->view('tickets', $data);
    }
    public function assignedtome(){
        $this->load->model('Tickets_model');
        $data['tickets'] = $this->Tickets_model->assignedtome();
        $data['count'] = $this->Tickets_model->generalStats();
        $this->load->view('tickets', $data);
    }
    public function critical(){
        $this->load->model('Tickets_model');
        $data['tickets'] = $this->Tickets_model->critical();
        $data['count'] = $this->Tickets_model->generalStats();
        $this->load->view('tickets', $data);
    }
    public function ticket($id){
        $this->load->model('Ticket_model');
        $data['ticket'] = $this->Ticket_model->ticketInfo($id);
        $data['replies'] = $this->Ticket_model->getReplies($id);
        $this->load->view('ticket', $data);
    }
    
    
}