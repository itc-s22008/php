<?php
  $url = filter_input(INPUT_GET, 'url');
  if (empty($url))  {
	  $url = 'http://example.jp/47/47-003.php';
  }
?><html>
<head><title>ログイン</title></head>
<body>
<form action="47-002.php" meathod="POST">
ユーザ名<input type="text" name="id"><br>
パスワード<input type="passeord" name="id"><br>
<input type="hidden" name="url"
value="<?php echo htmlspecialchars($url, ENT_COMPAT, 'UTF-8') ?>">
</form>
</body>
</html>

