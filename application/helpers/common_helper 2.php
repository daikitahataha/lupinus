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

 ?>
