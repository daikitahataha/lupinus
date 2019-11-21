<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('User_abstract.php');

class Error404 extends User_abstract {


  public function __construct(){
 	  parent::__construct();
		$this->load->library('form_validation');

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
