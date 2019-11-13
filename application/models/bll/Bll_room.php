<?php

class Bll_room extends MY_Model{

  public function __construct(){
    parent::__construct();
    $this->load->model('dal/Dal_room');
  }

  public function get_room_index(){
    $ret = $this->Dal_room->dal_get_room_index();

    return $ret;
  }

  public function get_room_detail($id){
    $ret = $this->Dal_room->dal_get_room_detail($id);


    return $ret;
  }






}

?>
