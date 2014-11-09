<?php
/**
 * Note: SimpleXML has made a rule of adding iterative properties to most methods.
 * They cannot be viewed using var_dump() or anything else which can examine objects.
 * Example #1 Interpret an XML string
 */

/**
 * name="one"
   game="lonely"
 */

$string = <<<XML
<a>
 <foo name="one" game="lonely">1</foo>
</a>
XML;

$xml = simplexml_load_string($string);
foreach($xml->foo[0]->attributes() as $a => $b) {
    echo $a,'="',$b,"\"\n";
}

var_dump($xml);

?>

