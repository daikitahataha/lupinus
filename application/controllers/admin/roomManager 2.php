<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('Admin_abstract.php');

class roomManager extends Admin_abstract {

    public function __construct(){
 	  parent::__construct();

    $s_id = $this->session->userdata('s_id');
    $permission_status = $this->session->userdata('permission_status');
    if(!empty($s_id)){
      $permission_status = 1;
    }else{
      redirect('admin/login/login/index');
    }
	}

	public function index()
	{
		$this->load->view('admin/roomManager/index');
	}

  public function create(){
    $this->load->view('admin/roomManager/create');
  }

  public function detail(){
    $this->load->view('admin/roomManager/detail');
  }

  public function register(){
    $this->load->view('admin/roomManager/register');
  }

  public function edit(){
    $this->load->view('admin/roomManager/edit');
  }

  public function update(){
    $this->load->view('admin/roomManager/update');
  }

  public function delete(){
    $this->load->view('admin/roomManager/delete');
  }


}
