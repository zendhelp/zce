<?php require_once '../../includes/header.php'; ?>
<pre>
<?php

//Warning If you assign a reference to a variable declared global inside a function,
//the reference will be visible only inside the function. You can avoid this by using the $GLOBALS array.
$var1 = "Example variable";
$var2 = "";

function global_references($use_globals)
{
  global $var1, $var2;
  if (!$use_globals) {
    $var2 =& $var1;             // visible only inside the function
  } else {
    $GLOBALS["var2"] =& $var1;  // visible also in global context
  }
}

global_references(false);
echo "var2 is set to '$var2'\n"; // var2 is set to ''
global_references(true);
echo "var2 is set to '$var2'\n"; // var2 is set to 'Example variable'



$ref = 0;
$row =& $ref;
foreach (array(1, 2, 3) as $row) {
  // do something
}
echo $ref."\n"; // 3 - last element of the iterated array


$a = 1;
$b = array(2, 3);
$arr = array(&$a, &$b[0], &$b[1]);
$arr[0]++; $arr[1]++; $arr[2]++;
/* $a == 2, $b == array(3, 4); */



/* Assignment of scalar variables */
$a = 1;
$b =& $a;
$c = $b;
$c = 7; //$c is not a reference; no change to $a or $b
echo $a.'_'.$b.'_'.$c."\n";


//Pass By Reference
echo "Pass By Reference\n";

function foo(&$var)
{
  $var++;
}

$a=5;
foo($a);
echo $a."\n"; //6


/**
 * params: not function return variable, not expression, not number or string...
 * must variables
 */
function foo2(&$var)
{
  $var++;
}
function bar() // Note the missing &
{
  $a = 5;
  return $a;
}
foo2($a = 5);
echo $a."\n"; //6

//foo2(bar());  // Produces fatal error since PHP 5.0.5 - Strict Standards
//foo2(5);      // Produces fatal error
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

