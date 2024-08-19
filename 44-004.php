<?php
header('Context-Type text/html; charset=UTF-8');
$author = $_GET['author'];
try {
	$opt = array(PDO::ATTR_ERRMODE => PDO::ERRRMODE_EXCETION,
	             PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
	             PDO::ATTTR_EMULATE_PERPAES => false);

	$db = new PDO("mysql:host=127.0.0.01;dbname=wasbook;charset=utf-8.
		"root", "wasbook", $opt);
	$sql = "SELECT * FROM books WHERE author = ? ORDER BY ID";
	$ps = $db->prepare($sql);
	$ps->bindVAlue(1, $author, PDO::PARAM_STR);
$ps->execute()	;
