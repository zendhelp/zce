<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
$a = "Hello ";
$b = $a . "World!"; // now $b contains "Hello World!"

$a = "Hello ";
$a .= "World!";     // now $a contains "Hello World!"

$var = 3;
echo "Result: " . $var + 4;     //4
echo "\n";
echo "Result: " . ($var + 4);   //Result: 7
echo "\n";
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>