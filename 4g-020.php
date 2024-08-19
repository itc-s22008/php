<?php
  session_start();
  if (empty($_SESSTION['mail'])) {
	  $_SESSION['mail'] = 'secret@example.jp';
  }

  header('Content-Type': application/json; charset=utf-8');
  echo json_encode(array(
  'mail' => $_SESSION['mail']));
