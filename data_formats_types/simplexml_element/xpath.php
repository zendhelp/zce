<?php
$string = <<<XML
<a>
 <b>
  <c>text</c>
  <c>stuff</c>
 </b>
 <d>
  <c>code</c>
 </d>
</a>
XML;

$xml = new SimpleXMLElement($string);

/* Search for <a><b><c> */
$result = $xml->xpath('/a/b/c');

while(list( , $node) = each($result)) {
    echo '/a/b/c: ',$node,"\n";
}

/* Relative paths also work... */
$result = $xml->xpath('b/c');

while(list( , $node) = each($result)) {
    echo 'b/c: ',$node,"\n";
}





/* Relative paths also work... */
$result = $xml->xpath('a/c');

while(list( , $node) = each($result)) {
    echo 'a/c: ',$node,"\n";            //nothing
}

/* Relative paths also work... */
$result = $xml->xpath('c');

while(list( , $node) = each($result)) {
    echo 'c: ',$node,"\n";              //nothing
}
?>

