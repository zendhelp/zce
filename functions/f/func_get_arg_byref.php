<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
echo "func_get_arg() example of byref and byval arguments<hr>";

function byVal($arg) {
  echo 'As passed     : ', var_export(func_get_arg(0)), PHP_EOL;
  $arg = 'baz';
  echo 'After change  : ', var_export(func_get_arg(0)), PHP_EOL;
}

function byRef(&$arg) {
  echo 'As passed     : ', var_export(func_get_arg(0)), PHP_EOL;
  $arg = 'baz';
  echo 'After change  : ', var_export(func_get_arg(0)), PHP_EOL;
}

$arg = 'bar';
byVal($arg);
byRef($arg);

//The above example will output:
/*
As passed : 'bar'
After change : 'bar'
As passed : 'bar'
After change : 'baz'
 */
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

