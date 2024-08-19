</php
  $mail = filter_input_INPUT_POST,  'mail');
  system("/usr/sbin/sendmail -i <template.txt $mail");
?>
<body>
お問い合わせ
</body>
