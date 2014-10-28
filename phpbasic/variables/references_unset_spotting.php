<?php require_once '../../includes/header.php'; ?>
<pre>
<?php

//won't unset $b, just $a.
$a = 1;
$b =& $a;
unset($a);
echo $a."\n"; //Undefined variable
echo $b."\n"; /1

echo "Spotting References \n";

//This also means that unsetting $var won't unset the global variable. NEED TO BE CONFIRM AGAIN
$var =& $GLOBALS["var"];
$var = 2;
echo $var."\n";
echo $GLOBALS["var"]."\n";
unset($var);
echo $var."\n";               //Notice:  Undefined variable
echo $GLOBALS["var"]."\n";    //Notice:  Undefined variable
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

