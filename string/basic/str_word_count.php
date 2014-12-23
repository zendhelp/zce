<?php
/**
 * str_word_count — Return information about words used in a string
 * tr_word_count ( string $string [, int $format = 0 [, string $charlist ]] )
 * Parameters

	string
	The string
	
	format
	Specify the return value of this function. The current supported values are:
	
	0 - returns the number of words found
	1 - returns an array containing all the words found inside the string
	2 - returns an associative array, where the key is the numeric position of the word inside the string and the value is the actual word itself
	charlist
	A list of additional characters which will be considered as 'word'

 */


$str = "Hello fri3nd, you're
       looking          good today!";

echo '<pre>';
print_r(str_word_count($str, 1));
print_r(str_word_count($str, 2));
print_r(str_word_count($str, 1, '3'));
echo '</pre>';
echo str_word_count($str)."<br>";


$str = 'hello 333 funny 553e 12';

echo '<pre>';
print_r(str_word_count($str, 1));
print_r(str_word_count($str, 2));
print_r(str_word_count($str, 1, '123'));
print_r(str_word_count($str, 1, '0..9'));
echo '</pre>';
echo str_word_count($str)."<br>";				//3
echo str_word_count($str, 0, '0..9')."<br>";	//5