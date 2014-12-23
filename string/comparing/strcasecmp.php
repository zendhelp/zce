<?php
/**
 * strcasecmp — Binary safe case-insensitive string comparison
 * Parameters
	
	str1
	The first string
	
	str2
	The second string
	
	Return Values
	
	Returns < 0 if str1 is less than str2; > 0 if str1 is greater than str2, and 0 if they are equal.
 */

$var1 = "Hello";
$var2 = "hello";
if (strcasecmp($var1, $var2) == 0) {
    echo '$var1 is equal to $var2 in a case-insensitive string comparison';
}