<?php
  $from = filter_input(INPUT_POST, 'from');
  $body = filter_input(INPUT_POST, 'body');
  mb_language('Japanese');
  mb_send_mail("wasbook@example.jp" , "問い合わせ",
	  "以下の問い合わせがあった"\n\n" . $body,
	  "From: " .$from);
  ?>
<body>
送信
</body>
