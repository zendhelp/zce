<?php
$doc  = new DOMDocument('1.0', 'utf-8');
$doc->formatOutput = true;
$root = $doc->createElementNS('http://www.w3.org/2005/Atom', 'element');
$doc->appendChild($root);
$root->setAttributeNS('http://www.w3.org/2000/xmlns/' ,'xmlns:g', 'http://base.google.com/ns/1.0');
$item = $doc->createElementNS('http://base.google.com/ns/1.0', 'g:item_type', 'house');
$root->appendChild($item);

echo $doc->saveXML(), "\n";

echo $item->namespaceURI, "\n"; // Outputs: http://base.google.com/ns/1.0
echo $item->prefix, "\n";       // Outputs: g
echo $item->localName, "\n";    // Outputs: item_type
?>

