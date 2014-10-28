<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
$a = 1;
include 'b.inc';


$a = 1; /* global scope */
function test()
{
  echo $a; /* Undefined variable: - reference to local scope variable */
}
test();



echo "The global keyword\n";
$a = 1;
$b = 2;

function Sum()
{
  global $a, $b;

  $b = $a + $b;
}

Sum();
echo "$b\n";  //3


echo "Instead of global\n";
$a = 1;
$b = 2;

function Sum2()
{
  $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

Sum2();
echo $b;  //3



echo "Example demonstrating superglobals and scope\n";
function test_global()
{
  // Most predefined variables aren't "super" and require
  // 'global' to be available to the functions local scope.
  global $HTTP_POST_VARS;

  echo $HTTP_POST_VARS['name'];

  // Superglobals are available in any scope and do
  // not require 'global'. Superglobals are available
  // as of PHP 4.1.0, and HTTP_POST_VARS is now
  // deemed deprecated.
  echo $_POST['name'];
}



echo "Declaring static variables\n";
function foo(){
    static $int = 0;          // correct
    static $int = 1+2;        // wrong  (as it is an expression)
    static $int = sqrt(121);  // wrong  (as it is an expression too)

    $int++;
    echo $int;
}



echo "References with global and static variables\n";
function test_global_ref() {
  global $obj;
  $obj = &new stdclass;
}

function test_global_noref() {
  global $obj;
  $obj = new stdclass;
}

test_global_ref();
var_dump($obj); //NULL
test_global_noref();
var_dump($obj); //object(stdClass)(0) {}

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

