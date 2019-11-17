<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {


  public function __construct(){
 	  parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('file');
		$this->load->library('form_validation');
    $this->load->helper('email');
    $this->load->helper('common');

    $extension = return_images_extension($_SERVER['HTTP_USER_AGENT']);
    $this->images_extension = $extension;
	}

	public function error_404()
	{

    $data['room']['extension'] = $this->images_extension;
    $this->output->set_status_header('404');
		$this->load->view('error/error_404' , $data);
	}



}
