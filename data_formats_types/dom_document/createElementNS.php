<?php
$dom = new DOMDocument('1.0', 'utf-8');

$element = $dom->createElementNS('http://www.example.com/XFoo', 'xfoo:test', 'This is the root element!');

// We insert the new element as root (child of the document)
$dom->appendChild($element);

echo $dom->saveXML();
?>

