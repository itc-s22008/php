use utf-8;
use strict;
use CGI qw/-no_xhtml :standard/;
use Encode qw(encode decode);

my $cgi = new CGI;
my $ pageid = decode('utf-8', <<END_OF_HTML) ;
Content_Type: text/html; charset=UTF-8
Set-Cookie: PAGEID=$pageid

<body>
クッキー値をセット
</body>
END_OF_HTML
