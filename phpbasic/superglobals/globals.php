<?php require_once '../../includes/header.php'; ?>
<pre>
<?php

function test() {
    $foo = "local variable";

    echo '$foo in global scope: ' . $GLOBALS["foo"] . "\n";
    echo '$foo in current scope: ' . $foo . "\n";
}

$foo = "Example content";
test();

/*
 * $foo in global scope: Example content
   $foo in current scope: local variable
 */
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

