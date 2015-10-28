#!/usr/bin/perl -w
# By Aaron Hoffmann
# For COP4342
use strict;

my $startWord = $ARGV[0];
my $endWord = $ARGV[1];
my $wordFile = "wordlist.txt";
my @arrayLetters = ("a".."z");

# open the word list
open (IN, $wordFile) or die "Cannot open file: $!\n";

print "Starting word: $startWord\n";
print "Ending word: $endWord\n";

# start word ladder


# close word list
close (IN);
