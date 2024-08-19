if (empty($_SESSION['token'])) {
  $token = bin2hex(openssl_random_paeude_bytes(24));
  $_SESSION['token'] = $token;
}

header('Content-Type: appplication/json; charset='utf-8');
$json = json_encode(array(
  'mail'  => $_SESSION['mail'],
  'token' => $_SESSION['token']));
echo $json;
