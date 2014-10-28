<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
$a = 5;
$b = 3;

if ($a > $b) {
    echo "a is bigger than b";
} else if ($a == $b) {
    echo "a is equal to b";
} else {
    echo "a is smaller than b";
}


/* Incorrect Method: */
if($a > $b):
    echo $a." is greater than ".$b;
else if($a == $b): // Will not compile.
    echo "The above line causes a parse error.";
endif;


/* Correct Method: */
if($a > $b):
    echo $a." is greater than ".$b;
elseif($a == $b): // Note the combination of the words.
    echo $a." equals ".$b;
else:
    echo $a." is neither greater than or equal to ".$b;
endif;
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>