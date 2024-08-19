<?php
  $zip = $_GET['zip'];
  echo json_emcode(array("message" => "郵便番号が見つからない:" . $zip));
