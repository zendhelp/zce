<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
//As of PHP 5.4 you can also use the short array syntax, which replaces array() with [].
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// as of PHP 5.4
$array = [
    "foo" => "bar",
    "bar" => "foo",
];

//Example #2 Type Casting and Overwriting example
/*
array(1) {
  [1]=>
  string(1) "d"
}
*/
echo "Type Casting and Overwriting example\n";
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    07    => "integer",
    '07'  => "c",
    8    => "integer",
    '08'  => "c",
    0x8A  => "c",
    true => "d",
    false => "d",
);
var_dump($array);

//Example #3 Mixed integer and string keys
echo "Mixed integer and string keys\n";
$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100    //casting to string
);
var_dump($array);

//Example #5 Keys not on all elements
//As you can see the last value "d" was assigned the key 7.
//This is because the largest integer key before that was 6.
echo "Keys not on all elements\n";
$array = array(
    "a",
    "b",
    6 => "c",
    "d",
);
var_dump($array);


//Example #7 Array dereferencing
echo "Array dereferencing\n";
function getArray() {
    return array(1, 2, 3);
}

// on PHP 5.4
$secondElement = getArray()[1];

// previously
$tmp = getArray();
$secondElement = $tmp[1];

// or
list(, $secondElement) = getArray();
var_dump($secondElement);




// Create a simple array.
echo "Create a simple array\n";
$array = array(1, 2, 3, 4, 5);
print_r($array);

// Now delete every item, but leave the array itself intact:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
echo "Now delete every item\n";
print_r($array);

// Append an item (note that the new key is 5, instead of 0).
echo "Append an item (note that the new key is 5, instead of 0).\n";
$array[] = 6;
print_r($array);

// Re-index:
echo "Re-index: array_values \n";
$array = array_values($array);
$array[] = 7;
print_r($array);
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

