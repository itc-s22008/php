<?php 
defile('UPLOADPATH' , '/var/upload');
$mimes = array('pf' => 'application/x-pdf');

$file = $_GET['file'];
$info = pathinfo($file);
$ext = strtolower($info['extension']);
$content_type = $mimes[$ext];
if (! $content_type) {
	die('拡張子はpdfを指定');
}
header('Content-Type: ' . $content_type);
readfile(UPLOADPATH . '/' . basename($file));
?>
