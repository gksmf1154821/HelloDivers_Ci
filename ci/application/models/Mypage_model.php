<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
class Mypage_model extends CI_Model {
    
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
    public function update_profile($id,$data){
        $this->db->where('id', $id);

        $result = $this->db->get('MEMBER');

        $where = "idx = "."'$id'";

        $str = $this->db->update('MEMBER', $data, $where);

        if($this->db->affected_rows() > 0){ // affected_rows() 값이 변한이 없다면 false를 리턴함. update구문 사용시 주의해야함.
            echo $this->db->insert_id(); // update성공시 pk값
            return true;
        }else{
            return false;
        }
        
    }
}
