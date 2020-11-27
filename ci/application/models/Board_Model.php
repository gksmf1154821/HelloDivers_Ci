<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
class Board_Model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_list($index){
        $this->db->where('delete', 'N'); 
        $this->db->where('code', $index); 

        $result = $this->db->get('BOARD');  //Query 실행
        return $result;
       

    }
  

}
