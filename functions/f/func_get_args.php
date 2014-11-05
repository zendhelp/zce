<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
function foo()
{
  $numargs = func_num_args();
  echo "Number of arguments: $numargs<br />\n";
  if ($numargs >= 2) {
    echo "Second argument is: " . func_get_arg(1) . "<br />\n";
  }
  $arg_list = func_get_args();
  for ($i = 0; $i < $numargs; $i++) {
    echo "Argument $i is: " . $arg_list[$i] . "<br />\n";
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


//Example #2 func_get_args() example before and after PHP 5.3

//test.php
function foo() {
  include './fga.inc';
}

foo('First arg', 'Second arg');

//fga.inc
$args = func_get_args();
var_export($args);


//Output previous to PHP 5.3:
/*
array (
  0 => 'First arg',
  1 => 'Second arg',
)
 */

//Output in PHP 5.3 and later:
/*
Warning: func_get_args():  Called from the global scope - no function
context in /home/torben/Desktop/code/ml/fga.inc on line 3
false
 */

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

