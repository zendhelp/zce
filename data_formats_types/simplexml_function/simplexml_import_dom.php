<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
$dom = new DOMDocument;
$dom->loadXML('<books><book><title>blah</title></book><book><title>blah2</title></book></books>');
if (!$dom) {
  echo 'Error while parsing the document';
  exit;
}

$s = simplexml_import_dom($dom);

foreach($s->book as $k=>$v) {
    echo "$v->title \n";
}
print_r($s);

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

