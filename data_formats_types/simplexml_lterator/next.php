<pre>
<?php
$xml = <<<XML
<books>
    <book>
        <title>PHP Basics</title>
        <author>Jim Smith</author>
    </book>
    <book>XML basics</book>
</books>
XML;

$xmlIterator = new SimpleXMLIterator( $xml );
for( $xmlIterator->rewind(); $xmlIterator->valid(); $xmlIterator->next() ) {
    if($xmlIterator->hasChildren()) {
        var_dump($xmlIterator->current());
    }
}
?>
</pre>