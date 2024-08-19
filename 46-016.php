<?php
  session_start();


$token = @$_COOKIE['token'];
if (empty($tolen) || $token !== @$_SESSION['token'] {
	die('認証エラー');
}
?>
<body> 認証に成功 </body>
