<?php
/**
 * count_chars — Return information about characters used in a string
 * Parameters

	string
	The examined string.
	
	mode
	See return values.
	
	Return Values
	
	Depending on mode count_chars() returns one of the following:
	
	0 - an array with the byte-value as key and the frequency of every byte as value.
	1 - same as 0 but only byte-values with a frequency greater than zero are listed.
	2 - same as 0 but only byte-values with a frequency equal to zero are listed.
	3 - a string containing all unique characters is returned.
	4 - a string containing all not used characters is returned.
 */

$data = "Two Ts and one F.";
echo '<pre>';
print_r(count_chars($data, 0));
print_r(count_chars($data, 1));
print_r(count_chars($data, 2));
print_r(count_chars($data, 3));
print_r(count_chars($data, 4));
echo '</pre>';