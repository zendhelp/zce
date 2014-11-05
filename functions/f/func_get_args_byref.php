<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
//func_get_args() example of byref and byval arguments
function byVal($arg) {
  echo 'As passed     : ', var_export(func_get_args()), PHP_EOL;
  $arg = 'baz';
  echo 'After change  : ', var_export(func_get_args()), PHP_EOL;
}

function byRef(&$arg) {
  echo 'As passed     : ', var_export(func_get_args()), PHP_EOL;
  $arg = 'baz';
  echo 'After change  : ', var_export(func_get_args()), PHP_EOL;
}

$arg = 'bar';
byVal($arg);
byRef($arg);


//The above example will output:
/*
As passed : array (
0 => 'bar',
)
After change : array (
0 => 'bar',
)
As passed : array (
0 => 'bar',
)
After change : array (
0 => 'baz',
)
 */
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

