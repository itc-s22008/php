<?php
  $mail = filter_input(INPUT_POST, 'mail');
  mb_language('Japanese');
  mb_send_mail($mail, "受付",
	  "お問い合わせ",
	  "From: webmaster@example.jp");
?>
<body>
お問い合わせ
</body>  
