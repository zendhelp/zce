<pre>
<?php
$xmlIterator = new SimpleXMLIterator('<books><book>PHP basics</book><book>XML basics</book></books>');
var_dump($xmlIterator->current());

$xmlIterator->rewind(); // rewind to first element
var_dump($xmlIterator->current());

/**
 *  NULL
    object(SimpleXMLIterator)#2 (0) {
    }
 */
?>
</pre>