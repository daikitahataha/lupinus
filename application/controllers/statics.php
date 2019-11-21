<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('User_abstract.php');

class Statics extends User_abstract {

  public function __construct(){
 	  parent::__construct();
    $this->load->model('bll/Bll_room');
    $this->load->driver('cache', array('adapter' => 'memcached'));

    $extension = return_images_extension($_SERVER['HTTP_USER_AGENT']);
    $this->images_extension = $extension;
	}

	public function index(){
    $data['room'] = $this->Bll_room->get_room_index();
    $data['room']['extension'] = $this->images_extension;
		$this->load->view('statics/index', $data);
	}

  public function about(){
    $data['room']['extension'] = $this->images_extension;
    $this->load->view('statics/about' , $data);
  }

  public function roomIndex(){

    $this->load->driver('cache', array('adapter' => 'memcached'));

    if (!empty($this->cache->get('room_index'))) {
      $data = $this->cache->get('room_index');
    } else {

    $data['room'] = $this->Bll_room->get_room_index();
    $this->cache->save('room_index', $data, 600);
  }

    if(judge_ua($_SERVER['HTTP_USER_AGENT']) == TRUE){

      foreach($data['room'] as $k => $val){
        if(!empty($data['room'][$k]['name'])){
          $data['room'][$k]['name'] = (str_replace('jpg', 'WebP', $data['room'][$k]['name']));
          $data['room'][$k]['name'] = str_replace('png' , 'WebP', $data['room'][$k]['name']);
        }
      }

    }

    $data['room']['extension'] = $this->images_extension;
    $this->load->view('statics/roomIndex', $data);
  }

  public function roomDetail($id)
  {

    $this->load->driver('cache', array('adapter' => 'memcached'));

    if (!empty($this->cache->get('room_id_'. $id))) {
      $data = $this->cache->get('room_id_' . $id);
    } else {

      $data['room'] = $this->Bll_room->get_room_detail($id);
      $data['room'][0]['next_url'] = return_next_url($id);
      $data['room'][0]['back_url'] = return_back_url($id);

      $base_id['next_id'] = return_next_id($id);
      $base_id['back_id'] = return_back_id($id);

      $data['room'][0]['next_url_name'] = $this->Bll_room->get_next_url_name($base_id);
      $data['room'][0]['back_url_name'] = $this->Bll_room->get_back_url_name($base_id);



      $this->cache->save('room_id_'. $id, $data, 600);


      }

      if(judge_ua($_SERVER['HTTP_USER_AGENT']) == TRUE){

        foreach($data['room'] as $k => $val){
          if(!empty($data['room'][$k]['name'])){
            $data['room'][$k]['name'] = (str_replace('jpg', 'WebP', $val['name']));
          }
        }

      }
      $data['room']['extension'] = $this->images_extension;
    $this->load->view('statics/roomDetail', $data);

  }

  public function roomDetailasakusa(){
    $this->load->view('statics/roomDetailasakusa');
  }

  public function roomDetail2(){
    $this->load->view('statics/roomDetail2');
  }

  public function roomDetail3(){
    $this->load->view('statics/roomDetail3');
  }

  public function roomDetail4(){
    $this->load->view('statics/roomDetail4');
  }

  public function roomDetail5(){
    $this->load->view('statics/roomDetail5');
  }

  public function roomDetail6(){
    $this->load->view('statics/roomDetail6');
  }

  public function roomDetail7(){
    $this->load->view('statics/roomDetail7');
  }

  public function roomDetail8(){
    $this->load->view('statics/roomDetail8');
  }

  public function roomDetail9(){
    $this->load->view('statics/roomDetail9');
  }

  public function roomDetail10(){
    $this->load->view('statics/roomDetail10');
  }


  public function fee(){
    $data['room']['extension'] = $this->images_extension;

    $this->load->view('statics/fee', $data);
  }

  public function flow(){
    $data['room']['extension'] = $this->images_extension;

    $this->load->view('statics/flow', $data);
  }


}
