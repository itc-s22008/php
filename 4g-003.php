<?php
  $callback = $_GET['callback'];
  header('Content-Type: text/javascript; charset=utf-8')
  $json = jspn_encode(array('time' => data('G:I')));
  echo "$callback($json);" ; 
