<?php

class Dal_room extends MY_model{

  public function __construct(){
    parent::__construct();
    $this->load->model('bll/Bll_room');
  }

  public function dal_get_room_index($param){

    if(!empty($param['order_by'])){
      $order_by = $param['order_by'];
    }

    $where_array['delete_flg'] = 0;
    $this->db->select('*');
    $this->db->where('delete_flg', $where_array);

    $ret = $this->db->get('room')->result_array();


  }

}

?>
