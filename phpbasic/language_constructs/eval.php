<?php require_once '../../includes/header.php'; ?>
  <pre>
<?php
echo "eval -- Evaluate a string as PHP code -- Return NULL or FALSE<hr>";
echo "If there is a parse error in the evaluated code, eval()
returns FALSE and execution of the following code continues normally<hr>";

$string = 'cup';
$name = 'coffee';
$str = 'This is a $string with my $name in it.';

echo $str. "\n";    //This is a $string with my $name in it.
eval("\$str = \"$str\";");
echo $str. "\n";    //This is a cup with my coffee in it.

eval('echo "Test\n";');
//Parse error:  syntax error, unexpected end of file, expecting variable
//returns FALSE and execution of the following code continues normally
eval('echo "Test\n;');
echo "<hr>";

$number = 1;
eval ("$number = $number + 1;");    //Parse error:  syntax error, unexpected '='
eval ('$number = $number + 1;');
echo $number.'<hr>';   //2

echo '<p>Hi There</p>';
//Parse error:  syntax error, unexpected '<'
eval( '<?php echo "<p>I am supposed to get echoed after evaluation</p>"; ?>' );
echo '<p>And I am a normal echo</p>';
echo "<hr>";


?>

<p>Code below: Parse error:  syntax error, unexpected '<'</p>
<?php
echo "Hi there";
?>
<?php eval( '<p>I am a p tag</p> <?php echo "I am echoed by PHP"; ?>' ); ?>
<?php
echo "<br/>I am also echoed by php";
?>

</pre>
<?php require_once '../../includes/footer.php'; ?>
