<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
//Arithmetic
echo 2 + 2; echo "\n";// Addition. Will print 4
echo 3 - 2; echo "\n";// Subtraction. will print 1
echo 1 * 2; echo "\n";// Multiplication. Will print 2
echo 4 / 2; echo "\n";// Division . Will print 2
echo -2;    echo "\n";// Negation. Will print -2

echo 3 % -2;  echo "\n";// Modulus. Will print 1
echo -3 % 2;  echo "\n";// Modulus. Will print -1
echo -3 % -2; echo "\n";// Modulus. Will print -1
echo -3 % 0;  echo "\n";//Warning: Division by zero

echo -4/-2; echo "\n";//2
echo -4/2;  echo "\n";//-2
echo 4/-2;  echo "\n";//-2
echo 4/0;   echo "\n";//Warning: Division by zero

echo 0x8A + 3; echo "\n";// Will print 141 (0x8A = 8x16 + 10 = 138), note always returns the decimal values

//echo (3**3)."\n"; //Result of raising $a to the $b'th power. Introduced in PHP 5.6.

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>