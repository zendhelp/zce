<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
echo "<h3>Incrementing NULL</h3>";
$a = NULL;
$b = NULL;
echo ++$a ."\n";            //Incrementing NULL result in 1.
echo --$b ."\n";            //Decrementing NULL values has no effect
//echo ++NULL;              //Parse error
echo "\n";


echo "<h3>Postincrement</h3>";
$a = 5;
echo "Should be 5: " . $a++ . "<br />\n";
echo "Should be 6: " . $a . "<br />\n";

echo "<h3>Preincrement</h3>";
$a = 5;
echo "Should be 6: " . ++$a . "<br />\n";
echo "Should be 6: " . $a . "<br />\n";

echo "<h3>Postdecrement</h3>";
$a = 5;
echo "Should be 5: " . $a-- . "<br />\n";
echo "Should be 4: " . $a . "<br />\n";

echo "<h3>Predecrement</h3>";
$a = 5;
echo "Should be 4: " . --$a . "<br />\n";
echo "Should be 4: " . $a . "<br />\n";

echo '== Alphabets A ==' . PHP_EOL;
$s = 'A';
echo ++$s. PHP_EOL;     //B
$s = 'Z';
echo ++$s. PHP_EOL;     //AA
$s = 'AB';
echo ++$s. PHP_EOL;     //AC

echo '== Alphabets ==' . PHP_EOL;
$s = 'W';
for ($n=0; $n<6; $n++) {
    echo ++$s . PHP_EOL;
}

// Digit characters behave differently
echo '== Digits A8 ==' . PHP_EOL;
$d = 'A8';
for ($n=0; $n<20; $n++) {
    echo ++$d . PHP_EOL;
}

echo '== Digits A08 ==' . PHP_EOL;
$d = 'A08';
for ($n=0; $n<20; $n++) {
    echo ++$d . PHP_EOL;
}
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>