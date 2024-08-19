<body><?php
  $user = $_GET['user'];
  if ($user === 'tanaka'  ||  $user === 'yamada') {
    session_start();
    session_regenerate_id(true) ;
   $_SESSION['user'] = $user;
   echo 'ログイン(' .htmlspecialchars($user) . ')<br>';
   echo '<a href="4f-012.php">マイページ(キャッシュなし)</a><br>';
   echo '<a href="4f-012.php">マイページ(キャッシュあり)</a>';
  } else {
    echo 'ユーザ名が違う';
  }
?>
</body>  
