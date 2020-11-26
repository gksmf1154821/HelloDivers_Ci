<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypage extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form', 'date'));
        $this->load->library('session');
        $this->load->helper('alert');
        $this->load->library('user_agent');
        $this->load->library('form_validation');
        
    }
    
    public function mypage(){
        $id = $this->session->userdata['id'];
        $this->load->model('Mypage_model'); 

        $get_profile = $this->Mypage_model->get_profile($id);
        $this->load->view('header');
        $this->load->view('mypage', $get_profile);
        $this->load->view('footer');

    }
    public function member_modify(){
        $id = $this->session->userdata['id'];

        $this->load->model('Mypage_model'); 

        $get_profile = $this->Mypage_model->get_profile($id);
        $this->load->view('header');
        $this->load->view('mypage_modify', $get_profile);
        $this->load->view('footer');

    }
    public function modify_action($id){
        $password = $this->input->post('password');
        $name = $this->input->post('name');
        $sex = $this->input->post('sex');
        $phone = $this->input->post('phone');
        $address = $this->input->post('address');
        $info = $this->input->post('info');
        $photo = $this->input->post('photo');

        //upload
        $config['upload_path']          = '/var/www/html/ci/uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048000;
        $config['max_width']            = 6000;
        $config['max_height']           = 6000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('photo'))
        {   
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            return false;
        }
        else
        {
            $data2 = array('photo' => $this->upload->data());
            $photo = $this->upload->data('file_name');
        }

        $data = array( //Session
            'password'  => $password,
            'name' => $name,
            'sex' => $sex,
            'phone' => $phone,
            'address' => $address,
            'info' => $info,
            'photo' => "uploads/".$photo,
        );

        $this->load->model('Mypage_model'); 

        $update_profile = $this->Mypage_model->update_profile($id,$data);

        if($update_profile == true){
            echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
 		    alert('수정 성공! \n 로그인 정보를 확인해주세요.', '/Mypage/mypage');
        }else{
            echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
 		    alert('수정 실패! \n 로그인 정보를 확인해주세요.', '/Mypage/member_modify');
        }

    }
    public function delete_action($id){
        
    }

    
    
}
