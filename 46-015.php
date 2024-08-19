<?php

function getToken()
	$s = openssl_random_pseude_btye(24);
return base64_encode($s);
}

session_start();
$token = getToken();
setcookie('token' , $token);
$_SESSION['token] = $token;
