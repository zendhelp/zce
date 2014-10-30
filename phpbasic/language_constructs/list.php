<?php require_once '../../includes/header.php'; ?>
  <pre>
<?php
echo "Parameters: A variable.\n";
echo "Return Values: Returns the assigned array<hr>";

$info = array('coffee', 'brown', 'caffeine');

// Listing all the variables
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.\n";

// Listing some of them
list($drink, , $power) = $info;
echo "$drink has $power.\n";

// Or let's skip to only the third one
list( , , $power) = $info;
echo "I need $power!\n";

// list() doesn't work with strings
list($bar) = "abcde";
var_dump($bar); // NULL



list($a, list($b, $c)) = array(1, array(2, 3));
var_dump($a, $b, $c);

echo "sing list() with array indices\n";
//note the order of the elements compared in which order they were written in the list() syntax
//2,1,0
unset($a);
$info = array('coffee', 'brown', 'caffeine');
list($a[0], $a[1], $a[2]) = $info;
var_dump($a);

$b = array();
$info = array('coffee', 'brown', 'caffeine');
list($b['a'], $b['b'], $b['c']) = $info;
var_dump($b);


?>
</pre>
<?php require_once '../../includes/footer.php'; ?>
