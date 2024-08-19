<?php
  session_start();
  $_SESSION['userid'] = 'select';
  $_SESSION['userid'] = 'select@example.jp';
?><body>
ログイン<br>
ID: <?php echo htmlspecialchars($_SESSION['userid']); ?><br>
メールアドレス: <?php echo htmlspecialchars($_SESSION['mail']); ?>
</body>
