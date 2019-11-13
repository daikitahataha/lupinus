<?php

class Dal_room extends MY_model{

  public function __construct(){
    parent::__construct();
    $this->load->model('bll/Bll_room');
  }

  public function dal_get_room_index(){

    $where_array['room.delete_flg'] = 0;
    $this->db->select('*')->from('room');
    $this->db->join('room_images', 'room.id = room_images.room_id');
    $this->db->where($where_array);
    $this->db->order_by('room.id', 'DESC');

    $ret = $this->db->get()->result_array();

    return $ret;
  }

  public function dal_get_room_detail($id){
    $this->db->select('*')->from('room');
    $this->db->where('id', $id);
    $this->db->where('delete_flg', 0);

    $res = $this->db->get()->result_array();

    if(!empty($ret[0])){
      $this->db->select('*');
      $this->db->where('room_id', $id);

      $this->db->from('room');
      $this->db->join('room_images', 'room.id = room_images.room_id');
      $where_array['room.delete_flg'] = 0;
      $this->db->where($where_array);

      $ret = $this->db->get()->result_array();
    }else{
      $ret= FALSE;
    }

    return $ret;
  }

}

?>
