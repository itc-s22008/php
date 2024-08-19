<?php
  $callback = $_GET['callback'];
  $json = json_encode(array('time' => data('G:i')));
  echo "$callback($json);";
