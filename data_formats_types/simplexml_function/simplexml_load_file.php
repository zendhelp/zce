<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
echo "simplexml_load_file - Interprets an XML file into an object <hr>";

// The file test.xml contains an XML document with a root element
// and at least an element /[root]/title.

if (file_exists('../xmlfiles/test.xml')) {
  $xml = simplexml_load_file('../xmlfiles/test.xml');

  print_r($xml);
} else {
  exit('Failed to open test.xml.');
}



?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

