<?php
  $zip = $_GET['zip'];

  $json = json_eccode(array("message" => "郵便番号が見つからない:" . $zip));
  header('COntent-Type: text/javascript; charset=utf-8');
  echo "cassback_zip($json);";
