<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('Admin_abstract.php');

class Admin_user extends Admin_abstract {

    public function __construct(){
   	  parent::__construct();
      $this->load->model('bll/Bll_user');

      $s_id = $this->session->userdata('s_id');
      $permission_status = $this->session->userdata('permission_status');
      if(!empty($s_id)){
        $permission_status = 1;
      }else{
        redirect('admin/login/login/index');
      }
	  }

    public function create(){
      $this->load->view('admin/user/create');
    }

    public function register(){
      $post = $this->input->post();

      $res = $this->_user_building_validate();

      if($res){
        $data['name'] = $this->input->post('name');
        $data['password'] = $this->input->post('password');
        $data['email'] = $this->input->post('email');
        $data['word'] = $this->input->post('word');
        $this->Bll_user->insert($data);

        $this->load->view('admin/user/register');
      }else{
        $this->load->view('admin/user/create');
      }
    }

    public function delete(){

    }

    private function _user_building_validate(){
      $post = $this->input->post();
      $this->form_validation->set_rules('name', '名前', 'required');
      $this->form_validation->set_rules('password', 'パスワード', 'required|md5');
      $this->form_validation->set_rules('email', 'メールアドレス', 'required');
      $this->form_validation->set_rules('word', '一言', 'required');

      $res = $this->form_validation->run();

      if($res){
        return TRUE;
      }else{
        return FALSE;
      }
    }

}

?>
