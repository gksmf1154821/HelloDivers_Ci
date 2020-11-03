<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
class Mypage extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_profile($id){
        
        $this->db->where('id', $id);

        $result = $this->db->get('MEMBER');
        

        foreach ($result->result_array() as $row)
        {
            return $row;
        }
        
    }
}
