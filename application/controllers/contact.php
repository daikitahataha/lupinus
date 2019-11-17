<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {


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

	public function index()
	{

    $data['room']['extension'] = $this->images_extension;
		$this->load->view('contact/form', $data);
	}

	public function thanks(){

		$this->form_validation->set_rules('name', 'お名前', 'required');
		$this->form_validation->set_rules('company', '貴社名', 'required');
		$this->form_validation->set_rules('email', 'メールアドレス', 'required|valid_email');
		$this->form_validation->set_rules('tel', '電話番号', 'required|integer');
		$this->form_validation->set_rules('authorization', '物件の許認可状況', '');
    $this->form_validation->set_rules('right', '物件の権利状況', '');
    $this->form_validation->set_rules('address', '物件住所', '');
    $this->form_validation->set_rules('number', '検討中の物件戸数', '');
    $this->form_validation->set_rules('area', '面積', '');
    $this->form_validation->set_rules('layout', '間取り', '');
    $this->form_validation->set_rules('URL', 'URL', '');
    $this->form_validation->set_rules('age', '築年数', '');
    $this->form_validation->set_rules('consultation', 'ご相談内容', 'required');
    $this->form_validation->set_rules('origin', 'きっかけ', '');

    $error_msg = array(
      'required' => '　※%sを入力してください',
      'valid_email' => '　※メールアドレスの形式で入力してください',
      'integer' => '　※%sは数字で入力してください'
    );

		$this->form_validation->set_message($error_msg);

		$res = $this->form_validation->run();

    if($res){

      $post = $this->input->post();

      $check_post = check_param($post);

      $this->load->library('parser');

      $this->config->load('app', TRUE);

      $title = '7garden | 一点物サイト【lupinus】からお問い合わせです';
      $message = $this->parser->parse('email/template_email', $check_post, TRUE);
      $email = $this->config->item('app')['contact_email'];

      $this->load->model('bll/Bll_email');

      $result = $this->Bll_email->send_email($title, $message, $email);

      $data['room']['extension'] = $this->images_extension;
      $this->load->view('contact/thanks' , $data);
      //$this->load->view('email/template_email');
    }else{
      $this->load->view('contact/form');
    }
  }

}
