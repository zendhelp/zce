<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
echo "Return an item from the argument list - Returns the specified argument, or FALSE on error.<hr>";
function foo()
{
  $numargs = func_num_args();
  echo "Number of arguments: $numargs<br />\n";
  if ($numargs >= 2) {
    echo "Second argument is: " . func_get_arg(1) . "<br />\n";
  }
}

foo (1, 2, 3);



//Example #2 func_get_arg() example before and after PHP 5.3

//test.php
function test() {
  include './fga.inc';
}

test('First arg', 'Second arg');

//fga.inc
$arg = func_get_arg(1);
var_export($arg);

//Output previous to PHP 5.3: 'Second arg'
//Output in PHP 5.3 and later:

/*
Warning: func_get_arg():  Called from the global scope - no function
context in /home/torben/Desktop/code/ml/fga.inc on line 3
false
 */

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

