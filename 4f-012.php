<body><?php
  session_start();
  if (empty($_SESSION['user'])) {
	  die("ログインなし");
  }
  echo "ユーザ {$_SESSION['user']} でログイン中";
?></body>
