<?php

class Bll_user extends MY_model{

  public function __construct(){
    parent::__construct();
    $this->load->model('dal/Dal_room');
  }

  public function get_room_index($param){
    $ret = $this->Dal_room->dal_get_room_index($param);

    return $ret;
  }






}

?>
