<?php require_once '../../includes/header.php'; ?>
<pre>
<?php

//output: 0
$i = 0;
do {
    echo $i;
} while ($i > 0);
echo "\n";

$i = 1;
do {
    echo $i;
    $i ++;
} while ($i <= 10);
echo "\n";

//12345678910
$i = 1;
do {
    echo $i++;
} while ($i <= 10);
echo "\n";


//234567891011
$i = 1;
do {
    echo ++$i;
} while ($i <= 10);
echo "\n";


?>
</pre>
<?php require_once '../../includes/footer.php'; ?>