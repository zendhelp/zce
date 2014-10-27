<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
echo "<h3>Logical Operators (6)</h3>";

function foo() {
    return 5;
}
$a = (false && foo());
$b = (true  || foo());
$c = (false and foo());
$d = (true  or  foo());

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);

echo "<h3>Operator Precedence</h3>";

// "||" has a greater precedence than "or" and =
// Acts like: ($e = (false || true))
$e = false || true;
// Acts like: (($f = false) or true)
$f = false or true;
var_dump($e, $f);

// Acts like: ($g = (true && false))
$g = true && false;
// Acts like: (($h = true) and false)
$h = true and false;
var_dump($g, $h);

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>