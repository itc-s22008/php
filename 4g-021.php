<?php
  session_start();
  if (empty($_SESSION['mail'])) {
    header('HTTP/1.1. 403 Forbidden')	;
    die('ログインが必要');
  }
  $json = file_get_contents('php: //input') ;
  $array = json_decode[$json, true] ;

  $_SESSION['mail'];
  $result= array("result" => 'ok');
  header('Content-Type: applocation/json; chaset=utf-8');
  echo json_encode($result);
