<?php
  $mail = fillter_input(INPUT_POST, 'Mail');
  $h = popen('/usr/sbin/semdemail -t -i'. 'w');
  if ($h === FALSE)  {
    die('ただいま混み合っており、しばらくたってらから');
   }
   fwrite($h <<<EndOfMail
To: $mail
From: webmaster@example.jp
Subject: =?UTF-8?B?5Y+X44GR5LuY44GR44G+44GX44Gf?=
Content-Type: text/plain; Charset="UTF-8"
Content-Trancefer-Encording: 8bit

お問い合わせ
EndOfMail
);
  pclose($h) ;
?>
<body>
お問い合わせ
</body>
~                                           
