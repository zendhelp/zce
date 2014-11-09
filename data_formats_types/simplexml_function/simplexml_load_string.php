<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
echo "simplexml_load_string - Interprets a string of XML into an object<hr>";

$string = <<<XML
<?xml version='1.0'?>
<document>
 <title>Forty What?</title>
 <from>Joe</from>
 <to>Jane</to>
 <body>
  I know that's the answer -- but what's the question?
 </body>
</document>
XML;

$xml = simplexml_load_string($string);
print_r($xml);


$library = <<<XML
<library>
    <info>
        <owner>OwnerName</owner>
    </info>
    <books>
        <book>
            <title>Book Title 1</title>
            <author>Book Author 1</author>
        </book>
        <book>
            <title>Book Title 2</title>
            <author>Book Author 2</author>
        </book>
        <book>
            <title>Book Title 3</title>
            <author>Book Author 3</author>
        </book>
    </books>
</library>
XML;

$xmlElement = simplexml_load_string($library);
print_r($xmlElement);
foreach($xmlElement->books->book AS $book) {
    echo $book->title."\n";
}


//Warning:  simplexml_load_string() expects parameter 2 to be a class name derived from SimpleXMLElement, 'SimpleXMLElemen'
$xmlE = simplexml_load_string($string, 'SimpleXMLElemen');
print_r($xmlE);
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

