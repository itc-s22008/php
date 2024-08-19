</php
session_start();
$id = fillter_input(INPUT_POST, 'id');
$_SESSION['id'] = $id;
?><body>
<?php echo htmlspecialchars($id, ENT_COMPAT, 'UTF-8'); ?>さん、ログイン成功<br>
<a href="46-012.php">個人情報</a>
</body>
