<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
/**
 * If you have set a custom error handler function with set_error_handler() then it will still get called,
 * but this custom error handler can (and should) call error_reporting() which will return 0
 * when the call that triggered the error was preceded by an @.
 * error_reporting(0);
 */

/* Intentional file error */
$my_file = @file ('non_existent_file') or
    die ("Failed opening file: error was '$php_errormsg'");

// this works for any expression, not just functions:
$value = @$cache[$key];
// will not issue a notice if the index $key doesn't exist.
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>