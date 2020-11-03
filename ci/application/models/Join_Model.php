<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
class Join_Model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function id_check($id){
        $this->db->where('id', $id);  

        $result = $this->db->get('MEMBER');  //Query 실행

        if ( $result->num_rows() > 0)  { 
            return true; 
        }else{
            return false; 
        }
    }

    public function join_member($id,$password,$real_name,$email,$phone){
        
        $data = new stdClass();
        
        $data->id = $id;
        $data->password = $password;
        $data->name = $real_name;
        $data->email = $email;
        $data->phone = $phone;

        $result = $this->db->insert('MEMBER', $data);

        if($this->db->affected_rows() > 0){ // affected_rows() 값이 변한이 없다면 false를 리턴함. update구문 사용시 주의해야함.
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
}
