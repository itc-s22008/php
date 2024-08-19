<?php
  define('UPLOADPATH', '/var/upload');
  
  function get_upload_file_name($tofile) {

	  $info = pathinfo($tofile);
	  $ext = strtolower($info['extension']);
	  if ($ext != 'pdf') {
		  die('拡張子はpdfを指定');
	  }

$imgurl = 'rc-013.php?file=' . basename($tofile);
?>
<body>
<a href="<?php echo htmlspecialchars($imgurl); ?> ?"><?php
echo htmlspecialchars($orgfile, ENT_NOQUOTES, 'UTF-8' ?>
をアップロード</a><br>
</body>
