<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
$xmlIterator = new SimpleXMLIterator('<books><book>PHP basics</book><book>XML basics</book></books>');
var_dump($xmlIterator->current());

$xmlIterator->rewind(); // rewind to first element
var_dump($xmlIterator->current());

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

