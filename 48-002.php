<?php
  session_start();

$token = @$_COOKIE['token'];
if (empty($token) || ! hash_equals(@$_SESSION['token'], $token)) {
	die ('認証エラー　トークンが不正');
}
?>
<body> トークンをチェックし、認証状態を確認した </body>
