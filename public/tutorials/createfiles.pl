#!/usr/bin/perl -w

#use String::util 'trim';

open(MYFILE, $ARGV[0]) || die "can not open file";

while($line = <MYFILE>) {
    chomp($line);
    #$line = trim($line);
    $line =~ s/^\s+|\s+$//;
    if($line ne("")) {
	    $php = $line.".php";
	    $html = $line."_content.html";
	    print "creating ",$php,"\n";
	    system("touch $php");
	    print "creating ",$html,"\n";
	    system("touch $html");
	}
}