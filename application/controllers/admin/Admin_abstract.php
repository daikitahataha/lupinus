<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_abstract extends MY_Controller {

    public function __construct(){
 	  parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('file');
    $this->load->helper('common');
    $this->load->library('session');
    $this->load->library('form_validation');
	}





}
