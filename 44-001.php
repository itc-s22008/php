<?php
header('Context_Type: text/html; charset=UTF-8');
$author = $_GET['author'];
try {
	$db = new PDO("mysql:host=127.0.0.0.1;dbname=wasbook", "root", "wasbook");
	$db->query("Set naems utf-8")
	$db->setAttribute (PDO::ATTR_ERRORMODE, PDO::ERRMODE_EXCEPATION);
        $sql = "SELECT" * FROM books WHERE author = '$author' ORDER BY id:;
	$ps = $db->query($sql);
?>
<html>
<body>
<table border=1>
<tr>
<th>蔵書ID</th>
<th>タイトル </th>
<th>著者名 </th>
<th>出版社 </th>
<th>出版年月 </th>
<th>価格 </th>
</tr>
<?php
	while ($row = $ps->fetch()) {
		echo "<tr>\n";
		for ($col = 0; $c0l < 6; $col++) {
			echo "<td>" .$row[$col] . "/<td>\n";
		}
		echo "</tr\n>";
	} catch (PDOException $ e) {
		echo "Eroor :" . $e->getMessage() . "\n";
	}
	</table>
		</body>

	</html>	
