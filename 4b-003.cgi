print "Content-type: text/plain\n\n";
open FL, '/binpwd|' or die $!;
print <FL>;
close FL;
