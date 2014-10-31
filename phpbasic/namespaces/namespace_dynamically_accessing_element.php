<?php
class classname
{
  function __construct()
  {
    echo __METHOD__,"\n";
  }
}
function funcname()
{
  echo __FUNCTION__,"\n";
}
const constname = "global";

echo '<pre>';
$a = 'classname';
$obj = new $a; // prints classname::__construct
$b = 'funcname';
$b(); // prints funcname
echo constant('constname'), "\n"; // prints global
echo '</pre>';