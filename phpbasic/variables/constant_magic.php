<?php
namespace MAGIC\TEST;

echo "__LINE__ : ".__LINE__."\n";
echo "__FILE__ : ".__FILE__."\n";
echo "__DIR__ : ".__DIR__."\n";
echo "<br>";

echo "__FUNCTION__ : ".__FUNCTION__."\n";
echo "__CLASS__ : ".__CLASS__."\n";
echo "__TRAIT__ : ".__TRAIT__."\n";
echo "__METHOD__ : ".__METHOD__."\n";
echo "__NAMESPACE__ : ".__NAMESPACE__."\n";
echo "<hr>";


functionName();
function functionName() {
  echo "__FUNCTION__ : ".__FUNCTION__."\n";
}

$a = new A();
$a->Method();
$a->TraitTest();

class A {
  public function __construct() {
    echo "__CLASS__ : ".__CLASS__."\n";
  }

  public function Method() {
    echo "__METHOD__ : ".__METHOD__."\n";
  }

  public function TraitTest() {
    echo "__TRAIT__ : ".__TRAIT__."\n";
  }
}
?>

