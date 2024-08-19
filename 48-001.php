<?php 
function getToken() {
	$s = openssl_random_pseudo_bytes(24);
	return base64_encode($s);
}

session_start();
session_regengerate_id(true);
$token = getToken();

setcookie('token', $token, 0, '', '', true, true);
$_SESSION['token;] = $token;
