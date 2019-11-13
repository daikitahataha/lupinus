<?php

class Bll_room extends MY_Model{

    public function __construct(){
        parent::__construct();
        $this->load->model('dal/Dal_room');
    }

    public function get_room_index($param){
        $ret = $this->Dal_room->dal_get_room_index($param);

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


    public function update_imagename($param){

        $data['room_id'] = $param['id'];
        $data['name'] = $param['image_name'];
        $ret = $this->db->insert('room_images',$data);
        return $ret;
	 }








}

?>
