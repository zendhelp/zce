<?php require_once '../../includes/header.php'; ?>
<pre>
<?php

include 'include/hello.php';
include_once 'include/Hello.php';
include_once 'include/hello.php';
//outputs: "Hello"

var_dump(include_once 'include/hello.php'); // bool(true)
var_dump(include_once 'include/hello.php'); // bool(true)

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>