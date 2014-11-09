<?php

$string = <<<XML
<a>
 <b>
  <c>text</c>
  <c>stuff</c>
  <c>
    <f>f element</f>
    c spec
  </c>
  <e>e element</e>
  b element - well format
 </b>
 <d>
  <c>code</c>
 </d>
</a>
XML;

$xml = new SimpleXMLElement($string);

echo $xml->asXML();


/**
 * asXML also works on Xpath results:
   Example #2 Using asXML() on SimpleXMLElement::xpath() results
 */

// Continued from example XML above.
/* Search for <a><b><c> */

$result = $xml->xpath('/a/b/c');
while(list( , $node) = each($result)) {
    echo $node->asXML();
}

?>

