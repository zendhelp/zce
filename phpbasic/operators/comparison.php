<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
/**
 * 9 operators
 * loose comparisons with ==
 * strict comparisons with ===
 */


var_dump(0 == "a"); // 0 == 0 -> true
var_dump("1" == "01"); // 1 == 1 -> true
var_dump("10" == "1e1"); // 10 == 10 -> true
var_dump(100 == "1e2"); // 100 == 100 -> true   e2 = 10^2

switch ("a") {
    case 0:
        echo "0";
        break;
    case "a": // never reached because "a" is already matched with 0
        echo "a";
        break;
}

var_dump(TRUE > FALSE);

echo "Ternary Operator\n";
$action = (empty($_POST['action'])) ? 'default' : $_POST['action'];
echo "$action \n";

echo "PHP 5.3 Ternary expr1 ?: expr3\n";
echo $action ?: 'default'."\n";

echo "Non-obvious Ternary Behaviour\n";

//This is because ternary expressions are evaluated from left to right
echo (true?'true':false?'t':'f');       //t
// the following is a more obvious version of the same code as above
echo ((true ? 'true' : false) ? 't' : 'f');


?>
</pre>
<?php require_once '../../includes/footer.php'; ?>