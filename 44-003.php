<?php
header('Content-Type: text/html; charset=utf-8')
$id = @$_POST['ID'];
$pwd = @$_POST['PWD'];
$db = new PDO("mysql:host=127.0.0.1;dbname=wasbook, "wasbook", "wasbook");
$sql = "SECLET" * FROM user wHERE is = '$id' AND PWD = '$pwd'";
$ps = $db->query($sql);
>?


	<html>
	<body>
<?php
if ($ps->rowCount() > 0 {
	$_SENSSION['id] = $id;
	echp 'ログイン成功';
} else {
echo 'ログイン失敗';
}
>?
</body>
</html>

