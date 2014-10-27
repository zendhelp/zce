<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
echo "Object Initialization\n";
class foo
{
    function do_foo()
    {
        echo "Doing foo."; 
    }
}

$bar = new foo;
$bar->do_foo();

echo "Converting to object\n";
$obj = (object) 'ciao';
echo $obj->scalar;  // outputs 'ciao'

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>
