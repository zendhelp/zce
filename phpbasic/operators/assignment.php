<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
//Assignment (=)
echo "Assignment (=) \n";
$a = $b = 5;        // $a is equal to 5 now, and $b has been set to 5.
echo $a."\n";
echo $b."\n";

$a = ($b = 4) + 5;  // $a is equal to 9 now, and $b has been set to 4.
echo $a."\n";
echo $b."\n";

$a = $b = 4 + 5;    // $a is equal to 9 now, and $b has been set to 9.
echo $a."\n";
echo $b."\n";

//4 = $a;           parse error
//$c = 4 = $d;      parse error

$a = 3;
$a += 5; // sets $a to 8, as if we had said: $a = $a + 5;
$b = "Hello ";
$b .= "There!"; // sets $b to "Hello There!", just like $b = $b . "There!";


//Assignment by Reference
echo "Assignment by Reference \n";
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

/* Assignment of scalar variables */
$a = 1;
$b =& $a;
$c = $b;
$c = 7; //$c is not a reference; no change to $a or $b

/* Assignment of array variables */
$arr = array(1);
$a =& $arr[0]; //$a and $arr[0] are in the same reference set
$arr2 = $arr; //not an assignment-by-reference!
$arr2[0]++;
/* $a == 2, $arr == array(2) */
/* The contents of $arr are changed even though it's not a reference! */


class C {}

/* The following line generates the following error message:
 * Deprecated: Assigning the return value of new by reference is deprecated in...
 */
$o = &new C;
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>