<?php

class Dal_room extends MY_model{

  public function __construct(){
    parent::__construct();
    $this->load->model('bll/Bll_room');
  }

  public function dal_get_room_index(){

    $where_array['room.delete_flg'] = 0;
    $cover_flg_array['room_images.cover_flg'] = 1;

    $this->db->select('*')->from('room');
    $this->db->join('room_images', 'room.id = room_images.room_id');
    $this->db->where($where_array);
    $this->db->where($cover_flg_array);
    $this->db->order_by('room.id', 'ASC');

    $ret = $this->db->get()->result_array();
    return $ret;
  }

  public function dal_get_room_detail($id){
    $this->db->select('*')->from('room');
    $this->db->where('room.id', $id);
    //$this->db->where('delete_flg', 0);

    $res = $this->db->get()->result_array();
    if(!empty($res[0])){

      $this->db->select('*');
      $this->db->where('room.id', $id);

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

  public function dal_get_next_url_name($base_id){
      $this->db->select('*')->from('room');
      $this->db->where('id', $base_id['next_id']);

      $array = $this->db->get()->result_array();

      if(!empty($array)){
        $res = $array[0]['place'];
      }else{
        $res = FALSE;
      }
      return $res;
  }

  public function dal_get_back_url_name($base_id){
    $this->db->select('*')->from('room');
    $this->db->where('id', $base_id['back_id']);

    $array = $this->db->get()->result_array();

    $res = $array[0]['place'];
    return $res;
  }

}

?>
