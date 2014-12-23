<?php
/**
 * ltrim — Strip whitespace (or other characters) from the beginning of a string
 * Strip whitespace (or other characters) from the beginning of a string.
 * Parameters
	
	str
	The input string.
	
	character_mask
	You can also specify the characters you want to strip, by means of the character_mask parameter. Simply list all characters that you want to be stripped. With .. you can specify a range of characters.
	
	Return Values
	
	This function returns a string with whitespace stripped from the beginning of str. Without the second parameter, ltrim() will strip these characters:
 */

$word = 'stw_weight';
echo ltrim($word, 'stw_');		//eight


$text = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "<br>";


$trimmed = ltrim($text);
var_dump($trimmed);

$trimmed = ltrim($text, " \t.");
var_dump($trimmed);

$trimmed = ltrim($hello, "Hdle");
var_dump($trimmed);

// trim the ASCII control characters at the beginning of $binary
// (from 0 to 31 inclusive)
$clean = ltrim($binary, "\x00..\x1F");
var_dump($clean);
