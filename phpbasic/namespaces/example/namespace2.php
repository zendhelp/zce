<?php
namespace Foo\Bar;
include 'namespace1.php';

const FOO = 2;
function foo() {}
class foo
{
  static function staticmethod() {
    echo "staticmethod\n";
  }
}

echo '<pre>';
/* Unqualified name */
foo(); // resolves to function Foo\Bar\foo
foo::staticmethod(); // resolves to class Foo\Bar\foo, method staticmethod
echo FOO."\n"; // resolves to constant Foo\Bar\FOO

/* Qualified name */
subnamespace\foo(); // resolves to function Foo\Bar\subnamespace\foo
subnamespace\foo::staticmethod(); // resolves to class Foo\Bar\subnamespace\foo,
// method staticmethod
echo subnamespace\FOO."\n"; // resolves to constant Foo\Bar\subnamespace\FOO

/* Fully qualified name */
\Foo\Bar\foo(); // resolves to function Foo\Bar\foo
\Foo\Bar\foo::staticmethod(); // resolves to class Foo\Bar\foo, method staticmethod
echo \Foo\Bar\FOO."\n"; // resolves to constant Foo\Bar\FOO





// Accessing global classes, functions and constants from within a namespace
namespace Foo;

function strlen() {}
const INI_ALL = 3;
class Exception {}

$a = \strlen('hi'); // calls global function strlen
$b = \INI_ALL; // accesses global constant INI_ALL
$c = new \Exception('error'); // instantiates global class Exception
echo '</pre>';