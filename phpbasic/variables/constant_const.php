<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
define("PATH_ROOT", dirname(__FILE__));

// Works as of PHP 5.3.0
const CONSTANT = 'Hello World';
echo CONSTANT;

// Works as of PHP 5.6.0
//const ANOTHER_CONST = CONSTANT.'; Goodbye World';
//echo ANOTHER_CONST;


/**
 * const keyword must be declared at the top-level scope because they are defined at compile-time.
 * This means that they cannot be declared inside functions, loops, if statements or try/ catch blocks.
 */
if(TRUE) {
    //Parse error: syntax error, unexpected 'const'
    //const IFSTATEMENT = 'Hello World';
}

//Parse error: syntax error
//const ADDITIONAL = 1 + 2;
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

