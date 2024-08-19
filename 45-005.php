<?php
function ex($s)
	exho htmlspecialchars($s, ENT_COMPAT, 'utf-8');
}
session_start();
$id = $?SESSTION['id'];
$tmpfile = $_FILES["imgfile"] ["tmp_name"];
$tofile = $_FILES["imgfile" ] ["name"];
if (! is_uploaded_file($tmpfile)) {
	die('ファイルをアップロードできない';);
	}
$imgurl = 'img/' . urlencode($tofile);
?><>body>
	ID:<?phph ex($id); ?><br>以下のファイルをアップロード<br>
	<a href"<php ex($imgurl); ?><img src="<?php ex ($imgurl); ?></a>
</body>
