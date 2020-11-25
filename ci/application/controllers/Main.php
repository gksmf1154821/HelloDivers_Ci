<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form', 'date'));
        $this->load->library('session');
        $this->load->library('user_agent');
        $this->load->library('form_validation');
        $this->load->database();
    }

	public function index()
	{   
        $this->load->view('header');
        $this->load->view('main');
        $this->load->view('modal');
        $this->load->view('footer');
    }

    public function join1()
    {
        $this->load->view('header');
        $this->load->view('join1');
        $this->load->view('modal');
        $this->load->view('footer');
    }
    public function join2()
    {
        $this->load->view('header');
        $this->load->view('join2');
        $this->load->view('modal');
        $this->load->view('footer');
    }
    public function join3(){
        $this->load->view('header');

        $id = $this->input->post('id');
        $password = $this->input->post('password');
        $real_name = $this->input->post('real_name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');

        $this->load->model('Join_Model'); 
        
        $login_check = $this->Join_Model->join_member($id,$password,$real_name,$email,$phone);

        if($login_check == true){
            $this->load->view('join3');
        }else{
            echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
            alert('회원가입 실패! \n 에러로 인한 회원가입 불가. 문의부탁드립니다.', '/Main/index');
        }

        $this->load->view('footer');
    }
    
    
}
