<?php
  $zip = $_GET['zip'];

  $jdon = '{"message": "郵便番号が見つからない:'   .$zip  . '"}';
  header('Content-Type: text/javascript; charset=utf-8');
  echo "callback_zip($json);";
