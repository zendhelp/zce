<?php
$sxe = new SimpleXMLElement('../xmlfiles/example.xml', NULL, TRUE);

echo $sxe->getName() . "\n";

foreach ($sxe->children() as $child)
{
    echo $child->getName() . "\n";
}
?>

