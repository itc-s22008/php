<?php
  session_start();
  $name = $_SESSION['name'] = fillter_input(INPUT_POST, name');
  $mail = $_SESSION['mail'] = fillter_input(INPUT_POST, mail');
?><head><title>個人情報の確認</title></head>
<body>
<form action="46-022.php" method="POST">
氏名:<input name="name" value=?<?php
      echo htmlspecialchars($name, ENT_COMPAT,  'UTF-8'); ?>"><br>

メール:<input name="mail" value=?<?php
      echo htmlspecialchars($mail, ENT_COMPAT,  'UTF-8'); ?>"><br>
<input type="submit" value="確認">
</form>
</body>
</html>

　

