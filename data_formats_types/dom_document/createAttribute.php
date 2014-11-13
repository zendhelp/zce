<?php
$dom = new DOMDocument('1.0', 'utf-8');

$rootElement    = $dom->createElement('root');
$rootAttr       = $dom->createAttribute('attr');        //DOMAttr object
$rootAttr->value = 'attr value';
$rootElement->setAttributeNode($rootAttr);
$dom->appendChild($rootElement);


/**
 *
<?xml version="1.0" encoding="utf-8"?>
<root attr="attr value"/>
 */

echo $dom->saveXML();
?>

