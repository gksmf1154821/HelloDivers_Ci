<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form', 'date'));
        $this->load->library('session');
        $this->load->library('user_agent');
        $this->load->library('form_validation');
        $this->load->database();
    }

	public function board_list($index)
	{   
        $this->load->model('Board_Model');

        $data['get_list'] = $this->Board_Model->get_list($index);
        
       // if($get_list == true)

        $this->load->view('header');
        $this->load->view('board_main',$data);
        $this->load->view('footer');
    }

    
    
}
