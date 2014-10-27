<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
echo "<h3>Type Operators</h3>";

echo "Using instanceof with classes\n";
class MyClass
{
}

class NotMyClass
{
}
$a = new MyClass;

var_dump($a instanceof MyClass);        //true
var_dump($a instanceof NotMyClass);     //false

echo "Using instanceof with inherited classes\n";
class ParentClass
{
}

class MyClass2 extends ParentClass
{
}

$a = new MyClass2;

var_dump($a instanceof MyClass2);       //true
var_dump($a instanceof ParentClass);    //true

echo "Using instanceof with inherited classes\n";
$a = new MyClass;
var_dump(!($a instanceof stdClass));        //true



echo "Using instanceof for class\n";
interface MyInterface
{
}

class MyClass3 implements MyInterface
{
}

$a = new MyClass3;

var_dump($a instanceof MyClass3);            //true
var_dump($a instanceof MyInterface);        //true


echo "Using instanceof with other variables\n";

interface MyInterface2
{
}

class MyClass4 implements MyInterface2
{
}

$a = new MyClass4;
$b = new MyClass4;
$c = 'MyClass4';
$d = 'NotMyClass';

var_dump($a instanceof $b); // $b is an object of class MyClass (true)
var_dump($a instanceof $c); // $c is a string 'MyClass'         (true)
var_dump($a instanceof $d); // $d is a string 'NotMyClass'      (false)


echo "Using instanceof to test other variables\n";
$a = 1;
$b = NULL;
$c = imagecreate(5, 5);
var_dump($a instanceof stdClass); // $a is an integer
var_dump($b instanceof stdClass); // $b is NULL
var_dump($c instanceof stdClass); // $c is a resource
//var_dump(FALSE instanceof stdClass);
/*
bool(false)
bool(false)
bool(false)
PHP Fatal error:  instanceof expects an object instance, constant given
 */

echo "Avoiding classname lookups and fatal errors with instanceof in PHP 5.0\n";
$d = 'NotMyClass';
var_dump($x instanceof $d); // no fatal error here - Undefined variable

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>