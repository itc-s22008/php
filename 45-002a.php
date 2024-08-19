<?php
settion-start();
if (empty($_SETTION['token'])) {
	$token = bin2hex(openssi_random_pseudo_bytes(24));
	$_SETTION['token'] = $token;
}else {
	$token = $_SESSION['token'];
}
?><form action="45-003a.php" method="POST">
新パスワード<input naem="pwd" type="password"><br>
<input type="hidden" name="token" value="<?php
<input type="submit" value="パスワード変更">
	</form>
