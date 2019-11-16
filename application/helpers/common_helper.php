<?php

function d($param){
  print '<pre>';
  var_dump($param);
}

function dd($param){
  print '<pre>';
  var_dump($param);
  exit;
}

function check_param($param){
  if(!isset($param['company'])){
    $param['company'] = '入力なし';
  }

  if(!isset($param['right'])){
    $param['right'] = '入力なし';
  }elseif($param['right'] = 1){
    $param['right'] = '所有';
  }elseif($param['right'] = 2){
    $param['right'] = '転貸';
  }elseif($param['right'] = 3){
    $param['right'] = '建築予定';
  }elseif($param['right'] = 4){
    $param['right'] = '購入予定';
  }elseif($param['right'] = 5){
    $param['right'] = $param['other2'];
  }

  if(empty($param['address'])){
    $param['address'] = '入力なし';
  }

  if(empty($param['number'])){
    $param['number'] = '入力なし';
  }

  if(empty($param['area'])){
    $param['area'] = '入力なし';
  }

  if(empty($param['layout'])){
    $param['layout'] = '入力なし';
  }

  if(empty($param['URL'])){
    $param['URL'] = '入力なし';
  }

  if(!isset($param['age'])){
    $param['age'] = '入力なし';
  }

  if(!isset($param['authorization'])){
    $param['authorization'] = '入力なし';
  }elseif($param['authorization'] = 1){
    $param['authorization'] = '特になし';
  }elseif($param['authorization'] = 2){
    $param['authorization'] = '旅館・ホテル（旅館業法）';
  }elseif($param['authorization'] = 3){
    $param['authorization'] = '簡易宿所';
  }elseif($param['authorization'] = 4){
    $param['authorization'] = $param['other1'];
  }

  if(!isset($param['origin'])){
    $param['origin'] = '入力なし';
  }elseif($param['origin'] = 1){
    $param['origin'] = '検索エンジン';
  }elseif($param['origin'] = 2){
    $param['origin'] = 'SNSやブログ';
  }elseif($param['orogin'] = 3){
    $param['origin'] = '知人/他社の紹介';
  }elseif($param['orogin'] = 4){
    $param['origin'] = '他サイト、ブログ、掲示板の口コミ';
  }elseif($param['origin'] = 5){
    $param['origin'] = '本・雑誌・新聞';
  }elseif(!isset($param['other3'])){
    $param['origin'] = $param['other3'];
  }

  return $param;
}

function show_room_images($param){
  if(!empty($param)){
    $res = base_url('uploads/images/' . $param);
    return $res;
  }else{
    $res = base_url('static/images/patrick-perkins-23 2.png');
    return $res;
  }
}

function return_next_url($id){

  if($id > 9){
    $next_id = 1;
  }else{
    $next_id = $id + 1;
  }

  $res =  base_url('statics/roomDetail/' . $next_id);

  return $res;
}

function return_back_url($id){

  if($id == 1){
    $back_id = 10;
  }else{
    $back_id = $id - 1;
  }
  $res =  base_url('statics/roomDetail/' . $back_id);

  return $res;
}

function return_next_id($id){
  if($id > 9){
    $res = 1;
  }else{
    $res = $id + 1;
  }

  return $res;
}

function return_back_id($id){
  if($id == 1){
    $res = 10;
  }else{
    $res = $id - 1;
  }
  return $res;
}

function return_images_extension($param){
  $browser = strpos($param, 'Chrome');

  if($browser == false){
    return FALSE;
  }else{
    return TRUE;
  }
}

 ?>
