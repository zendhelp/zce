<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
$a = 'hello';
$$a = 'world';
$$$a = 'bim';
//$$$$$a = 'unknow';  //Notice:  Undefined variable: bim
echo "$a ${$a} \n";   //hello world
echo "$a $hello \n";  //hello world
echo "$a $world \n";  //hello world



echo " Variable property example\n";
class foo {
  var $bar = 'I am bar.';
  var $arr = array('I am A.', 'I am B.', 'I am C.');
  var $r   = 'I am r.';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo $foo->$bar . "\n";     //I am bar.
echo $foo->$baz[1] . "\n";  //I am bar.

$start = 'b';
$end   = 'ar';
echo $foo->{$start . $end} . "\n";  //I am bar.

$arr = 'arr';
echo $foo->$arr[1] . "\n";    //I am r.
echo $foo->{$arr}[1] . "\n";  //I am B.

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

