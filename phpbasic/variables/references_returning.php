<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
//Do not use return-by-reference to increase performance
class foo {
  public $value = 42;

  public function &getValue() {
    return $this->value;
  }
}

$obj = new foo;
$myValue = &$obj->getValue();     // $myValue is a reference to $obj->value, which is 42.
$obj->value = 2;
echo $myValue."\n";               // prints the new value of $obj->value, i.e. 2.


//To use the returned reference, you must use reference assigment:
function &collector() {
  static $collection = array();
  return $collection;
}
$collection = &collector();     //you must use reference assigment
$collection[] = 'foo';
var_dump($collection);

//To pass the returned reference to another function expecting a reference you can use this syntax:
function &collector2() {
  static $collection2 = array();
  return $collection2;
}
$coll2 = array_push(collector2(), 'foo');
var_dump($coll2);     //1
//Note that array_push(&collector(), 'foo'); will not work, it results in a fatal error.

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

