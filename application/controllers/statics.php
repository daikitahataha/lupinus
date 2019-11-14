<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statics extends CI_Controller {

  public function __construct(){
 	  parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('file');
    $this->load->model('bll/Bll_room');
    $this->load->helper('common');
    $this->load->driver('cache', array(
      'adapter' => 'memcached',
      //'adapter' => 'file'
      )
    );
	}

	public function index(){
    var_dump($this->cache->cache_info());

		$this->load->view('statics/index');
	}

  public function about(){
    $this->load->view('statics/about');
  }

  public function roomIndex(){

    $data['room'] = $this->Bll_room->get_room_index();

    $this->load->view('statics/roomIndex', $data);
  }

  public function roomDetail($id){

    $data['room'] = $this->Bll_room->get_room_detail($id);
    $data['room'][0]['next_url'] = return_next_url($id);
    $data['room'][0]['back_url'] = return_back_url($id);

    $base_id['next_id'] = return_next_id($id);
    $base_id['back_id'] = return_back_id($id);

    $data['room'][0]['next_url_name'] = $this->Bll_room->get_next_url_name($base_id);
    $data['room'][0]['back_url_name'] = $this->Bll_room->get_back_url_name($base_id);

    /*$this->cache->save($id, $data['room'], 600);
    $my_data = $this->cache->get($id);*/

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
    $this->load->view('statics/fee');
  }

  public function flow(){
    $this->load->view('statics/flow');
  }


}
