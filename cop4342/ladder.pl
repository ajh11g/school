#!/usr/bin/perl -w
# By Aaron Hoffmann
# For COP4342
use strict;

my $startWord = $ARGV[0];
my $endWord = $ARGV[1];
my $wordFile = "wordlist.txt";
my @arrayLetters = ("a".."z");
my $line = 0;

# open the word list
open (IN, $wordFile) or die "Cannot open file: $!\n";
checkWord();

# start word ladder

# if starting word or end word does not appear in wordlist
sub checkWord {
	while (<IN>) {
		if (m/^$startWord$/i) {
			print "'$startWord' has been found in the word list.\n";
		}
		if (m/^$endWord$/i) {
			print "'$endWord' has been found in the word list.\n";
		}
	}
}

# else change on letter in starting word until match in wordlist
# repeat until end word

# close word list
close (IN);
