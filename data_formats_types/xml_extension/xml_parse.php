<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
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

$strInputXML = '';
$p = xml_parser_create();
$parse = xml_parse($p, $strInputXML);
if(!$parse) {
    die(sprintf("XML error: %s at line %d",
        xml_error_string(xml_get_error_code($p)),
        xml_get_current_line_number($p)));
} else {
    echo "OK\n";
    print_r($strInputXML);
}

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

