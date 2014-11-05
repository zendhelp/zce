<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
echo "simplexml_load_string - Interprets a string of XML into an object<hr>";

$string = <<<XML
<?xml version='1.0'?>
<document>
 <title>Forty What?</title>
 <from>Joe</from>
 <to>Jane</to>
 <body>
  I know that's the answer -- but what's the question?
 </body>
</document>
XML;

$xml = simplexml_load_string($string);

print_r($xml);
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

