<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('Admin_abstract.php');

class Login extends Admin_abstract {

    public function __construct(){
 	  parent::__construct();
    $this->load->model('bll/Bll_user');
	  }

    public function index(){
      $this->load->view('admin/login/index');
    }

    public function exec(){
      $this->form_validation->set_rules('email', 'メールアドレス', 'required');
      $this->form_validation->set_rules('password', 'パスワード', 'required|md5');

      $res = $this->form_validation->run();

      if($res){
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');

        $user = $this->Bll_user->search_admin($data);

            if(!empty($user[0]['name'])){
              $sessions['name'] = $user[0]['name'];
              $sessions['email'] = $user[0]['email'];
              $sessions['word'] = $user[0]['word'];
              $sessions['s_id'] = $this->session->session_id;
              $sessions['permission_status'] = $user[0]['permission_status'];
              $this->session->set_userdata($sessions);

              $this->load->view('admin/roomManager/create');
            }else{
              $this->load->view('admin/login/index');
            }
      }
    }


}

?>
