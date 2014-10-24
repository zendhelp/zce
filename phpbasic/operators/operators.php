<?php require_once '../includes/header.php'; ?>
<pre>
<?php
//Arithmetic
echo 2 + 2; // Addition. Will print 4
echo 3 - 2; // Subtraction. will print 1
echo 1 * 2; // Multiplication. Will print 2
echo 4 / 2; // Division . Will print 2
echo -2;    // Negation. Will print -2

echo 3 % -2;  // Modulus. Will print 1
echo -3 % 2;  // Modulus. Will print -1
echo -3 % -2; // Modulus. Will print -1
echo -3 % 0;  //Warning: Division by zero

echo -4/-2; //2
echo -4/2;  //-2
echo 4/-2;  //-2
echo 4/0;   //Warning: Division by zero

echo 0x8A + 3; // Will print 141 (0x8A = 8x16 + 10 = 138), note always returns the decimal values


//Assignment
echo $a = $b = 5;           //Expressions Note: since assignments are parsed in a right to left order
echo $a = ($b = 4) + 5;     // $a = 9
//Note: 3 = $a will output parse error

//Assignment by Reference
$a = 3;
$b = &$a;       // or a space in-between & $a // $b is a reference to $a
$b = 50;
print "$a\n";   // prints 50
print "$b\n";   // prints 50
$a = 51;
print "$a\n";   // prints 51
print "$b\n";   // prints 51

unset($a);
$b = 50;
print "$a\n";   // prints Notice: Undefined variable: a
print "$b\n";   // prints 50

function double($i)
{
    return $i*2;
}
$b = $a = 5;    /* assign the value five into the variable $a and $b */
$c = $a++;      /* post-increment, assign original value of $a(5) to $c */
$e = $d = ++$b; /* pre-increment, assign the incremented value of $b (6) to $d and $e */
                /* at this point, both $d and $e are equal to 6 */

$f = double($d++);  /* assign twice the value of $d before the increment, 2*6 = 12 to $f */
$g = double(++$e);  /* assign twice the value of $e after the increment, 2*7 = 14 to $g */
$h = $g += 10;      /* first, $g is incremented by 10 and ends with the value of 24. the value of the assignment (24) is
                    then assigned into $h, and $h ends with the value
                    of 24 as well. */

var_dump(1 <= 1 == 1); //true 1 < 2 > 1 is illegal in PHP and get parse error
?>
</pre>
<?php require_once '../includes/footer.php'; ?>