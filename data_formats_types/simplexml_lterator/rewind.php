<pre>
<?php
$xmlIterator = new SimpleXMLIterator('<books><book>PHP Basics</book><book>XML Basics</book></books>');

var_dump($xmlIterator);
var_dump($xmlIterator->rewind());
var_dump($xmlIterator->current());


?>
</pre>