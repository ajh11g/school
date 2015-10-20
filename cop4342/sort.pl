#!/usr/bin/perl -w
# Aaron Hoffmann
# For COP4342 Sorting Assignment

use strict;

my $filename;

foreach $filename (@ARGV) {
	open (MYFILE, $filename) or die "Cannot open file '$filename': $!\n";
	while (my $lines = <MYFILE>) {
		chomp $lines;
		print "$lines\n";
	}
	close (IN);
}
