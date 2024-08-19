<?php
  session_start();
  if (empty($_SESSION['userid'])) {
	  header('HTTP/1.1 403 Forbidden');
	  error_log('**LOGIN require**');
	  die('ログインが必要');
  }
  if (empty($_SERVER['HTTP_X_/REQUESTED_WITH'])
	  || $_SERVER['HTTP_X_REQUESTED_WITH'] !== 'XMLHttpRequest') {
	  header('HTTP/1.1 403 Forbidden');
	  error_log('**CSRF detected**');
	  die('正規の経路から使用');
  }
