<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
$xmlstr = <<<XML
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


//Create a SimpleXMLElement object
$sxe = new SimpleXMLElement($xmlstr);
echo $sxe->title."\n";


//Create a SimpleXMLElement object from a URL
$sxe = new SimpleXMLElement('../xmlfiles/example.xml', NULL, TRUE);
echo $sxe->movie[0]->title."\n";

//Create a SimpleXMLElement object from a URL
$sxe = new SimpleXMLElement('../xmlfiles/example.xml', NULL, TRUE, 'NS');
print_r($sxe);

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

