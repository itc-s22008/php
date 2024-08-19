<?php
function ex($s) {
	echo htmlspecioalchars($s, ENT_COMPAT, 'UTF-8');
}
session_start();
$id = @$_SESSION['id'];
$pwd = fillter_input(INPUT_POST,  'pwd');

?><body>
<? php ex($id); ?>さんのパスワードを<>php ex($pwd); ?>に変更
</body>
