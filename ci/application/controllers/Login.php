<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('date');
        $this->load->helper('alert');
        $this->load->library('session');
        $this->load->library('user_agent'); //브라우져 체크
    }
    
    public function login(){

        $id = $this->input->post('id');
        $password = $this->input->post('password');

        $this->load->model('Login_Model'); //

        $login_check = $this->Login_Model->login_check($id,$password);
        
        
        if($login_check == true){

            $name = $this->Login_Model->get_member($id);
            $admin = $this->Login_Model->admin_check($id);
            //로그 작성
            $ip_address = $this->input->ip_address(); //접속 IP 가져옴

            $login_time = now();

            $newdata = array( //Session
                'id'  => $id,
                'name' => $name,
                'ip_address' => $ip_address,
                'admin' => $admin,
                'logged_in' => TRUE
            );
    
            $this->session->set_userdata($newdata);

            if ($this->agent->is_browser()){
                $browser = $this->agent->browser().' '.$this->agent->version();
            }elseif ($this->agent->is_robot()){
                $browser = $this->agent->robot();
            }elseif ($this->agent->is_mobile()){
                $browser = $this->agent->mobile();
            }else{
                $browser = 'Unidentified User Agent';
            }
            $platform = $this->agent->platform(); 
            
           $this->Login_Model->set_log($id,$ip_address,$browser,$platform,$login_time); //접속 로그 작성.

           $this->Login_Model->update_day($id); //접속일 업데이트

           redirect('/Main/index/');

        }else if($login_check == false){ //로그인 실패시
            echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
 		    alert('로그인 실패! \n 로그인 정보를 확인해주세요.', '/Main/index');
        }

    }
    public function logout(){
         $this->session->sess_destroy();
 		echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
 		alert('로그아웃 되었습니다', '/Main/index');
    }
}
