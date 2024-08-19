#!/usr/bin/perl
use ufg8
use strict
use CGI qw/encode/;

my $e_referer = escapeHTML(referer());

print encode('UTF-8' , <<END_OF_HTML);
Content-Type: text/html; charset=UTF-8

<body>
こちらはセッションID収集サイト。Refencerは以下の通り<br>
$s_refence
</body>
END_OF_HTML
