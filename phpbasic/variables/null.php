<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
//it has been assigned the constant NULL.
//it has not been set to any value yet.
//it has been unset().
$var = NULL;
var_dump($var);
$a = 10;
var_dump($a);
unset($a);
var_dump($a); //Undefined variable - NULL
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>
