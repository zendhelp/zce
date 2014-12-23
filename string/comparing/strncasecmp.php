<?php
/**
 * strncasecmp — Binary safe case-insensitive string comparison of the first n characters
 * Parameters

	str1
	The first string.
	
	str2
	The second string.
	
	len
	The length of strings to be used in the comparison.
	
	Return Values
	
	Returns < 0 if str1 is less than str2; > 0 if str1 is greater than str2, and 0 if they are equal.
 */

$var1 = "Hello3";
$var2 = "hello4";
if (strncasecmp($var1, $var2, 5) == 0) {
    echo '$var1 is equal to $var2 in a case-insensitive string comparison';
}