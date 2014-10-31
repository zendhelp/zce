<?php require_once '../includes/header.php'; ?>
<pre>
<?php
echo "Variable function example\n";

function foo() {
  echo "In foo()<br />\n";
}

function bar($arg = '')
{
  echo "In bar(); argument was '$arg'.<br />\n";
}

// This is a wrapper function around echo
function echoit($string)
{
  echo $string."\n";
}

$func = 'foo';
$func();        // This calls foo()

$func = 'bar';
$func('test');  // This calls bar()

$func = 'echoit';
$func('test');  // This calls echoit()
echo "<hr>";



echo "Variable method example\n";
class Foo
{
  function Variable()
  {
    $name = 'Bar';
    $this->$name(); // This calls the Bar() method
  }

  function Bar()
  {
    echo "This is Bar\n";
  }
}

$foo = new Foo();
$funcname = "Variable";
$foo->$funcname();  // This calls $foo->Variable()
echo "<hr>";


echo "Variable method example with static properties\n";
class Foo2
{
  static $variable = 'static property';
  static function Variable()
  {
    echo "Method Variable called\n";
  }
}

echo Foo2::$variable;   // This prints 'static property'. It does need a $variable in this scope.
$variable = "Variable";
Foo2::$variable();      // This calls $foo->Variable() reading $variable in this scope.

echo "<hr>See also is_callable(), call_user_func(), variable variables and function_exists().";
?>
</pre>
<?php require_once '../includes/footer.php'; ?>

