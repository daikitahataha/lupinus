<?php

class Dal_user extends MY_model{

  public function __construct(){
    parent::__construct();
    $this->load->model('bll/Bll_user');
  }

  public function dal_insert($param){
    $this->db->insert('admin_user', $param);
  }

  public function dal_search_admin($param){
    $this->db->select('*')->from('admin_user');
    $ret = $this->db->where($param)->get()->result_array();

    return $ret;
  }
}

?>
