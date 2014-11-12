<?php require_once '../../includes/header.php'; ?>
<pre>
<?php

//We firstly need to create the parser
$parser = xml_parser_create();
$perserOption = xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);

//bool(true)
var_dump($perserOption);

$xmlString = <<<XML
<?xml version='1.0' standalone='yes'?>
<movies>
    <movie>
        <title>PHP: Behind the Parser</title>
        <characters>
            <character>
                <name>Ms. Coder</name>
                <actor>Onlivia Actora</actor>
            </character>
            <character>
                <name>Mr. Coder</name>
                <actor>El Act&#211;r</actor>
            </character>
        </characters>
        <plot>
            So, this language. It's like, a programming language. Or is it a
            scripting language? All is revealed in this thrilling horror spoof
            of a documentary.
        </plot>
        <great-lines>
            <line>PHP solves all my web problems</line>
        </great-lines>
        <rating type="thumbs">7</rating>
        <rating type="stars">5</rating>
    </movie>
</movies>
XML;

if(!xml_parse($parser, str_replace(array("\n", "\r", "\t"), '', $xmlString)))
  echo xml_error_string(xml_get_error_code($parser));


?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

