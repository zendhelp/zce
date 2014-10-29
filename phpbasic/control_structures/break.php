<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
echo "break ends execution of the current for, foreach, while, do-while or switch structure.\n";
$arr = array('one', 'two', 'three', 'four', 'stop', 'five');
while (list(, $val) = each($arr)) {
  if ($val == 'stop') {
    break;    /* You could also write 'break 1;' here. */
  }
  echo "$val<br />\n";
}

/* Using the optional argument. */

$i = 0;
while (++$i) {
  switch ($i) {
    case 5:
      echo "At 5<br />\n";
      break 1;  /* Exit only the switch. */
    case 10:
      echo "At 10; quitting<br />\n";
      break 2;  /* Exit the switch and the while. */

    case 11:
      echo "At 11; quitting<br />\n";
      //Fatal error:  Cannot break/continue 3 levels
      //break 3;
    default:
      break;
  }
}


echo "5.4.0	break 0; is no longer valid. In previous versions it was interpreted the same as break 1;\n";
$arr = array('one', 'two', 'three', 'four', 'stop', 'five');
while (list(, $val) = each($arr)) {
  if ($val == 'stop') {
    //Fatal error: 'break' operator accepts only positive numbers
    //break 0;
  }
}

$num = 1;
echo "5.4.0	Removed the ability to pass in variables (e.g., $num = 2; break $num;) as the numerical argument.\n";
while (list(, $val) = each($arr)) {
  if ($val == 'stop') {
    //Fatal error: 'break' operator with non-constant operand is no longer supported
    //break $num;
  }
}



?>
</pre>
<?php require_once '../../includes/footer.php'; ?>