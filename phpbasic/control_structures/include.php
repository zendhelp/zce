<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
// Won't work; file.txt wasn't handled by www.example.com as PHP
include 'http://www.example.com/file.txt?foo=1&bar=2';

// Won't work; looks for a file named 'file.php?foo=1&bar=2' on the
// local filesystem.
include 'file.php?foo=1&bar=2';

// Works.
include 'http://www.example.com/file.php?foo=1&bar=2';
include 'file.txt';  // Works.
include 'file.php';  // Works.


// won't work, evaluated as include(('vars.php') == 'OK'), i.e. include('')
if (include('vars.php') == 'OK') {
  echo 'OK';
}

// works
if ((include 'vars.php') == 'OK') {
  echo 'OK';
}


echo "<hr>";
$foo = include 'include/return.php';
echo $foo;  // prints 'PHP'


//because the include was successful. Notice the difference between the above examples. The first uses return within
//the included file while the other does not. If the file can't be included, FALSE is returned and E_WARNING is issued.
$bar = include 'include/noreturn.php';
echo $bar;  // prints 1

echo "<hr>";
$string = get_include_contents('include/return.php');
echo $var;      //PHP
echo $string;   //nothing (note)

function get_include_contents($filename) {
  if (is_file($filename)) {
    ob_start();
    include $filename;
    return ob_get_clean();
  }
  return false;
}
?>

</pre>
<?php require_once '../../includes/footer.php'; ?>