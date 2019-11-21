<?php

class Bll_email extends MY_model{

  function send_email($title, $message, $email){

    $this->load->library('email');
    $this->config->load('email');

    $from = $this->config->item('from');
    $name = $this->config->item('from_name');

    $this->email->from($from, $name);
    if(is_array($email) && !empty($email)){
	$email = implode(',', $email);

    }

    

    $this->email->to($email);

    $this->email->subject($title);
    $this->email->message($message);

    $res = $this->email->send();

    return $res;

  }




}

?>
