<?php
//Example #1 Traversing a children() pseudo-array
$xml = new SimpleXMLElement(
    '<person>
     <child role="son" attr="first gen">
        Son 1
      <child role="daughter"/>
      <role>This is Role</role>
     </child>
     <child role="daughter">
      <child role="son">
       <child role="son"/>
      </child>
     </child>
    </person>');

foreach ($xml->children() as $second_gen) {

    echo ' The person begot a ' . $second_gen['role'];

    foreach ($second_gen->children() as $third_gen) {
        echo ' who begot a ' . $third_gen['role'] . ';';

        foreach ($third_gen->children() as $fourth_gen) {
            echo ' and that ' . $third_gen['role'] .
                ' begot a ' . $fourth_gen['role'];
        }
    }
}




$xml = '<example xmlns:foo="my.foo.urn">
  <foo:a>Apple</foo:a>
  <foo:b>Banana</foo:b>
  <c>Cherry</c>
</example>';

$sxe = new SimpleXMLElement($xml);

$kids = $sxe->children('foo');
var_dump(count($kids)); //0

$kids = $sxe->children('foo', TRUE);
var_dump(count($kids)); //2

$kids = $sxe->children('my.foo.urn');
var_dump(count($kids));     //2

$kids = $sxe->children('my.foo.urn', TRUE);
var_dump(count($kids));     //0

$kids = $sxe->children();
var_dump(count($kids));     //1
?>

