<?php
$dom = new DOMDocument('1.0', 'utf-8');

$rootElement = $dom->createElement('root');
// We insert the new element as root (child of the document)
$dom->appendChild($rootElement);

$bookElement = $dom->createElement('book');
$rootElement->appendChild($bookElement);

$titleBookElement = $dom->createElement('title', 'Title Book');
$bookElement->appendChild($titleBookElement);


$book2Element = $dom->createElement('book');
$rootElement->appendChild($book2Element);
$cDataSection = $dom->createCDATASection('CDATA SECTION');
$book2Element->appendChild($cDataSection);
/**
 *
<?xml version="1.0" encoding="utf-8"?>
<root><book><title>Title Book</title></book><book><![CDATA[CDATA SECTION]]></book></root>
 */

echo $dom->saveXML();
?>

