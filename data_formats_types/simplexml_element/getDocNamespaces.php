<?php
$xml = <<<XML
<?xml version="1.0" standalone="yes"?>
<people xmlns:p="http://example.org/ns" xmlns:t="http://example.org/test">
    <p:person t:id="1">John Doe</p:person>
    <p:person t:id="2" a:addr="123 Street" xmlns:a="http://example.org/addr">
        Susie Q. Public
    </p:person>
</people>
XML;

$sxe = new SimpleXMLElement($xml);

/**
 * recursive
If specified, returns all namespaces declared in parent and child nodes. Otherwise, returns only namespaces declared in root node.

from_root
Allows you to recursively check namespaces under a child node instead of from the root of the XML doc.
 */
$namespaces = $sxe->getDocNamespaces();
var_dump($namespaces);

$namespaces = $sxe->getDocNamespaces(TRUE);
var_dump($namespaces);
?>

