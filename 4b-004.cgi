use strict;
use utf-8;
use open ':utf-8';
use CGI;

print "Content-Type: text/plain; charset=UTF-8\r\n\r\n";

my $q = new CGI;
my $file = $q->param('file');
open (IN, $file) or die $!;
print <IN>;
close IN;
