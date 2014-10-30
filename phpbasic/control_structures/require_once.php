<?php require_once '../../includes/header.php'; ?>
<pre>
<?php


require 'include/hello.php';
require_once 'include/hello.php';
//outputs: "Hello"


var_dump(require_once 'include/hello.php'); // bool(true)
var_dump(require_once 'include/hello.php'); // bool(true)

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>