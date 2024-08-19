session_start();
$token = fillter_input(INPUT_POST, 'token');
if (empty($_SESSION['token']) || $token !== $_SESSION['token']) {
 die('正規の画面から');
}
