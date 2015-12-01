#!/usr/bin/perl -w
# By Aaron Hoffmann
# For COP4342 ***Unable to fully complete assignment***
use strict;

my $startWord = $ARGV[0];
my $endWord = $ARGV[1];
my $wordFile = "wordlist.txt";
my @arrayLetters = ("a".."z");
my $line = 0;

# open the word list
open (IN, $wordFile) or die "Cannot open file: $!\n";
checkWord();
ladder();

# check to see if starting word or end word appears in wordlist
sub checkWord {
	while (<IN>) {
		if (m/^$startWord$/i) {		
			print "'$startWord' has been found.\n";
		}
		if (m/^$endWord$/i) {
			print "'$endWord' has been found.\n";
		}
	}
}

# word ladder start
# brute force method of checking each combination of letter in the starting word
# until match with a word on wordlist, move on to next possible combo
# until the ending word is reached

sub ladder {
	foreach my $letter (@arrayLetters) {
		$startWord = substr($startWord, 0, 1, "$letter");
	}
	print "$startWord";
}


# close word list
close (IN);
