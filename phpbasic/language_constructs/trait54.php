<?php require_once '../../includes/header.php'; ?>
  <pre>
<?php

echo "call_user_func<hr>";
echo "Callback function examples <hr>";

// An example callback function
function my_callback_function() {
  echo "hello world!\n";
}

// An example callback method
class MyClass {
  static function myCallbackMethod() {
    echo "Hello World!\n";
  }
}

// Type 1: Simple callback
call_user_func('my_callback_function');

// Type 2: Static class method call
call_user_func(array('MyClass', 'myCallbackMethod'));

// Type 3: Object method call
$obj = new MyClass();
call_user_func(array($obj, 'myCallbackMethod'));

// Type 4: Static class method call (As of PHP 5.2.3)
call_user_func('MyClass::myCallbackMethod');

// Type 5: Relative static class method call (As of PHP 5.3.0)
class A {
  public static function who() {
    echo "A\n";
  }
}

class B extends A {
  public static function who() {
    echo "B\n";
  }
}

call_user_func(array('B', 'parent::who'));  // A
call_user_func(array('B', 'who'));          // B


echo "Callback example using a Closure <hr>";
// Our closure
$double = function($a) {
  return $a * 2;
};

// This is our range of numbers
$numbers = range(1, 5);

// Use the closure as a callback here to
// double the size of each element in our
// range
$new_numbers = array_map($double, $numbers);

print implode(' ', $new_numbers);



echo "call_user_func_array - variable reference <hr>";
function increment(&$var)
{
  $var++;
}

$a = 0;
call_user_func('increment', $a);    //Warning:  Parameter 1 to increment() expected to be a reference
echo $a."\n";

//Fatal error: Call-time pass-by-reference has been removed
//call_user_func('increment', &$a);

call_user_func_array('increment', array(&$a)); // You can use this instead before PHP 5.3
echo $a."\n";


echo "call_user_func() example\n";
function barber($type)
{
  echo "You wanted a $type haircut, no problem\n";
}
call_user_func('barber', "mushroom");
call_user_func('barber', "shave");


echo "Using lambda function with call_user_func() <hr>";
call_user_func(function($arg) { print "[$arg]\n"; }, 'test'); /* As of PHP 5.3.0 - [test]*/

echo "Callbacks registered with functions such as call_user_func() and call_user_func_array()
will not be called if there is an uncaught exception thrown in a previous callback.\n";

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>
