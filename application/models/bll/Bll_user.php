<?php

class Bll_user extends MY_model{

  public function __construct(){
    parent::__construct();
    $this->load->model('dal/Dal_user');
  }

  public function insert($param){
    $this->Dal_user->dal_insert($param);
  }

  public function search_admin($param){
    $ret = $this->Dal_user->dal_search_admin($param);

    return $ret;
  }




}

?>
