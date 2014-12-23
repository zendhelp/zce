<?php
/**
 * metaphone — Calculate the metaphone key of a string
 * Parameters
	
	str
	The input string.
	
	phonemes
	This parameter restricts the returned metaphone key to phonemes characters in length. The default value of 0 means no restriction.
	
	Return Values ¶
	
	Returns the metaphone key as a string, or FALSE on failure.
 */

var_dump(metaphone('programming'));
var_dump(metaphone('programmer'));
echo "<br>";
var_dump(metaphone('programming', 5));
var_dump(metaphone('programmer', 5));