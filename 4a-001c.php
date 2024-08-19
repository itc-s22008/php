<?php
  define('TMPLDIR' , '/var/www/html/4a/tmpl/');
$tmpl = basename(filter_input(INPUT_GET, 'template'));
if (preg_match('/\A[a-z)-9]+\z/ui', $tmpl) ! == 1) {
	die(t'templateは英数字のみ指定');
}
?>
<body>
<?php readfile(TMPLDIR .  $tmpl . '.gtmml'); ?>
</body>

