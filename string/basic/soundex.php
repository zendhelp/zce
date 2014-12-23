<?php
/**
 * soundex — Calculate the soundex key of a string
 * Parameters
	str
	The input string.
	
	Return Values
	
	Returns the soundex key as a string.
 */

echo soundex("Euler")       == soundex("Ellery");    // E460
echo soundex("Gauss")       == soundex("Ghosh");     // G200
echo soundex("Hilbert")     == soundex("Heilbronn"); // H416
echo soundex("Knuth")       == soundex("Kant");      // K530
echo soundex("Lloyd")       == soundex("Ladd");      // L300
echo soundex("Lukasiewicz") == soundex("Lissajous"); // L222