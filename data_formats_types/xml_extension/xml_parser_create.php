<?php require_once '../../includes/header.php'; ?>
<pre>
<?php

//We firstly need to create the parser
$parser = xml_parser_create();

/**
 * When the parser reads the XML it can call functions that we can then add code to handle.
 * The code below makes the parser call function when a new element is found within an XML document,
 * and when the end of an element is detected
 */
xml_set_element_handler($parser, "startElement", "stopElement");
xml_set_character_data_handler($parser, "characterData");
xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);

xml_set_default_handler($parser, 'functionName');
xml_set_unparsed_entity_decl_handler($parser, 'functionNameUnparsed');



/**
 * Callback functions
 * The parser will call the functions we have defined when parsing the XML so we now need to create those functions
 */
function startElement($parser, $name, $attrs)
{
  echo "Start [$name] -> Attributes = ";
  print_r($attrs);
}

function stopElement($parser, $name)
{
  echo "End [$name] \n";
}

function characterData($parser, $data)
{
  echo "Data: $data \n";
}

function functionName($parser, $data) {
  echo "functionName\n";
}

function functionNameUnparsed($parser, $entityName, $base, $systemId, $publicId, $notationName) {
  echo "functionNameUnparsed\n";
}

/**
 * We finally need to parse the document.
 * The use of an if statement will alert us if there is an error parsing the document.
 * This code will remove any newline and tab characters   str_replace(array("\n", "\r", "\t"), "", $xml)
 */
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

