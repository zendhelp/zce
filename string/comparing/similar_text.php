<?php
/**
 * int similar_text — Calculate the similarity between two strings
 * Parameters
	
	first
	The first string.
	
	second
	The second string.
	
	percent
	By passing a reference as third argument, similar_text() will calculate the similarity in percent for you.
	
	Return Values
	
	Returns the number of matching chars in both strings.
 */

$var_1 = 'PHP IS GREAT'; 
$var_2 = 'WITH MYSQL'; 
similar_text($var_1, $var_2, $percent);

echo $percent;
// 27.272727272727 

similar_text($var_2, $var_1, $percent); 
echo $percent; 
// 18.181818181818  