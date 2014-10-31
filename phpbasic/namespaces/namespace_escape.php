<?php
//Undefined Constants referenced using any backslash die with fatal error
namespace bar;
$a = FOO; // produces notice - undefined constants "FOO" assumed "FOO";
$a = \FOO; // fatal error, undefined namespace constant FOO
$a = Bar\FOO; // fatal error, undefined namespace constant bar\Bar\FOO
$a = \Bar\FOO; // fatal error, undefined namespace constant Bar\FOO


//Cannot override special constants NULL, TRUE, FALSE, ZEND_THREAD_SAFE or ZEND_DEBUG_BUILD
namespace bar;
const NULL = 0; // fatal error;
const true = 'stupid'; // also fatal error;
// etc.


echo "Dynamic namespace names (quoted identifiers) should escape backslash\n";
$a = "dangerous\name"; // \n is a newline inside double quoted strings!
$obj = new $a;

$a = 'not\at\all\dangerous'; // no problems here.
$obj = new $a;

