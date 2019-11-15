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


    public function insert_data($param){
		if (!empty($param)){
            $ret = $this->db->insert('room',$param);
			$blog_id = $this->db->insert_id();
            return $blog_id;
		}else{
			$ret = false;
			return $ret;
		}

	}

    public function update_data($post){
        if(!empty($post['place']) and !empty($post['start_date']) and !empty($post['room_name']) and !empty($post['room_addreess']) and !empty($post['room_ADR'])) {
            //部屋情報の更新
            $this->db->set('place',$post['place']);
            $this->db->set('start_date',$post['start_date']);
            $this->db->set('room_name',$post['room_name']);
            $this->db->set('room_addreess',$post['room_addreess']);
            $this->db->set('room_ADR',$post['room_ADR']);
            $this->db->where('id',$post['id']);
            $res = $this->db->update('room');

            //画像情報の更新
            $this->db->set('place',$post['place']);
            $this->db->set('start_date',$post['start_date']);
            $this->db->set('room_name',$post['room_name']);
            $this->db->set('room_addreess',$post['room_addreess']);
            $this->db->set('room_ADR',$post['room_ADR']);
            $this->db->where('id',$post['id']);
            $res2 = $this->db->update('room');

            //２件とも正常終了ならTRUEを返す
            if ($res & $res2) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function update_imagename($param){

        $data['room_id'] = $param['id'];
        $data['name'] = $param['image_name'];
        $ret = $this->db->insert('room_images',$data);
        return $ret;
	 }

   public function get_room_detail($id){
      $res = $this->Dal_room->dal_get_room_detail($id);

      return $res;
   }

   public function get_next_url_name($base_id){
      $res = $this->Dal_room->dal_get_next_url_name($base_id);

      return $res;
   }

   public function get_back_url_name($base_id){
      $res = $this->Dal_room->dal_get_back_url_name($base_id);

      return $res;
   }

}

?>
