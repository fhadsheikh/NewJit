<?php

class Tickets_model extends CI_Model{
    
    public $json;
    
    public function loadAllTickets(){
        
        $headers = array(); 
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Basic '.$this->session->credentials;
        
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://clockworks.ca/support/helpdesk/api/tickets?count=50");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $output = curl_exec($curl); //json output from the api
        curl_close ($curl);

        $this->json = json_decode($output, true); //Convert json to PHP array
        
        foreach($this->json as $key => $ticket){
            if($ticket['Status'] == 'In progress'){
                $this->json[$key]['Color'] = 'success';
            } else if($ticket['Status'] == 'New'){
                $this->json[$key]['Color'] = 'danger';
            } else if($ticket['Status'] == 'Resolved'){
                $this->json[$key]['Color'] = 'info';
            } 
            
            $str = $ticket['LastUpdated'];
            preg_match( "#/Date\((\d{10})\d{3}(.*?)\)/#", $str, $match );
            $date = date( "Y-m-d h:i", $match[1] );
            
            $this->json[$key]['Date'] = $date;
            
        }
        
        return $this->json; 
    }
    
    public function allOpenTickets(){
          $headers = array(); 
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Basic '.$this->session->credentials;
        
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://clockworks.ca/support/helpdesk/api/tickets?count=50&mode=unclosed");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $output = curl_exec($curl); //json output from the api
        curl_close ($curl);

        $this->json = json_decode($output, true); //Convert json to PHP array
        
        $openTickets = $this->json;
        
        foreach($openTickets as $key => $ticket){
            if($ticket['Status'] == 'In progress'){
                $openTickets[$key]['Color'] = 'success';
            } else if($ticket['Status'] == 'New'){
                $openTickets[$key]['Color'] = 'danger';
            } else if($ticket['Status'] == 'Resolved'){
                $openTickets[$key]['Color'] = 'info';
            } 
            
            $str = $ticket['LastUpdated'];
            preg_match( "#/Date\((\d{10})\d{3}(.*?)\)/#", $str, $match );
            $date = date( "Y-m-d h:i", $match[1] );
            
            $openTickets[$key]['Date'] = $date;
            
        }
        
        return $openTickets; 
    
    }
    public function openTickets(){
          $headers = array(); 
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Basic '.$this->session->credentials;
        
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://clockworks.ca/support/helpdesk/api/tickets?count=50&mode=unclosed");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $output = curl_exec($curl); //json output from the api
        curl_close ($curl);

        $this->json = json_decode($output, true); //Convert json to PHP array
        
        foreach($this->json as $ticket){
            if($ticket['UpdatedByPerformer'] != true){
                $openTickets[] = $ticket;
            }
        }
        
        foreach($openTickets as $key => $ticket){
            if($ticket['Status'] == 'In progress'){
                $openTickets[$key]['Color'] = 'success';
            } else if($ticket['Status'] == 'New'){
                $openTickets[$key]['Color'] = 'danger';
            } else if($ticket['Status'] == 'Resolved'){
                $openTickets[$key]['Color'] = 'info';
            } 
            
            $str = $ticket['LastUpdated'];
            preg_match( "#/Date\((\d{10})\d{3}(.*?)\)/#", $str, $match );
            $date = date( "Y-m-d h:i", $match[1] );
            
            $openTickets[$key]['Date'] = $date;
            
        }
        
        return $openTickets; 
    
    }
    
    public function unassigned(){
          $headers = array(); 
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Basic '.$this->session->credentials;
        
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://clockworks.ca/support/helpdesk/api/tickets?count=50&mode=unclosed");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $output = curl_exec($curl); //json output from the api
        curl_close ($curl);

        $this->json = json_decode($output, true); //Convert json to PHP array
        
        foreach($this->json as $ticket){
            if($ticket['AssignedToUserID'] == null){
                $openTickets[] = $ticket;
            }
        }
        
        foreach($openTickets as $key => $ticket){
            if($ticket['Status'] == 'In progress'){
                $openTickets[$key]['Color'] = 'success';
            } else if($ticket['Status'] == 'New'){
                $openTickets[$key]['Color'] = 'danger';
            } else if($ticket['Status'] == 'Resolved'){
                $openTickets[$key]['Color'] = 'info';
            } 
            
            $str = $ticket['LastUpdated'];
            preg_match( "#/Date\((\d{10})\d{3}(.*?)\)/#", $str, $match );
            $date = date( "Y-m-d h:i", $match[1] );
            
            $openTickets[$key]['Date'] = $date;
            
        }
        
        return $openTickets; 
    
    }
    public function assignedtome(){
          $headers = array(); 
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Basic '.$this->session->credentials;
        
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://clockworks.ca/support/helpdesk/api/tickets?count=50&mode=unclosed");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $output = curl_exec($curl); //json output from the api
        curl_close ($curl);

        $this->json = json_decode($output, true); //Convert json to PHP array
        
        foreach($this->json as $ticket){
            if($ticket['AssignedToUserID'] == $this->session->UserID){
                $openTickets[] = $ticket;
            }
        }
        
        foreach($openTickets as $key => $ticket){
            if($ticket['Status'] == 'In progress'){
                $openTickets[$key]['Color'] = 'success';
            } else if($ticket['Status'] == 'New'){
                $openTickets[$key]['Color'] = 'danger';
            } else if($ticket['Status'] == 'Resolved'){
                $openTickets[$key]['Color'] = 'info';
            } 
            
            $str = $ticket['LastUpdated'];
            preg_match( "#/Date\((\d{10})\d{3}(.*?)\)/#", $str, $match );
            $date = date( "Y-m-d h:i", $match[1] );
            
            $openTickets[$key]['Date'] = $date;
            
        }
        
        return $openTickets; 
    
    }
    public function critical(){
          $headers = array(); 
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Basic '.$this->session->credentials;
        
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://clockworks.ca/support/helpdesk/api/tickets?count=50&mode=unclosed");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $output = curl_exec($curl); //json output from the api
        curl_close ($curl);

        $this->json = json_decode($output, true); //Convert json to PHP array
        
        foreach($this->json as $ticket){
            if($ticket['Priority'] == 2){
                $openTickets[] = $ticket;
            }
        }
        
        foreach($openTickets as $key => $ticket){
            if($ticket['Status'] == 'In progress'){
                $openTickets[$key]['Color'] = 'success';
            } else if($ticket['Status'] == 'New'){
                $openTickets[$key]['Color'] = 'danger';
            } else if($ticket['Status'] == 'Resolved'){
                $openTickets[$key]['Color'] = 'info';
            } 
            
            $str = $ticket['LastUpdated'];
            preg_match( "#/Date\((\d{10})\d{3}(.*?)\)/#", $str, $match );
            $date = date( "Y-m-d h:i", $match[1] );
            
            $openTickets[$key]['Date'] = $date;
            
        }
        
        return $openTickets; 
    
    }
    
    public function generalStats(){
        
        $i = 0;
        $unanswered = 0;
        $unassigned = 0;
        $assignedtome = 0;
        $critical = 0;
        
        foreach($this->json as $ticket){
            if($ticket['Status'] != "Resolved"){
                $i++;
            }
        }
        foreach($this->json as $ticket){
            if($ticket['UpdatedByPerformer'] != true){
                $unanswered++;
            }
        }
        foreach($this->json as $ticket){
            if($ticket['AssignedToUserID'] == null){
                $unassigned++;
            }
        }
        foreach($this->json as $ticket){
            if($ticket['AssignedToUserID'] == $this->session->UserID){
                $assignedtome++;
            }
        }
        foreach($this->json as $ticket){
            if($ticket['Priority'] == 2){
                $critical++;
            }
        }
        
        $count['open'] = $i;
        $count['unanswered'] = $unanswered;
        $count['unassigned'] = $unassigned;
        $count['assignedtome'] = $assignedtome;
        $count['critical'] = $critical;
        
        return $count;
    }
    
    
    
}