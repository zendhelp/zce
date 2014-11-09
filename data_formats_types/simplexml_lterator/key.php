<pre>
<?php
$xmlIterator = new SimpleXMLIterator('<books><book>PHP basics</book><book>XML basics</book></books>');

print_r($xmlIterator->current());
echo var_dump($xmlIterator->key());     //bool(false)


$xmlIterator->rewind(); // rewind to the first element
print_r($xmlIterator->current());
echo var_dump($xmlIterator->key());     //string(4) "book"
?>
</pre>