<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
$a = 5;
$b = 3;
if ($a > $b)
    echo "a is bigger than b\n";

if ($a > $b) {
    echo "a is bigger than b\n";
}

if ($a > $b) :
    echo "a is bigger than b\n";
endif;

$a = "C";
$b = "X";
if ($a < $b) {
    echo $a." is smaller than ".$b."\n";
}

if (1 == 0) echo "Test 1.\n"; echo "Test 2\n";  //Test 2
if (1 == 1) echo "Test 1.\n"; echo "Test 2\n";  //Test 1. AND Test 2

isset( $a ) AND print( $b );    //X
isset( $c ) AND print( $b );    //nothing
echo "\n";

function call()
{
    return FALSE;
}

if(call() == TRUE) // or if(call())
{
    echo "TRUE \n";
} else {
    echo "FALSE \n";
}

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>