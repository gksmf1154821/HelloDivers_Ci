<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
class Login_Model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function login_check($id,$pw){
        $this->db->where('id', $id);  

        $this->db->where('password', $pw);  

        $result = $this->db->get('MEMBER');  //Query 실행

        if ( $result->num_rows() > 0)  { 
            return true; 
        }else{
            return false; 
        }
    }
    public function admin_check($id){
        $this->db->where('id', $id);

        $result = $this->db->get('MEMBER');
        
        $admin = "";
        
        foreach ($result->result() as $row)
        {
            $admin =  $row->level;
            
        }
        
        return $admin;
    }

    public function get_member($id){

        $this->db->where('id', $id);

        $result = $this->db->get('MEMBER');
        
        $name = "";
        
        foreach ($result->result() as $row)
        {
            $name =  $row->name;
            
        }
        
        return $name;

    }

    public function set_log($id,$ip,$browser,$platform,$login_time){

        $data = array(
            'id' => $id,
            'ip' => $ip,
            'browser' => $browser,
            'platform' => $platform,
            'login_time' => $login_time
        );
        
        $this->db->insert('LOGIN_LOG', $data);
    }

    public function update_day($id){

        $this->db->where('id', $id);

        $result = $this->db->get('MEMBER');
        
        foreach ($result->result() as $row)
        {
            $day =  $row->day;
        }
        $day = $day +1;

        $data = array('day' => $day);

        $where = "id = "."'$id'";

        $str = $this->db->update('MEMBER', $data, $where); //TODO 하루에 한번만 업데이트 되도록 수정해야함.

    }

}
