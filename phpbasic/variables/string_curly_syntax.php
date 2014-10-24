<?php require_once '../../includes/header.php'; ?>
<pre>
<?php

// Show all errors
error_reporting(E_ALL);

$great = 'fantastic';

// Won't work, outputs: This is { fantastic}
echo "This is { $great}";

// Works, outputs: This is fantastic
echo "This is {$great}";
echo "This is ${great}";

// Works
echo "This square is {$square->width}00 centimeters broad.";


// Works, quoted keys only work using the curly brace syntax
echo "This works: {$arr['key']}";


// Works
echo "This works: {$arr[4][3]}";

// This is wrong for the same reason as $foo[bar] is wrong  outside a string.
// In other words, it will still work, but only because PHP first looks for a
// constant named foo; an error of level E_NOTICE (undefined constant) will be
// thrown.
echo "This is wrong: {$arr[foo][3]}";

// Works. When using multi-dimensional arrays, always use braces around arrays
// when inside of strings
echo "This works: {$arr['foo'][3]}";

// Works.
echo "This works: " . $arr['foo'][3];

echo "This works too: {$obj->values[3]->name}";

echo "This is the value of the var named $name: {${$name}}";

echo "This is the value of the var named by the return value of getName(): {${getName()}}";

echo "This is the value of the var named by the return value of \$object->getName(): {${$object->getName()}}";

// Won't work, outputs: This is the return value of getName(): {getName()}
echo "This is the return value of getName(): {getName()}";

$a = '12345';

// This works:
echo "qwe{$a}rty"; // qwe12345rty, using braces
echo "qwe" . $a . "rty"; // qwe12345rty, concatenation used

// Does not work:
echo 'qwe{$a}rty'; // qwe{$a}rty, single quotes are not parsed
echo "qwe$arty"; // qwe, because $a became $arty, which is undefined


class foo {
    var $bar = 'I am bar.';
    var $arr = array('I am A.', 'I am B.', 'I am C.');
    var $r   = 'I am r.';
    var $b   = 'I am b.';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo "{$foo->$bar}\n";
echo "{$foo->$baz[1]}\n";

echo "$foo->$bar\n"; //fatal error
echo "$foo->$baz[1]\n"; //fatal error
echo $foo->$bar . "\n"; //I am bar.
echo $foo->$baz[1] . "\n"; //I am bar.

$arr = 'arr';
echo $foo->$arr[1] . "\n"; //I am r.
echo $foo->{$arr[1]} . "\n"; //I am r.
echo $foo->{$arr}[1] . "\n"; // I am B.

$start = 'b';
$end   = 'ar';
echo $foo->$start . $end . "\n"; // I am b.ar
echo $foo->{$start . $end} . "\n"; // I am bar.

// Show all errors.
error_reporting(E_ALL);

class beers {
    const softdrink = 'rootbeer';
    public static $ale = 'ipa';
}

$rootbeer = 'A & W';
$ipa = 'Alexander Keith\'s';

// This works; outputs: I'd like an A & W
echo "I'd like an {${beers::softdrink}}\n";

// This works too; outputs: I'd like an Alexander Keith's
echo "I'd like an {${beers::$ale}}\n";
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

