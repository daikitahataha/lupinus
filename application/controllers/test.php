<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

  public function __construct(){
 	  parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('file');
    $this->load->model('bll/Bll_room');
    $this->load->helper('common');
    $this->load->driver('cache');
    // $this->load->driver('cache');
	}

  public function memcached_count()
  {
      //$this->load->driver('cache', array('adapter' => 'memcached'));
      $this->benchmark->mark('my_mark_start');

      if (!$count = $this->cache->get("count")) {
          $count = 0;
          //1億回ループ
          for ($i = 0; $i < 100000000; $i++) {
              $count += 1;
          }
          //キャッシュに60秒保持
          $this->cache->save("count", $count, 60);
      }

      $this->benchmark->mark('my_mark_end');

      print "カウント数:" . $count . "<br />";
      print "秒数:" . $this->benchmark->elapsed_time('my_mark_start', 'my_mark_end');

      /*$data = 'aaa';
      $this->cache->save('1' ,$data);

      $res = $this->cache->get('1');
      dd($res);*/
  }

  public function memcached_caching_test(){
    $this->load->driver('cache', array('adapter' => 'memcached'));

    /*if ($this->cache->is_supported('memcached')) {
      echo '成功';
      $this->cache->is_supported('memcached');
    }
    else {
      echo '失敗';
      $this->cache->is_supported('memcached');
    }*/
    $data = 'aaa';

    $this->cache->save('1' ,$data);

    echo $this->cache->get('1');


  }



}
