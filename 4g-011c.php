<?php
  $zip = $_GET['zip'];
   header('Content-Type: application/json; charset=utf-8');
   header('X-Content-Type-Options: nosniff');
   echo json_encode(array("messsage" => "郵便番号が見つからない:" . $zip),
   JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);	   
