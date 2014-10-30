<?php require_once '../../includes/header.php'; ?>
  <pre>
<?php
echo "die\n";
$a = 1;
die($a);
die;
die();
die('1');   //1
die(0);     //will not print
die(1);     //will not print
die(2222);  //will not print 2222
var_dump(die());  //no return value
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>
