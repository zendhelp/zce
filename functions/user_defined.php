<?php require_once '../includes/header.php'; ?>
<pre>
<?php

echo "Conditional functions\n";
$makefoo = true;

/* We can't call foo() from here
   since it doesn't exist yet,
   but we can call bar() */

bar();

if ($makefoo) {
  function foo()
  {
    echo "I don't exist until program execution reaches me.\n";
  }
}

/* Now we can safely call foo()
   since $makefoo evaluated to true */

if ($makefoo) foo();

function bar()
{
  echo "I exist immediately upon program start.\n";
}
echo "<hr>";



echo "Functions within functions\n";
function test()
{
  function test2()
  {
    echo "I don't exist until test() is called.\n";
  }
}

/* We can't call test2() yet
   since it doesn't exist. */

test();

/* Now we can call bar(),
   test()'s processing has
   made it accessible. */

test2();
echo "<hr>";


echo " Recursive functions\n";
function recursion($a)
{
  if ($a < 20) {
    echo "$a\n";
    recursion($a + 1);
  }
}


echo "<hr>Contributed\n";
do_function();

if (!function_exists('my_undefined')) {
  function my_undefined() {
    echo "my_undefined\n";
  }
}

function do_function() {
  my_undefined();   //Fatal error:  Call to undefined function my_undefined()
}

?>
</pre>
<?php require_once '../includes/footer.php'; ?>

