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

$xmlIterator = new SimpleXMLIterator($xml);

//books
for( $xmlIterator->rewind(); $xmlIterator->valid(); $xmlIterator->next() ) {
    foreach($xmlIterator->getChildren() as $name => $data) {
        echo "The $name is '$data' from the class " . get_class($data) . "\n";
    }
    echo $xmlIterator->getName()."\n";      //2 times of books will be print out
}
?>
</pre>