<?php require_once '../../includes/header.php'; ?>
<pre>
<?php

$a = 1234; // decimal number
$a = -123; // a negative number
$a = 0123; // octal number (equivalent to 83 decimal)
$a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
$a = 0b11111111; // binary number (equivalent to 255 decimal)

$foo = "10.0 pigs " + 1;    // $foo is float(11)
$foo = "pigs 10" + 1;       // $foo is integer (1)

var_dump(25/7);         // float(3.5714285714286)
var_dump((int) (25/7)); // int(3)
var_dump(round(25/7));  // float(4)

var_dump(01090); // 010 octal = 8 decimal
var_dump(010); // 010 octal = 8 decimal
var_dump(01); // 1
var_dump(017); // 001111 = 15
var_dump(0191); // 01 = 1

//Never cast an unknown fraction to integer, as this can sometimes lead to unexpected results.
echo (int) ( (0.1+0.7) * 10 ); // echo 7!

$foo = 1 + "10.5";                // $foo is float (11.5)
$foo = 1 + "-1.3e3";              // $foo is float (-1299)
$foo = 1 + "bob-1.3e3";           // $foo is integer (1)
$foo = 1 + "bob3";                // $foo is integer (1)
$foo = 1 + "10 Small Pigs";       // $foo is integer (11)
$foo = 4 + "10.2 Little Piggies"; // $foo is float (14.2)
$foo = "10.0 pigs " + 1;          // $foo is float (11)
$foo = "10.0 pigs " + 1.0;        // $foo is float (11)
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

