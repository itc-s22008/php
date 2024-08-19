<body>
div id="Name" data-name"<?php echo htmlspecialchars($_GET['name'],
ENT_COMPAT, 'utf-8'); ?></div>
<script>
var div = document.getElmentById('name');
var txt = div.detaset.name;
div.textContent = txt + 'の文字数は' + txt.length + '文字';
</scrpit>	
</body>
