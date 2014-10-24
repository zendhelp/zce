<?php require_once '../../includes/header.php'; ?>
<pre>
<?php

echo 'this is a simple string';

echo 'You can also have embedded newlines in
strings this way as it is
okay to do';

// Outputs: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\\*.*?';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\*.*?';

// Outputs: This will not expand: \n a newline
echo 'This will not expand: \n a newline';

// Outputs: Variables do not $expand $either
echo 'Variables do not $expand $either';



//The closing heredoc tag mus be the first thing on the line
/*
$bar = <<<EOT
bar
    EOT;
*/

//Heredocs can not be used for initializing class properties.
//Since PHP 5.3, this limitation is valid only for heredocs containing variables.
/*
class foo {
    public $bar = <<<EOT
bar
    EOT;
}
*/

$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;


//Example #2 Heredoc string quoting example
/* More complex example, with variables. */
class foo
{
    var $foo;
    var $bar;

    function foo()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'MyName';

echo <<<EOT
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41
EOT;

/*
My name is "MyName". I am printing some Foo.
Now, I am printing some Bar2.
This should print a capital 'A': A
*/

//Example #3 Heredoc in arguments example
var_dump(array(<<<EOD
foobar!
EOD
));


//As of PHP 5.3.0, it's possible to initialize static variables and class properties/constants using the Heredoc syntax:
//Example #4 Using Heredoc to initialize static values
// Static variables
function foo4()
{
    static $bar = <<<LABEL
Nothing in here...
LABEL;
}

// Class properties/constants
class foo5
{
    const BAR = <<<FOOBAR
Constant example
FOOBAR;

    public $baz = <<<FOOBAR
Property example
FOOBAR;
}

//Starting with PHP 5.3.0, the opening Heredoc identifier may optionally be enclosed in double quotes:
//Example #5 Using double quotes in Heredoc
echo <<<"FOOBAR"
Hello World!
FOOBAR;



//Now docs
$str = <<<'EOD'
Example of string
spanning multiple lines
using nowdoc syntax.
EOD;

/* More complex example, with variables. */
class foo
{
    public $foo;
    public $bar;

    function foo()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'MyName';

echo <<<'EOT'
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should not print a capital 'A': \x41
EOT;

/*
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should not print a capital 'A': \x41
*/


?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

