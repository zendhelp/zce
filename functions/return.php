<?php require_once '../includes/header.php'; ?>
<pre>
<?php
function square($num)
{
  return $num * $num;
}
echo square(4);   // outputs '16'.



function small_numbers()
{
  return array (0, 1, 2);
}
list ($zero, $one, $two) = small_numbers();


function &returns_reference()
{
  $someref = 1;
  return $someref;
}

$newref =& returns_reference();
echo $newref;

?>
</pre>
<?php require_once '../includes/footer.php'; ?>

