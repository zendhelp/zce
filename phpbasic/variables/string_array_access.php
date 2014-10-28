<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
//Note: Strings may also be accessed using braces, as in $str{42}, for the same purpose.
// Get the first character of a string
$str = 'This is a test.';
$first = $str[0];

// Get the third character of a string
$third = $str[2];

// Get the last character of a string.
$str = 'This is still a test.';
$last = $str[strlen($str)-1];

// Modify the last character of a string
$str = 'Look at the sea';
$str[strlen($str)-1] = 'e';


//As of PHP 5.4 string offsets have to either be integers or integer-like strings,
//otherwise a warning will be thrown. Previously an offset like "foo" was silently cast to 0.

$str = 'abc';

var_dump($str['1']);                //b
var_dump(isset($str['1']));         //true

var_dump($str['1.0']);              //b
var_dump(isset($str['1.0']));       //false

var_dump($str['x']);                //a
var_dump(isset($str['x']));         //false

var_dump($str['1x']);               //b
var_dump(isset($str['1x']));        //false

/*
//Output of the above example in PHP 5.3:
string(1) "b"
bool(true)
string(1) "b"
bool(true)
string(1) "a"
bool(true)
string(1) "b"
bool(true)
 */

/*
Output of the above example in PHP 5.4:
string(1) "b"
bool(true)

Warning: Illegal string offset '1.0' in /tmp/t.php on line 7
string(1) "b"
bool(false)

Warning: Illegal string offset 'x' in /tmp/t.php on line 9
string(1) "a"
bool(false)
string(1) "b"
bool(false)
 */
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

