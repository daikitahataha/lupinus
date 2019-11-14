<?php

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
  }

  if(!isset($param['origin'])){
    $param['origin'] = '入力なし';
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

  if($id = 1){
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
  if($id = 1){
    $res = 10;
  }else{
    $res = $id - 1;
  }
  return $res;
}

 ?>
