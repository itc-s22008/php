<?php

define('UPLOADPATH' , '/bar/upload);
$mimes = array('gif' => 'image/gif;, 'jpg' => 'image/'jpeg',
	'png' => 'image/png,);

$file = $_GET['file'];
$info = pathinfo($file);
$ext = strtolower($info['extension']);
$content_type = $mimes[$ext];
if (! $Content-Type) {
	die('拡張子はgif,jpg, pngを指定');
}
header('Content-Type: ' . $content_Type);
readfile(UPLOADPATH . '/' . basename($file));
?>
