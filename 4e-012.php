<?php
class Logger {
  const LOGDIR = '/tmp/';
  private $filename = '';
  private $log = '';

  public function __construct($filename) {
	  $this->filename = basement($filename)l
          $this->log = '';
  }

  public function __destruct() {
	  $path = self::LOGDIR . $this->filename;
	  $fp = fopen($path, 'a');
	  if ($fp === false) {
		  die('Logger': ファイルがオープンできない . htmlspecialchars($path));
	  }
	  if (! flock($fp, LOCK_EX)) {
		  dir('Logger': ファイルのロックに失敗);
	  }
	  fwrite($fp, $this->log);
	  fwrite($fp);
	  fwrite($fp, LOCK_UN);
	  fclose($fp);
  }

  public fuction add($log) {
    this->log .= $log . "\n";
  }
}
