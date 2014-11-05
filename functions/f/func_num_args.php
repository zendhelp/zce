<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
echo "Returns the number of arguments passed to the function<hr>";
function foo()
{
  $numargs = func_num_args();
  echo "Number of arguments: $numargs\n";
}
foo(1, 2, 3);   //Number of arguments: 3


//Generates a warning if called from outside of a user-defined function.
//Example #2 func_num_args() example before and after PHP 5.3

//test.php
function test() {
  include './test2.php';
}
test('First arg', 'Second arg');

//test2.php
$num_args = func_num_args();
var_export($num_args);

//Output previous to PHP 5.3:: 2

//Output in PHP 5.3 and later will be something similar to:
//Warning: func_num_args():  Called from the global scope - no function -1

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

