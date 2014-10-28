<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
// Valid constant names
define("DOO",     "something");
define("FOO",     "something");
define("FOO2",    "something else");
define("FOO_BAR", "something more");

define("CONSTANT", "Hello world.");
echo CONSTANT."\n"; // outputs "Hello world."
echo Constant."\n"; // outputs "Constant" and issues a notice.

define("GREETING", "Hello you.", true);
echo GREETING."\n"; // outputs "Hello you."
echo Greeting."\n"; // outputs "Hello you."

// Invalid constant names
define("2FOO",    "something");

// This is valid, but should be avoided:
// PHP may one day provide a magical constant
// that will break your script
define("__FOO__", "something");
echo constant('__FOO__');   //something


echo "constant()\n";
var_dump(constant('I_DONT_EXIST')); //warning "Couldn't find constant I_DONT_EXIST"
var_dump(constant('FALSE'));        //no warning, output: bool(false)
define('FALSE', TRUE);
var_dump(constant('FALSE'));        //output: bool(true)
var_dump(constant(FALSE));          //warning "Couldn't find constant
// but...
var_dump(constant('false'));        // output: bool(false)
var_dump(FALSE);                    // output: bool(false);


define(TRUE, FALSE);
var_dump(constant('TRUE'));        // output: bool(false)
echo TRUE."\n";


if(1) {
    define("IFBLOCK", 1);
    echo IFBLOCK."\n";
}

define("ADDITIONAL", 1+2);
echo ADDITIONAL."\n";

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

