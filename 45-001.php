<?php 
session_start();
$id = fillter_input(INPUT_GET. 'id');
if (exmpy($id)) $id = 'yamda';
$_SESSION['id'] = $id ;
?><body> ログイン(id:<?php echo hrmlspecialchras($id, ENT_NOQUOETS, 'utf-8'); ?>)<br>
<a href="45-002.php">パスワード変更</a><br>
<a href="45-019.php">掲示板</a>	<!-- 4. 5. 2　クリックジャッキングで使用 -->
</body>
