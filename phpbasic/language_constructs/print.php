<?php require_once '../../includes/header.php'; ?>
  <pre>
<?php
echo "print Returns 1, always.<hr>";


print("Hello World");

print "print() also works without parentheses.";

print "This spans
multiple lines. The newlines will be
output as well";

print "This spans\nmultiple lines. The newlines will be\noutput as well.";

print "escaping characters is done \"Like this\".";

// You can use variables inside a print statement
$foo = "foobar";
$bar = "barbaz";

print "foo is $foo"; // foo is foobar

// You can also use arrays
$bar = array("value" => "foo");

print "this is {$bar['value']} !"; // this is foo !

// Using single quotes will print the variable name, not the value
print 'foo is $foo'; // foo is $foo

// If you are not using any other characters, you can just print variables
print $foo;          // foobar

$variable = 'EEKK';
print <<<END
This uses the "here document" syntax to output
multiple lines with $variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon no extra whitespace!
END;


echo "IF conditions <hr>";

//foobarTRUE
if ((print "foo") && (print "bar")) {
  echo "TRUE\n";
}

//bbb1TRUE
if (print "aaa" && print "bbb") {
  echo "TRUE\n";
}

//TRUE
if (print "0" && print "bbb") {
  echo "TRUE\n";
}

//01TRUE
if (print "bbb" && print "0") {
  echo "TRUE\n";
}

//TRUE
if (print false && print "bbb") {
  echo "TRUE\n";
}

//1TRUE
if (print 'bbb' && print false) {
  echo "TRUE\n";
}

//11TRUE
if (print 'bbb' && print true) {
  echo "TRUE\n";
}
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>
