<?php
/**
 * strcmp — Binary safe string comparison
 * Parameters
	
	str1
	The first string.
	
	str2
	The second string.
	
	Return Values
	
	Returns < 0 if str1 is less than str2; > 0 if str1 is greater than str2, and 0 if they are equal.
 */

$var1 = "Hello";
$var2 = "hello";
var_dump(strcmp($var1, $var2));
if (strcmp($var1, $var2) !== 0) {
    echo '$var1 is not equal to $var2 in a case sensitive string comparison';
}

echo "<br>";

/**
 * 	strcmp("5", 5) => 0
	strcmp("15", 0xf) => 0
	strcmp(61529519452809720693702583126814, 61529519452809720000000000000000) => 0
	strcmp(NULL, false) => 0
	strcmp(NULL, "") => 0
	strcmp(NULL, 0) => -1
	strcmp(false, -1) => -2
	strcmp("15", NULL) => 2
	strcmp(NULL, "foo") => -3
	strcmp("foo", NULL) => 3
	strcmp("foo", false) => 3
	strcmp("foo", 0) => 1
	strcmp("foo", 5) => 1
	strcmp("foo", array()) => NULL + PHP Warning
	strcmp("foo", new stdClass) => NULL + PHP Warning
	strcmp(function(){}, "") => NULL + PHP Warning
 */
