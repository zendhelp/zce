<?php require_once '../../includes/header.php'; ?>
<pre>
<?php

echo "Goto Bar <hr>";
goto a;
echo 'Foo';

a:
echo 'Bar';



echo "<hr>";
for($i=0,$j=50; $i<100; $i++) {
  while($j--) {
    if($j==17) goto end;
  }
}
echo "i = $i";    //not go to here
end:
echo "j hit 17\n";
echo "i = $i";


echo "<hr>";
echo "Fatal error: 'goto' into loop or switch statement is disallowed";
//Fatal error: 'goto' into loop or switch statement is disallowed
//goto loop;
for($i=0,$j=50; $i<100; $i++) {
  while($j--) {
    //loop:
    break 2;
  }
}
echo "$i = $i";
echo "<hr>";



// DEMONSTRATE THAT THE GOTO LABEL IS CASE-SENSITIVE
goto b;
echo 'Foo';
b: echo "Bar\n";

goto B;
echo 'Foo';
B: echo "Baz\n";

// CAN THE GOTO LABEL BE A VARIABLE?
$a = 'abc';
//goto $a; // NOPE: PARSE ERROR
echo "Foo\n";
abc: echo "Boom\n";

c: eval("goto c;"); // 'goto' to undefined label 'c'
eval("c: goto c;"); // works


C:
echo "C\n";
//Fatal error:  'goto' to undefined label 'c'
//goto C;




?>
</pre>
<?php require_once '../../includes/footer.php'; ?>