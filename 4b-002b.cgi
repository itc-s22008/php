se strict;
use CGi;
use utf8;
use Encode
my $q = new CGI
my $mail = $q->param('mail');

open (my $pide, '|-' 'usr/sbin/sendmail', $mail) or die $s!;

print $pipe encode('UTF-8' , <<EndOfmail);
Tp: $mail
From: webmaster\@example.jp
subject: =?UTF-8?B?5y?x44GR5LuY44GR44G+44GX44GF?=
Content-Type: text/plain; Charset="UTF-8"
Content-Transfer-Encording: 8bit

お問い合わせを受付
EndOfMail

close $pipe;

print encode('UTF-8', <<EndOfHTML);
Content-Type: text/html; charset=UTF-8

<body>
お問い合わせ
</body>
EndOfHTML
