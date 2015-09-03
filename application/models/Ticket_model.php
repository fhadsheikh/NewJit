<?php 

class Ticket_model extends CI_Model{
    
    public function ticketInfo($id){
        
        $headers = array(); 
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Basic '.$this->session->credentials;
        
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://clockworks.ca/support/helpdesk/api/ticket?id=$id");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $output = curl_exec($curl); //json output from the api
        curl_close ($curl);

        $this->json = json_decode($output, true); //Convert json to PHP array
        
        
        return $this->json; 
        
    }
    
    public function getReplies($id){
        $headers = array(); 
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Basic '.$this->session->credentials;
        
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://clockworks.ca/support/helpdesk/api/comments?id=$id");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $output = curl_exec($curl); //json output from the api
        curl_close ($curl);

        $this->json = json_decode($output, true); //Convert json to PHP array
        
        foreach($this->json as $key => $ticket){
            if($ticket['IsSystem']){
                $this->json[$key]['Color'] = 'bordertech';
            } else {$this->json[$key]['Color'] = 'borderclient';}
            
            $str = $ticket['CommentDate'];
            preg_match( "#/Date\((\d{10})\d{3}(.*?)\)/#", $str, $match );
            $date = date( "Y-m-d h:i", $match[1] );
            
            $this->json[$key]['date'] = $date;
            
        }
        
        
        return $this->json; 
    }
    
}