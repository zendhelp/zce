<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
echo "Note that unlike some other languages, the continue statement applies to switch and acts similar to break.
If you have a switch inside a loop and wish to continue to the next iteration of the outer loop, use continue 2.<hr>";
echo "Note that switch/case does loose comparison.<hr>";

$i = 1;
switch ($i) {
  case 0:
    echo "i equals 0";
    break;
  case 1:
    echo "i equals 1";
    break;
  case 2:
    echo "i equals 2";
    break;
  default:
    echo "i is not equal to 0, 1 or 2";
}
echo "\n";

switch ($i):
  case 0:
    echo "i equals 0";
    break;
  case 1:
    echo "i equals 1";
    break;
  case 2:
    echo "i equals 2";
    break;
  default:
    echo "i is not equal to 0, 1 or 2";
endswitch;
echo "\n";

//will print "i is less than 3 but not negative" because case = 1 not use break...
switch ($i) {
  case 0:
  case 1:
  case 2:
    echo "i is less than 3 but not negative";
    break;
  case 3:
    echo "i is 3";
}
echo "\n";


$beer = 'tuborg';   //Good choice
$beer = '';         //Please make a new selection...
switch($beer)
{
  case 'tuborg';
  case 'carlsberg';
  case 'heineken';
    echo 'Good choice';
    break;
  default;
    echo 'Please make a new selection...';
    break;
}
echo "<hr>";

//Outputs: 1
$a = 0;
switch(++$a) {
  case 3: echo 3; break;
  case 2: echo 2; break;
  case 1: echo 1; break;
  default: echo "No match!"; break;
}
echo "\n";


//this is 2
$string="2string";
switch($string)
{
  case 1:
    echo "this is 1";
    break;
  case 2:
    echo "this is 2";
    break;
  case '2string':
    echo "this is a string";
    break;
}
echo "\n";


//this is a
$string = "a";
switch($string)
{
  case 'b':
    echo "this is b";
    break;
  case 'a':
    echo "this is a";
    break;
}
echo "\n";


//this is 0
$string = "a";
switch($string)
{
  case 0:
    echo "this is 0";
    break;
  case 'a':
    echo "this is a";
    break;
}
echo "\n";

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>