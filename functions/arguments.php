<?php require_once '../includes/header.php'; ?>
<pre>
<?php
echo "<b>Function arguments</b>\n";

function takes_array($input)
{
  echo "$input[0] + $input[1] = ", $input[0]+$input[1];
}
$input = array(1,2);
takes_array($input);
echo "<hr>";


echo "<b>Making arguments be passed by reference</b>\n";
function add_some_extra(&$string)
{
  $string .= 'and something extra.';
}
$str = 'This is a string, ';
add_some_extra($str);
echo $str."<hr>";    //s outputs 'This is a string, and something extra.'


echo "<b>Default argument values</b>\n";
function makecoffee($type = "cappuccino")
{
  return "Making a cup of $type.\n";
}
echo makecoffee();
echo makecoffee(null);
echo makecoffee("espresso");
echo "<hr>";


echo "<b>Incorrect usage of default function arguments</b>\n";
function makeyogurt($type = "acidophilus", $flavour)
{
  return "Making a bowl of $type $flavour.\n";
}
//Warning:  Missing argument 2 for makeyogurt()
echo makeyogurt("raspberry");   // won't work as expected
echo makeyogurt("raspberry", "flavour");   // won't work as expected
echo "<hr>";


echo "<b>Variable-length argument lists PHP5.6</b><hr>";
//PHP 5.6
/*
function sum(...$numbers) {
  $acc = 0;
  foreach ($numbers as $n) {
    $acc += $n;
  }
  return $acc;
}
echo sum(1, 2, 3, 4);
*/


echo "<b>Using ... to provide arguments PHP5.6</b><hr>";
/*
function add($a, $b) {
  return $a + $b;
}

echo add(...[1, 2])."\n";

$a = [1, 2];
echo add(...$a);
*/


echo "<b>Accessing variable arguments in PHP 5.5 and earlier</b>\n";
echo "func_num_args(), func_get_arg(), and func_get_args()\n";
echo "func_num_args: Returns the number of arguments passed into the current user-defined function.\n";
echo "func_get_args: Returns an array in which each element is a copy of the corresponding member of the current user-defined function's argument list.\n";

function sum() {
  $acc = 0;
  foreach (func_get_args() as $n) {
    $acc += $n;
  }
  return $acc;
}

echo sum(1, 2, 3, 4);   //10
echo "\n\n";



function foo()
{
  $numargs = func_num_args();
  echo "Number of arguments: $numargs<br />";
  if ($numargs >= 2) {
    echo "Second argument is: " . func_get_arg(1) . "<br />";
  }
  $arg_list = func_get_args();
  for ($i = 0; $i < $numargs; $i++) {
    echo "Argument $i is: " . $arg_list[$i] . "<br />";
  }
}

foo(1, 2, 3);
/*
Number of arguments: 3<br />
Second argument is: 2<br />
Argument 0 is: 1<br />
Argument 1 is: 2<br />
Argument 2 is: 3<br />
 */


function test($sum)
{
  $acc = 0;
  foreach (func_get_args() as $n) {
    $acc += $n;
  }
  return $acc;
}

echo "\n";
echo test(1, 2, 3 ,4);
echo "\n";


function test2($sum, $sum2)
{
  return $sum;
}

//print 1
echo test2(1);    //Warning:  Missing argument 2 for test2()

?>
</pre>
<?php require_once '../includes/footer.php'; ?>

