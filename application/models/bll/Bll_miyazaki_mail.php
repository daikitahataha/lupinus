<?php

class Bll_miyazaki_mail extends MY_model{

    public function send_email($title, $message, $email){
        $this->load->library('email');
        $this->config->load('email');

        $from = $this->config->item('from');
        $name = $this->config->item('from_name');

        $this->email->from($from, $name);
        $this->email->to($email);
        $this->email->subject($title);
        $this->email->message($message);

        $res = $this->email->send();
        return $res;


 
    }

}
?>
