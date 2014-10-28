<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
$a = 1.234;
$b = 1.2e3;
$c = 7E-10;

echo "$a\n";  //1.234
echo "$b\n";  //1200 = 1.2 * 10 * 10 * 10
echo "$c\n";  //7.0E-10

//will usually return 7 instead of the expected 8,
//since the internal representation will be something like 7.9999999999999991118....
echo floor((0.1+0.7)*10)."\n";

//$a and $b are equal to 5 digits of precision.
$a = 1.23456789;
$b = 1.23456780;
$epsilon = 0.00001;
echo abs($a-$b)."\n";

if(abs($a-$b) < $epsilon) {
    echo "true\n";  //true
}

//This happens probably because $x is not really 1.6, but 1.599999.. and var_dump shows it to you as being 1.6.
$x = 8 - 6.4;  // which is equal to 1.6
var_dump($x);
$y = 1.6;
var_dump($x == $y); // is not true
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>
