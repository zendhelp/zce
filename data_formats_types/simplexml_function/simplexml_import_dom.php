<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
$dom = new DOMDocument;
$dom->loadXML('<books><book><title>blah</title></book></books>');
if (!$dom) {
  echo 'Error while parsing the document';
  exit;
}

$s = simplexml_import_dom($dom);

print_r($s);

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

